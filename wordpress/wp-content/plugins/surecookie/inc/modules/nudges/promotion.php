<?php
/**
 * Promotion class.
 *
 * A time-boxed sale message shown as a scrolling bar above the SureCookie admin
 * header. The window is checked on every request, so the bar appears and goes
 * away on its own, without a plugin update.
 *
 * @package SureCookie\Inc\Modules\Nudges
 * @since 1.9.0
 */

namespace SureCookie\Inc\Modules\Nudges;

use SureCookie\Inc\Functions\Helper;
use SureCookie\Inc\Traits\GetInstance;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Promotion class.
 *
 * @since 1.9.0
 */
class Promotion {

	use GetInstance;

	/**
	 * Id of the running promotion. Also the dismissal key, so a later sale
	 * with a new id shows again for users who dismissed this one.
	 *
	 * @since 1.9.0
	 */
	public const ID = 'surecookie-bfcm-2026';

	/**
	 * Start of the sale, UTC.
	 *
	 * @since 1.9.0
	 */
	public const STARTS_AT = '2026-11-15 08:00:00';

	/**
	 * End of the sale, UTC: Dec 7, 00:00 PT, right after Dec 6, 11:59:59 PM PT.
	 *
	 * @since 1.9.0
	 */
	public const ENDS_AT = '2026-12-07 08:00:00';

	/**
	 * User option holding the promotion ids a user has dismissed.
	 *
	 * @since 1.9.0
	 */
	public const DISMISSED_META = 'surecookie_dismissed_promotions';

	/**
	 * The promotion for the current user, or null when it is not live, Pro is
	 * already active, the user cannot manage SureCookie, or the user dismissed it.
	 *
	 * @since 1.9.0
	 * @param int|null $now Unix timestamp to check the window against. Defaults to now.
	 * @return array<string, mixed>|null
	 */
	public function get_for_current_user( $now = null ) {
		$user_id = get_current_user_id();

		if ( ! $user_id || ! current_user_can( Helper::capability() ) || Helper::is_pro_active() || ! $this->is_live( $now ) ) {
			return null;
		}

		if ( in_array( self::ID, $this->get_dismissed( $user_id ), true ) ) {
			return null;
		}

		return [
			'id'      => self::ID,
			'ends_at' => (int) strtotime( self::ENDS_AT . ' UTC' ),
			'badge'   => __( 'Live now', 'surecookie' ),
			'items'   => $this->get_items(),
			'cta'     => [
				'label' => __( 'Grab the Deal', 'surecookie' ),
				'url'   => add_query_arg(
					[
						'utm_source'   => 'surecookie-dashboard',
						'utm_medium'   => 'top-bar',
						'utm_campaign' => 'bfcm-2026',
					],
					'https://surecookie.com/pricing/'
				),
			],
		];
	}

	/**
	 * Whether the sale window is open.
	 *
	 * @since 1.9.0
	 * @param int|null $now Unix timestamp. Defaults to now.
	 * @return bool
	 */
	public function is_live( $now = null ) {
		$now = null === $now ? time() : (int) $now;

		return $now >= strtotime( self::STARTS_AT . ' UTC' ) && $now < strtotime( self::ENDS_AT . ' UTC' );
	}

	/**
	 * Record that a user dismissed the promotion.
	 *
	 * @since 1.9.0
	 * @param int $user_id User ID.
	 * @return bool
	 */
	public function dismiss( $user_id ) {
		$dismissed = $this->get_dismissed( $user_id );

		if ( in_array( self::ID, $dismissed, true ) ) {
			return true;
		}

		$dismissed[] = self::ID;

		return (bool) update_user_option( $user_id, self::DISMISSED_META, $dismissed );
	}

	/**
	 * Promotion ids the user has dismissed.
	 *
	 * @since 1.9.0
	 * @param int $user_id User ID.
	 * @return array<int, string>
	 */
	private function get_dismissed( $user_id ) {
		$dismissed = get_user_option( self::DISMISSED_META, $user_id );

		return is_array( $dismissed ) ? array_values( array_filter( $dismissed, 'is_string' ) ) : [];
	}

	/**
	 * Scrolling segments, each a list of text parts with a style: plain,
	 * bold, accent or strike. Prices match surecookie.com/pricing.
	 *
	 * @since 1.9.0
	 * @return array<int, array<int, array{text: string, style: string}>>
	 */
	private function get_items() {
		return [
			[
				[
					'text'  => __( 'Black Friday Sale', 'surecookie' ),
					'style' => 'bold',
				],
			],
			[
				[
					'text'  => __( 'Up to 34% OFF', 'surecookie' ),
					'style' => 'accent',
				],
				[
					'text'  => __( 'SureCookie Pro', 'surecookie' ),
					'style' => 'plain',
				],
			],
			[
				[
					'text'  => __( 'Pro', 'surecookie' ),
					'style' => 'bold',
				],
				[
					'text'  => '$99',
					'style' => 'accent',
				],
				[
					'text'  => '$149',
					'style' => 'strike',
				],
				[
					'text'  => __( 'first year', 'surecookie' ),
					'style' => 'plain',
				],
			],
			[
				[
					'text'  => __( 'Business', 'surecookie' ),
					'style' => 'bold',
				],
				[
					'text'  => '$179',
					'style' => 'accent',
				],
				[
					'text'  => '$249',
					'style' => 'strike',
				],
				[
					'text'  => __( 'first year', 'surecookie' ),
					'style' => 'plain',
				],
			],
			[
				[
					'text'  => __( 'Lifetime', 'surecookie' ),
					'style' => 'bold',
				],
				[
					'text'  => __( 'Pro', 'surecookie' ),
					'style' => 'plain',
				],
				[
					'text'  => '$299',
					'style' => 'accent',
				],
				[
					'text'  => '$399',
					'style' => 'strike',
				],
				[
					'text'  => __( 'Business', 'surecookie' ),
					'style' => 'plain',
				],
				[
					'text'  => '$449',
					'style' => 'accent',
				],
				[
					'text'  => '$599',
					'style' => 'strike',
				],
			],
		];
	}
}
