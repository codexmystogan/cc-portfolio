<?php
/**
 * ConsentState - Server-side reader for the SureCookie consent cookie.
 *
 * Single source of truth for parsing `surecookie_user_consent` at PHP render
 * time. Consumed by the WP Consent API integration and SureCookie Pro's geo
 * rules. Consent Mode reads it in the browser instead (#1254).
 *
 * Privacy-safe defaults: missing or invalid cookie → all categories denied, and
 * a choice older than the last "Re-request Consent" counts as none (#1264).
 *
 * @package SureCookie
 * @since 1.2.4
 */

namespace SureCookie\Inc\Functions;

use SureCookie\Inc\Integrations\WpConsentApi\Consent_Handler;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * ConsentState class.
 *
 * @since 1.2.4
 */
final class ConsentState {
	/**
	 * Cookie that stores the visitor's consent payload, before this site's scope tag.
	 */
	private const COOKIE_NAME = 'surecookie_user_consent';

	/**
	 * Cookie that carries the visitor's session id, before this site's scope tag.
	 */
	private const SESSION_COOKIE_NAME = 'surecookie_session_id';

	/**
	 * Default category keys required to consider the cookie structurally valid.
	 */
	private const REQUIRED_KEYS = [ 'essential', 'functional', 'analytics', 'marketing' ];

	/**
	 * Per-request memo of the parsed payload (`null` = no/invalid cookie).
	 *
	 * @var array<string, mixed>|null
	 */
	private static ?array $payload_cache = null;

	/**
	 * Whether the memo has been populated this request.
	 *
	 * @var bool
	 */
	private static bool $cache_initialized = false;

	/**
	 * Per-request memo of the active model used when no current choice exists.
	 *
	 * @var string|null
	 */
	private static ?string $default_model_cache = null;

	/**
	 * Per-request memo of this site's scope tag.
	 *
	 * @var string|null
	 */
	private static ?string $scope_cache = null;

	/**
	 * Preferences map as `[ category => bool ]`. Null when no/invalid cookie.
	 *
	 * Uses strict `=== true` rather than `boolval()` because PHP coerces every
	 * non-empty non-"0" string to true - a tampered cookie with `"marketing":"false"`
	 * would otherwise grant marketing. Anything that isn't literally `true` in
	 * the JSON resolves to false (fail-closed). Matches the old strict
	 * `is_bool()` validation the GCM handler used before extraction.
	 *
	 * @since 1.2.4
	 * @return array<string, bool>|null
	 */
	public static function preferences(): ?array {
		$payload = self::payload();
		if ( ! is_array( $payload ) || ! is_array( $payload['preferences'] ?? null ) ) {
			return null;
		}
		return array_map(
			static function ( $value ): bool {
				return $value === true;
			},
			$payload['preferences']
		);
	}

	/**
	 * Has the visitor granted consent for `$category`?
	 *
	 * Fails closed: missing/invalid cookie returns false.
	 *
	 * @since 1.2.4
	 * @param string $category Category key (e.g., 'analytics', 'marketing').
	 * @return bool
	 */
	public static function has_category( string $category ): bool {
		$prefs = self::preferences();
		return is_array( $prefs ) && ! empty( $prefs[ $category ] );
	}

	/**
	 * Resolve one category using the shared GPC, stored-choice and model order.
	 *
	 * @param string $category SureCookie category.
	 * @return bool
	 */
	public static function allows( string $category ): bool {
		if ( $category === 'essential' ) {
			return true;
		}

		if ( self::gpc() && self::gpc_withholds( $category ) ) {
			return false;
		}

		if ( self::has_recorded_choice() ) {
			return self::has_category( $category );
		}

		if ( self::$default_model_cache === null ) {
			self::$default_model_cache = Consent_Handler::get_active_consent_model();
		}

		return self::$default_model_cache === 'opt-out';
	}

	/**
	 * Whether GPC withholds a category on its own, whatever the visitor chose.
	 *
	 * GPC says "do not sell or share", so it withholds everything except the
	 * categories that cannot be a sale or a share: essential, and functional,
	 * which exists to deliver content the visitor asked for (#1409). An id we
	 * do not know, including a site's own category, is withheld.
	 *
	 * Mirrored byte-for-byte in `ConsentManager.isAllowed()` and the DOM guard;
	 * `GpcScopeContractTest` fails when they drift.
	 *
	 * @since 1.8.0
	 * @param string $category SureCookie category.
	 * @return bool
	 */
	public static function gpc_withholds( string $category ): bool {
		return $category !== 'essential' && $category !== 'functional';
	}

	/**
	 * Whether the visitor has ever interacted with the banner. Distinct from
	 * `has_category` - a "decline all" choice still counts as having a cookie.
	 *
	 * @since 1.2.4
	 * @return bool
	 */
	public static function has_recorded_choice(): bool {
		return self::preferences() !== null;
	}

	/**
	 * Whether the request carries Global Privacy Control. The only server-side
	 * read, so every consumer agrees; strict `'1'`, the one value the spec defines.
	 *
	 * @since 1.6.0
	 * @return bool
	 */
	public static function gpc(): bool {
		// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized, WordPress.Security.ValidatedSanitizedInput.MissingUnslash -- Compared against a literal, never used as data.
		return ( $_SERVER['HTTP_SEC_GPC'] ?? null ) === '1';
	}

	/**
	 * Reset the per-request memo. Test-only.
	 *
	 * @since 1.2.4
	 * @return void
	 */
	public static function reset_cache(): void {
		self::$payload_cache       = null;
		self::$cache_initialized   = false;
		self::$default_model_cache = null;
		self::$scope_cache         = null;
	}

	/**
	 * Name of this site's consent cookie.
	 *
	 * @since 1.9.0
	 * @return string
	 */
	public static function cookie_name(): string {
		return self::COOKIE_NAME . '_' . self::scope_token();
	}

	/**
	 * Name of this site's session cookie.
	 *
	 * @since 1.9.0
	 * @return string
	 */
	public static function session_cookie_name(): string {
		return self::SESSION_COOKIE_NAME . '_' . self::scope_token();
	}

	/**
	 * Publish this site's cookie names for add-ons that must not spell them.
	 *
	 * An add-on reads `apply_filters( 'surecookie_session_cookie_name', <its own
	 * fallback> )`, so it keeps working against a Free that predates scoping and
	 * never has to couple to this class. Pro's data-request export is the first
	 * consumer: it spelled the pre-scope name, which a scoped install never sets,
	 * so every export shipped with its consent history silently missing (#1347).
	 *
	 * Registered as a callback rather than applied inside the accessors, because
	 * an accessor that filters its own return value would recurse through here.
	 *
	 * @since 1.9.0
	 * @return void
	 */
	public static function publish_cookie_names(): void {
		add_filter( 'surecookie_session_cookie_name', [ self::class, 'session_cookie_name' ] );
		add_filter( 'surecookie_consent_cookie_name', [ self::class, 'cookie_name' ] );
	}

	/**
	 * Consent-cookie names for an early inline reader.
	 *
	 * The legacy key is present only where adoption is allowed, so its presence is
	 * itself the permission and no reader carries a separate boolean to misread.
	 *
	 * @since 1.9.0
	 * @return array<string, string>
	 */
	public static function reader_names(): array {
		$names = [ 'n' => self::cookie_name() ];
		if ( self::may_adopt_legacy() ) {
			$names['l'] = self::COOKIE_NAME;
		}
		return $names;
	}

	/**
	 * Every cookie name the bundle needs, including what it may adopt.
	 *
	 * @since 1.9.0
	 * @return array<string, string>
	 */
	public static function browser_contract(): array {
		$names = [
			'consent_cookie' => self::cookie_name(),
			'session_cookie' => self::session_cookie_name(),
		];
		if ( self::may_adopt_legacy() ) {
			$names['legacy_consent_cookie'] = self::COOKIE_NAME;
			$names['legacy_session_cookie'] = self::SESSION_COOKIE_NAME;
		}
		return $names;
	}

	/**
	 * Whether a pre-scope cookie on this host can only have been written by this site.
	 *
	 * Fails closed: a host that might carry a sibling's answer never inherits one,
	 * because a cookie written before scoping records no writer. Deliberately not
	 * counting sites, since `get_blog_count()` is a cached network option that can
	 * read low and would then silently leave #1347 unfixed.
	 *
	 * @since 1.9.0
	 * @return bool
	 */
	public static function may_adopt_legacy(): bool {
		if ( ! function_exists( 'is_multisite' ) || ! is_multisite() ) {
			return true;
		}
		return function_exists( 'is_subdomain_install' ) && is_subdomain_install();
	}

	/**
	 * Stable per-site tag that keeps one site's consent out of its neighbour's.
	 *
	 * The raw `home` option, never `home_url()`: WPML and Polylang filter that to
	 * `/fr/` per language, which would rename the cookie on every language switch.
	 * The path alone, so https, www and domain-per-language moves cannot move it.
	 *
	 * @since 1.9.0
	 * @return string
	 */
	private static function scope_token(): string {
		if ( self::$scope_cache === null ) {
			$path              = (string) wp_parse_url( (string) get_option( 'home' ), PHP_URL_PATH );
			self::$scope_cache = substr( hash( 'sha256', '/' . trim( $path, '/' ) ), 0, 8 );
		}
		return self::$scope_cache;
	}

	/**
	 * Full parsed cookie payload, or null when the cookie is missing/invalid.
	 *
	 * Internal helper for preferences() / has_recorded_choice() - kept private
	 * because every consumer pattern is better served by one of the typed
	 * accessors below. Promote to public when a real external need appears.
	 *
	 * @since 1.2.4
	 * @return array<string, mixed>|null
	 */
	private static function payload(): ?array {
		if ( ! self::$cache_initialized ) {
			self::$payload_cache     = self::parse();
			self::$cache_initialized = true;
		}
		return self::$payload_cache;
	}

	/**
	 * Read + validate the cookie.
	 *
	 * Skips `sanitize_text_field` deliberately - it corrupts URL-encoded JSON.
	 * Safety comes from structural validation + boolean coercion of values.
	 *
	 * @since 1.2.4
	 * @return array<string, mixed>|null
	 */
	private static function parse(): ?array {
		// The scoped cookie first, the pre-scope one only where this site could have
		// written it. `allows()` decides seven PixelYourSite filters and what the WP
		// Consent API bridge publishes, and a pixel PHP declined to print cannot be
		// re-fired once the browser adopts, so this cannot wait for the bundle (#1347).
		$name = self::cookie_name();
		if ( ! isset( $_COOKIE[ $name ] ) && self::may_adopt_legacy() ) {
			$name = self::COOKIE_NAME;
		}

		if ( ! isset( $_COOKIE[ $name ] ) ) {
			return null;
		}

		// phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotSanitized -- JSON is validated structurally below; sanitize_text_field corrupts URL-encoded JSON.
		$raw = wp_unslash( $_COOKIE[ $name ] );
		if ( ! is_string( $raw ) ) {
			return null;
		}

		$decoded = json_decode( urldecode( $raw ), true );

		if ( ! is_array( $decoded ) || ! is_array( $decoded['preferences'] ?? null ) ) {
			return null;
		}

		// Require real booleans: a tampered cookie with string values (e.g.
		// "marketing":"false") is rejected outright, so a malformed cookie is
		// treated as "no recorded choice" (fail-closed, region defaults emitted).
		foreach ( self::REQUIRED_KEYS as $key ) {
			if ( ! isset( $decoded['preferences'][ $key ] ) || ! is_bool( $decoded['preferences'][ $key ] ) ) {
				return null;
			}
		}

		// A choice from before the last "Re-request Consent" is no choice, the rule
		// consentManager.isRenewalRequired() applies; an unreadable time counts as stale.
		$renewed_at = (int) Settings::get( 'consent_renewed_at' );
		$recorded   = is_string( $decoded['timestamp'] ?? null ) ? (int) strtotime( $decoded['timestamp'] ) : 0;
		if ( $renewed_at > 0 && $recorded < $renewed_at ) {
			return null;
		}

		return $decoded;
	}
}
