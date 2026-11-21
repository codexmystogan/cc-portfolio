=== SureCookie - GDPR Cookie Consent Banner, Cookie Scanner & Script Blocking ===
Contributors: brainstormforce
Tags: cookie consent, cookie banner, consent logs, ccpa, cookie policy
Requires at least: 6.7
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.9.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Donate link: https://www.paypal.me/BrainstormForce

Cookie consent banner with real browser scanning, script blocking, Google Consent Mode, GDPR/CCPA consent logs, and a cookie policy page.

== Description ==

SureCookie is a WordPress cookie consent plugin that helps you scan cookies, display a customizable cookie banner, block non-essential scripts before consent, and store consent logs inside your WordPress database.

It is built for site owners, E-commerce stores, agencies, bloggers, and WordPress professionals who want more than a basic cookie notice. SureCookie helps you understand what cookies and third-party services are running on your site, lets visitors manage their choices, and gives you a practical consent workflow without visitor-based pricing.

👉 <a href="https://app.zipwp.com/blueprint/surecookie-n9i" target="_blank" rel="noopener">Try the live demo of SureCookie.</a>

[youtube https://www.youtube.com/watch?v=IwU3Qa1VQYI]

= Not Just a Cookie Banner =

A cookie notice can tell visitors that your site uses cookies, but that alone does not manage consent. If analytics scripts, marketing pixels, video embeds, maps, or tag manager scripts run before visitors choose, the banner is only cosmetic. SureCookie connects the banner to the rest of the workflow: scan the site, review detected cookies, block non-essential scripts before consent, store consent logs locally, and keep your cookie policy easier to maintain.

= How SureCookie Works =

SureCookie follows a simple WordPress cookie consent workflow:

1. Scan selected pages with the real browser cookie scanner.
2. Review detected cookies, scripts, resources, and third-party domains.
3. Organize cookies into consent categories such as Essential, Functional, Analytics, and Marketing.
4. Enable script blocking so non-essential scripts wait for consent.
5. Show the cookie consent banner and preference modal to visitors.
6. Store consent logs locally in WordPress for review and export.
7. Generate or connect a cookie policy page that reflects your cookie setup.
8. Generate a privacy policy draft whose cookie and consent sections stay in step with your settings.

This makes SureCookie more than a WordPress cookie banner. Many cookie plugins focus only on the visitor-facing notice, while SureCookie focuses on what happens before and after it: cookie detection, script blocking, consent records, and policy support.

= Free Features Included =

The WordPress.org version of SureCookie includes the core consent workflow:

* Cookie consent banner: Show a clean banner or notice for visitors.
* Privacy policy generator: Build a privacy policy draft from your cookie and consent settings, with the factual sections kept current by shortcodes.
* Business details: Enter your legal entity, address and privacy contact once, then reuse them anywhere with shortcodes such as [surecookie_company_name].
* Preference modal: Let visitors review and manage cookie categories.
* Accept, Accept All, Decline, and Preferences buttons: Control each button's text, order and visibility.
* Real browser cookie scanner: Scan selected pages using a browser-based scanning service.
* Cookie categories: Use Essential, Functional, Analytics, Marketing, and Uncategorized categories. See [managing cookie categories](https://surecookie.com/docs/manage-cookie-categories/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=cookie_categories_docs).
* Custom cookies: Add and manage cookies manually when needed.
* Script blocking: Block non-essential scripts before consent is given.
* Resource blocking: Manage scripts, iframes, embeds, and objects found during scans.
* Consent logs: Store visitor choices inside your WordPress database.
* Consent log filters: Search and filter logs by action, country, IP, and session ID.
* Consent PDF export: Export individual consent records for documentation.
* Consent retention settings: Control how long consent logs are kept.
* Monthly automatic scanning: Schedule recurring scans on the free plan.
* Scan history and change detection: See what changed between scans, including newly detected cookies and domains.
* Rule-based category suggestions: Get suggested categories for newly detected cookies.
* Cookie policy page: Generate a page with dynamic cookie tables.
* Re-consent controls: Add a Cookie Preferences link through a shortcode or menu item.
* Re-request consent: Ask all visitors to review choices again when needed.
* Google Consent Mode support: Send consent states to supported Google services.
* WP Consent API support: Share consent state with compatible WordPress plugins.
* Multilingual support: Work with WPML and Polylang for banner and admin text.
* RTL support: Display frontend cookie policy content correctly for RTL languages.
* MCP and WordPress Abilities support: Enable AI assistant access to SureCookie management actions when supported.
* No visitor-based limits: SureCookie does not charge by traffic or monthly visitors.

= Free vs Pro Clarity =

Everything listed above is in the free plugin. Advanced workflows are reserved for SureCookie Pro: weekly automatic scans, email scan digests, auto-apply behavior, compliance guard workflows, [geographic targeting](https://surecookie.com/docs/how-to-set-up-geographic-targeting/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=geo_targeting_docs) (which applies CCPA-style opt-out rules per region), and consent forwarding. Compare on the [features](https://surecookie.com/features/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=features_page) page or see [plans and pricing](https://surecookie.com/pricing/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=pricing_page).


= Real Browser Cookie Scanner =

SureCookie uses a browser-based scanning service at [https://library.surecookie.com/](https://library.surecookie.com/) to inspect selected pages. See how the [cookie scanner](https://surecookie.com/docs/cookie-scanner/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=cookie_scanner_docs) works.

Instead of only reading static HTML, the scanner loads your pages in a real browser environment. This helps detect cookies and resources that appear after page load, through tag managers, or through third-party scripts.

The scanner can help identify:

* Analytics, marketing, advertising, functional, and preference cookies
* WooCommerce and WordPress session cookies
* Third-party domains and resources
* Tag manager loaded and dynamically injected scripts


= Monthly Automatic Scanning =

When enabled, SureCookie runs scheduled monthly scans through WP-Cron. The scan uses the same scanner engine, respects the configured scan scope, and records the latest scan history. Full setup is in the [automatic scheduled scanning](https://surecookie.com/docs/automatic-scheduled-scanning/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=auto_scanning_docs) guide.

The scan history can show:

* Newly detected cookies
* Removed cookies
* Recategorized cookies
* Newly detected third-party domains
* Whether the scan was manual or automatic
* The last scan date and cookie count

= Script Blocking Before Consent =

SureCookie can block non-essential scripts before the visitor gives consent.

When blocking is enabled, SureCookie processes the frontend HTML and converts matching resources so they do not execute until the relevant cookie category is allowed. It can handle scripts as well as embedded content such as iframes, embeds, and objects.

This matters because a banner alone does not stop tracking. SureCookie is designed to connect consent choices with technical enforcement.

The script blocker also includes safeguards so it skips admin pages, REST requests, AJAX requests, feeds, JSON responses, XML responses, and scanner bypass requests. The [resource and script blocking](https://surecookie.com/docs/resource-blocking/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=resource_blocking_docs) guide covers how scripts, iframes and embeds are matched.

= Customizable Banner and Preferences =

SureCookie gives you control over the visitor-facing consent experience.

You can customize:

* Banner message and description
* Rich text banner content
* Accept, Accept All, Decline, and Preferences button labels
* Button order and visibility
* Banner position and width
* Banner logo
* Banner animation
* Background overlay
* Preference modal heading and description
* Cookie category labels and descriptions
* Custom CSS

Visitors can accept all cookies, decline non-essential cookies, or open the preferences modal and choose specific categories. See [customizing banner content](https://surecookie.com/docs/customizing-banner-content/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=banner_content_docs) and [banner layout](https://surecookie.com/docs/customizing-banner-layout/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=banner_layout_docs) for every option, and [custom CSS for banner styling](https://surecookie.com/docs/custom-css-for-banner-styling/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=banner_css_docs) if you need finer control.

= Consent Logs Stored Locally =

SureCookie stores consent records inside your WordPress database.

This is different from many SaaS consent management platforms where consent records live on an external platform. With SureCookie, your consent logs stay on your WordPress site and can be reviewed from the admin area.

Consent logs can include:

* User session ID
* Consent action, such as accepted, declined, or partially accepted
* Cookie category preferences
* Masked IP address
* Timestamp
* Country

Admins can view, search, filter, delete, and export logs from WordPress. SureCookie also includes retention settings so you can control how long logs are kept. See [understanding consent logs](https://surecookie.com/docs/understanding-surecookie-logs/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=consent_logs_docs) and [exporting consent logs to PDF or CSV](https://surecookie.com/docs/exporting-consent-logs-pdf-csv/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=consent_logs_export_docs).

= Cookie Policy Page and Generator =

SureCookie includes a cookie policy generator that can create a Cookie Policy page for your website.

The generated page uses native WordPress blocks and includes a dynamic shortcode that displays cookie tables grouped by category and provider. The cookie policy content can include:

* Cookie categories
* Cookie names
* Purpose or description
* Duration
* Domain
* Last updated timestamp
* A table of contents when multiple categories are available

You can edit the generated policy page in the WordPress editor and keep the dynamic cookie table connected to your scanned and manually added cookies. Walkthrough: [how to generate a cookie policy page](https://surecookie.com/docs/how-to-generate-cookie-policy-page/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=cookie_policy_docs).

= Re-Consent and Re-Request Consent =

Visitors should be able to change their choices later.

SureCookie includes a re-consent shortcode:

`[surecookie_reconsent_button]`

You can use it to add a Cookie Preferences button on your site. SureCookie can also add a virtual Cookie Preferences item to a selected WordPress navigation menu.

Admins can also re-request consent from all visitors. This is useful after updating your cookie policy, adding new tracking tools, changing categories, or making a major consent workflow change. See the [re-consent](https://surecookie.com/docs/re-consent/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=reconsent_docs) guide.

= Google Consent Mode =

When enabled, SureCookie sends consent states for supported Google services and updates them when visitors change their preferences. Setup steps: [setting up Google Consent Mode v2](https://surecookie.com/docs/setting-up-google-consent-mode-v2/?utm_source=wporg&utm_medium=readme&utm_campaign=core_plugin&utm_content=consent_mode_docs). It maps SureCookie categories to Google consent signals, detects Google services from enqueued scripts or the page HTML, and hides block toggles that Google Consent Mode already manages.

= WP Consent API =

SureCookie reads its consent cookie and syncs the visitor's consent state so compatible WordPress plugins can check consent using the standardized WP Consent API flow.

Default category mapping includes:

* Essential to functional
* Functional to preferences
* Analytics to statistics
* Marketing to marketing

Developers can customize mappings through filters.

= Multilingual and RTL Support =

SureCookie includes multilingual compatibility for WPML and Polylang.

It can register and translate banner text, button labels, preference modal text, category labels, and related frontend strings. It also includes RTL support for cookie policy layouts.

= MCP and WordPress Abilities =

When enabled, AI assistants and compatible tools can use structured SureCookie abilities to manage settings, cookie categories, consent logs, cookie management, and site scanner actions. Scanner start actions still require care because they contact an external scanning service.

= Who Should Use SureCookie? =

SureCookie is a good fit for:

* WordPress site owners and agencies who need a cookie consent banner across client sites
* E-commerce stores and publishers using analytics, ads, pixels, embeds, or marketing tools
* Businesses running tag managers, heatmaps, video embeds, maps, forms, or CRM and conversion tracking
* Developers who want a WordPress-native consent workflow with hooks and APIs, and consent logs kept inside WordPress

= Important Legal Note =

SureCookie provides technical tools for cookie scanning, script blocking, consent collection, consent logging, and cookie policy management.

No WordPress plugin can guarantee legal compliance on its own. Privacy and cookie requirements depend on your website, visitors, region, policies, data processing practices, and legal obligations. For legal advice, consult a qualified legal professional.

== External Services ==

SureCookie uses external services for cookie scanning, site verification, and geolocation.

= Cookie Scanning =

SureCookie connects to [https://library.surecookie.com/](https://library.surecookie.com/) to provide real browser-based cookie scanning and smart categorization.

When you run a scan, SureCookie sends the selected page URLs to the scanning service. A browser-based scanner visits those pages and detects cookies, scripts, resources, and third-party domains.

= Scanner Registration and Authentication =

Before the first scan, SureCookie performs a one-time registration handshake with `library.surecookie.com/api/register`.

The request sends:

* Site URL
* WordPress admin email
* SureCookie version
* A temporary installation nonce (one-time, random)

The scanning service verifies the site through a temporary REST endpoint, then returns site-specific credentials and a verification token. These credentials are stored locally in a non-autoloaded WordPress option and are used for authenticated scan requests.

= Consent IP Logs and Region Detection =

For consent logging and country detection, visitor IP addresses may be processed through MaxMind-backed region detection through SureCookie's service. This helps SureCookie record the country in the consent log.

IP addresses are masked before being stored in your WordPress database.

MaxMind attribution: [https://www.maxmind.com](https://www.maxmind.com)

= New Version Check =

At most once a day, when someone who can update plugins opens a SureCookie admin screen, SureCookie asks `library.surecookie.com/api/plugin/live-versions` for the current SureCookie and SureCookie Pro version numbers, so the dashboard can tell you when yours is older. The request sends no site data beyond what WordPress includes in every outgoing request, such as your site address in its user agent.

= Service URLs =

* SureCookie scanning and geolocation service: [https://library.surecookie.com/](https://library.surecookie.com/)
* SureCookie privacy policy: [https://surecookie.com/privacy-policy/](https://surecookie.com/privacy-policy/)
* MaxMind: [https://www.maxmind.com](https://www.maxmind.com)

== Data Stored Locally ==

SureCookie stores plugin settings and consent data in your WordPress database.

This can include:

* Banner and preference modal settings
* Cookie categories
* Custom cookies
* Scanned cookies
* Scanned resources
* Scan history
* Consent logs
* Cookie policy page ID
* Automatic scan settings
* Scanner credentials

Consent logs and scan results can be viewed, exported, or deleted from the WordPress admin.

== Privacy and Data Processing ==

SureCookie processes data through its API service at `library.surecookie.com` for cookie scanning, scanner authentication, and region-aware consent logging. Here is what happens and why.

= What We Send to SureCookie Services =

During the one-time scanner registration and site verification flow, SureCookie sends the site URL, the WordPress administrator email, the SureCookie version, and a temporary installation nonce. The scanning service uses these to verify your site and issue credentials, then returns a verification token that SureCookie exposes at a temporary REST endpoint for domain verification.

After registration, scan requests use site-specific credentials stored locally in WordPress and do not resend the admin email.

When a scan runs, SureCookie sends selected page URLs to the scanning service so a real browser can detect cookies, scripts, resources, and third-party domains.

= What Is Processed and Why =

* Cookie scanning: Selected page URLs are scanned in a real browser environment to detect cookies, scripts, resources, and third-party domains.
* Cookie categorization: Detected cookie details, such as names, domains, and durations, are used to help categorize cookies.
* Region detection: Visitor IP addresses may be processed through MaxMind-backed region detection to determine country-level location for consent logs. IP addresses are masked before being stored in your WordPress database.
* Consent records: Consent choices, timestamps, category preferences, and session details are logged locally in your WordPress database.

= Where Data Lives =

* Consent logs, scan results, settings, and scanner credentials are stored in your WordPress database.
* Data sent to `library.surecookie.com` for scanning and geolocation may be temporarily processed for those features.
* SureCookie does not sell this data or use it for advertising.

= Data Retention and Control =

* Consent logs and scan results can be viewed, exported, or deleted from your WordPress admin.
* Consent log retention periods are configurable in plugin settings.
* Scanner credentials are stored locally in a non-autoloaded WordPress option.

= Security =

* API communication uses HTTPS.
* Scan requests use authenticated site credentials after the registration flow.
* Site credentials are used to sign later scan requests.

Because visitor data and selected page URLs can be processed through SureCookie services, you should mention this in your site's privacy policy where appropriate.

Full details: [https://surecookie.com/privacy-policy/](https://surecookie.com/privacy-policy/)

For questions about data processing, visit [https://surecookie.com/support/](https://surecookie.com/support/).

== Useful Links ==

* [SureCookie Website](https://surecookie.com/)
* [Documentation](https://surecookie.com/docs/)
* [Support Forum](https://wordpress.org/support/plugin/surecookie/)
* [Privacy Policy](https://surecookie.com/privacy-policy/)
* [Live Demo](https://app.zipwp.com/blueprint/surecookie-n9i)

== About Brainstorm Force ==

SureCookie is built by Brainstorm Force, the team behind Astra and other widely used WordPress products.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/surecookie` directory, or install the plugin through the WordPress Plugins screen.
2. Activate SureCookie from the Plugins screen.
3. Go to the SureCookie dashboard in WordPress.
4. Configure your banner content, cookie categories, and consent settings.
5. Select pages and run a cookie scan.
6. Review detected cookies and resources.
7. Enable script blocking if you want non-essential scripts blocked before consent.
8. Generate or connect your Cookie Policy page.
9. Test the banner and preference modal on the frontend.

== Frequently Asked Questions ==

= Is SureCookie a consent management platform? =

SureCookie provides consent management features inside WordPress, including a cookie banner, preference modal, cookie scanner, script blocking, consent logs, and cookie policy support. It is not a SaaS platform that charges by visitor count.

= Can SureCookie be used as a cookie blocker? =

Yes. When script blocking is enabled, SureCookie can act as a cookie blocker for non-essential scripts and embedded resources until the visitor gives consent for the related category.

= Does SureCookie help with cookie compliance? =

SureCookie helps with the technical parts of cookie compliance, such as scanning cookies, showing a consent banner, blocking non-essential scripts, storing consent logs, and maintaining a cookie policy page. It does not replace legal advice or guarantee compliance by itself.

= Is SureCookie just a cookie banner plugin? =

No. SureCookie includes a cookie banner, but it also includes cookie scanning, script blocking, consent logs, cookie policy page support, re-consent controls, Google Consent Mode, WP Consent API, and monthly automatic scanning in the free plugin.

= What features are included in the free plugin? =

The free plugin includes the banner, preference modal, real browser cookie scanner, custom cookies, script blocking, consent logs, consent log export, cookie policy page generation, re-consent button, re-request consent, monthly automatic scanning, scan history, Google Consent Mode, WP Consent API, multilingual support, and no visitor-based limits.

= How does the cookie scanner work? =

SureCookie sends selected page URLs to `library.surecookie.com`, where a browser-based scanner loads the pages and detects cookies, third-party domains, scripts, and resources. This helps detect cookies that may not appear in static HTML.

= Does SureCookie support automatic scanning? =

Yes. The free plugin includes monthly automatic scanning through WP-Cron. Weekly scanning, email digests, auto-apply, and compliance guard behavior are Pro extensions.

= Can SureCookie show what changed between scans? =

Yes. SureCookie records the latest scan history and can show newly detected cookies, removed cookies, recategorized cookies, and new third-party domains.

= Can SureCookie block scripts before consent? =

Yes. SureCookie can block non-essential scripts and embedded resources before consent is given. It can process scripts, iframes, embeds, and objects when blocking is enabled.

= Does SureCookie support Google Consent Mode? =

Yes. SureCookie includes Google Consent Mode support and can update Google consent signals based on visitor choices.

= Does SureCookie support WP Consent API? =

Yes. SureCookie can sync consent state with WP Consent API so compatible plugins can read consent through the standardized API.

= Can visitors change their consent choices later? =

Yes. Visitors can reopen the preferences modal through the settings button, a shortcode, or a configured menu item.

= What shortcode opens Cookie Preferences? =

You can use this shortcode:

`[surecookie_reconsent_button]`

It renders a Cookie Preferences button that opens the preferences modal.

= Can I re-request consent from all visitors? =

Yes. SureCookie includes a Re-request Consent option. When used, existing consent is treated as stale and visitors are asked to make a new choice.

= Are consent logs stored locally? =

Yes. Consent logs are stored in your WordPress database. Logs can include the action, preferences, timestamp, masked IP address, country, and session ID.

= Can I export consent logs? =

Yes. SureCookie supports consent log PDF export for individual records.

= Does SureCookie generate a cookie policy page? =

Yes. SureCookie can generate a WordPress page with editable policy content and a dynamic cookie table shortcode.

= Does SureCookie work with WooCommerce? =

Yes. SureCookie is designed for WordPress sites, including E-commerce stores. It can recognize common WooCommerce session cookies as essential during classification.

= Does SureCookie work with multilingual websites? =

Yes. SureCookie includes WPML and Polylang compatibility for banner text, preference modal text, category labels, and other frontend strings.

= Does SureCookie support RTL languages? =

Yes. SureCookie includes RTL styling support, including for the cookie policy page.

= Does SureCookie include AI assistant support? =

SureCookie includes MCP and WordPress Abilities integration for supported setups. When enabled, compatible AI assistants can interact with structured SureCookie management actions.

= Will SureCookie slow down my website? =

SureCookie is designed to stay lightweight on the frontend. Script blocking runs only where needed and skips admin, AJAX, REST, feeds, JSON, and XML responses.

= Are there visitor limits? =

No. SureCookie does not charge by visitors, traffic, or pageviews.

= Does SureCookie guarantee GDPR or CCPA compliance? =

No. SureCookie provides tools for cookie consent workflows, but no plugin can guarantee legal compliance by itself. Your compliance depends on your site, region, policies, and data practices. Please consult a legal professional for legal advice.

= What data is sent to external services? =

For cookie scanning, selected page URLs and site verification details are sent to `library.surecookie.com`. For country detection in consent logs, visitor IP addresses may be processed through the SureCookie service using MaxMind-backed data.

== Screenshots ==

1. SureCookie dashboard overview.
2. Cookie scan and detected cookies.
3. Cookie banner customization.
4. Preference modal customization.
5. Resource blocking settings.
6. Consent logs.
7. Cookie policy page.

== Upgrade Notice ==
= 1.4.0 =
Adds Data Requests, Import / Export and a wider AI assistant surface. Fixes several cases where blocking silently did nothing: very large pages, post types templated by another plugin, and CDN-served sites. Recommended for every site.

= 1.3.1 =
Cookies with the same name are no longer duplicated when scanned again. Scanned cookies now update existing entries instead of being added again.

= 1.3.0 =
Adds the Known Services library, browser-based scanning for sites where the scanner is blocked, the new Scripts and Embeds page, bulk cookie category changes, remembered manual categories, and duplicate cookie fixes.

= 1.2.0 =
Adds Re-request Consent, monthly automatic scanning foundation, scan history change detection, background overlay controls, consent log improvements, and better Google script handling.

= 1.1.0 =
Adds AI Assistants integration, HTML support in banner content fields, improved settings organization, multilingual improvements, and cookie policy timestamp support.

= 1.0.0 =
Initial public release of SureCookie.

== Changelog ==
= 1.9.0 - 19-November-2026 =
* New: Added a Logo Height setting under Banner Layout, with adjustable heights from 16 to 120 pixels. Existing sites keep the 24-pixel default. Blocked embed fallback images are also no longer cropped.
* New: Added a Use Site Fonts option to use your theme's fonts across the banner, preferences window and embed placeholders, without downloading SureCookie's bundled fonts. Disabled by default.
* Improvement: Custom CSS saves now explain permission restrictions upfront. Failed saves preserve your entered CSS instead of silently losing it.
* Compatibility: Added FlyingPress 5 support. SureCookie files are automatically excluded from delay and unused-CSS optimizations, fixing delayed banners and language issues. You can remove any manual exclusions previously added.
* Compatibility: Fixed banner styling issues with Perfmatters' Remove Unused CSS option. SureCookie's stylesheet is now excluded automatically. Clear the Perfmatters cache after updating.
* Fix: Multisite sites using folder-based URLs, such as example.com/shop, could share consent records. Each site now keeps its own consent. Visitors on folder-based networks will be asked again; single-site and subdomain network consent remains unchanged. SureCookie Pro users should update to 1.8.0 to preserve consent history in data request exports.
* Fix: WPConsent import undo could reset banner text, categories and custom cookies to defaults. Imports now preserve previous settings for restoration. Older imports cannot be automatically undone. The undo REST route is available to developers; a Migration screen control is planned for a later release.
* Fix: Embeds added after page load, such as videos in comments or Load More content, could bypass consent. They now use the usual Accept & Load placeholder.
* Fix: Banner logos on HTTPS sites could load over HTTP when the saved site address used HTTP. Same-site and uploads-folder logos now load over HTTPS, including previously saved logos.
* Fix: Scripts and Embeds could show outdated Google Consent Mode statuses after a service's loading behavior changed. Rows now follow the current services list and update on the next page view.
* Fix: Resources using uppercase or mixed-case attributes, such as SRC instead of src, could load before consent. Scripts, iframes and stylesheets now follow the correct consent rules.
* Fix: Corrected two generated Privacy Policy sentences: the country reference now reads "the United Kingdom", and the rights section no longer promises free data requests when the form is disabled.
* Fix: Screen readers could be told the page was hidden when Background Overlay was disabled. The page is now marked hidden only when the overlay is enabled.
* Fix: Withdrawing consent now immediately returns previously accepted embeds to their placeholders. Accepting again loads them without a page reload. Elementor Video and Presto Player embeds still require a reload after withdrawal because those plugins manage their own rendering.
* Fix: Classic Google Analytics display-feature scripts could contact Google before consent when Google Consent Mode was enabled. Unrecognized DoubleClick resources now wait for Marketing consent. Google Ads, Ad Manager, AdSense and Floodlight are unaffected.
* Fix: Scanned addresses differing only by a dot or hyphen, such as a-b.com and a.b.com, could leave one resource unblocked. Both are now blocked, regardless of scan order.
* Fix: Changing an embed's purpose could prevent it from loading due to inconsistent purpose handling. Both parts of SureCookie now follow your selected purpose.
* Fix: Custom Scripts and Embeds rules could be overridden by scanned rows. Rules containing the full file address now take priority. Rules using only the Path field are not covered yet; use the full address in the Domain field as a workaround.
* Fix: The Data Recipients line could show a service based on its built-in purpose instead of your custom cookie entry. It now follows your entry, and editing a cookie description no longer removes its service. For third-party cookies, ensure the Domain matches the cookie.
* Fix: The admin banner preview could overlap WordPress or SureCookie menus. It now stays within the content area across screen sizes, positions and RTL layouts.
* Fix: Image resources could incorrectly appear as blocked in Scripts and Embeds. Rows ending in an image extension now show a "May load as an image" note. URLs without extensions may still need checking. Blocking behavior is unchanged.
* Fix: Failed settings requests could make the Dashboard appear empty and risk overwriting Geographic Rules. The Dashboard now shows an error with a Retry button, and Automatic Scanning waits for its data to load.

= 1.8.1 - 09-November-2026 =
* New: Re-Consent has a Custom Class or ID tab. Enter classes or IDs, such as .cookie-settings or #privacy-link, and clicking any element that carries one opens the preferences window, including a menu item given that class in Appearance > Menus.
* Fix: A category added after visitors had already chosen was treated as refused, so its scripts never ran for anyone who had consented earlier. The banner now returns to ask about any category with no answer yet. On subdirectory multisites, each subsite asks about its own categories without discarding a choice made on another.
* Fix: The cookie policy could name an unrelated website in the Provider column. A provider is now only taken from a setter that can be tied to the cookie itself, a cookie your own site sets is credited to your site, and existing entries are corrected automatically.
* Fix: On Avada sites with Video Facade on, a Vimeo or YouTube video kept its full size after the visitor accepted, cutting off the right of the player on phones and in narrow columns. The video now fits the space it sits in and keeps its proportions.
* Fix: Cookies from a refused category could come back and stay. Clean-up only ran at the moment of the click, so a tag writing one last time as the visitor left, such as Google Analytics, reappeared on the next page. Clean-up now also runs on every page load.
* Fix: On cached pages using the WP Consent API, other plugins read the consent decision baked into the cache instead of the visitor's own, so WooCommerce order attribution could start tracking someone who had not answered the banner. The visitor's real decision is now reported as the page loads.
* Fix: With Google Consent Mode on, a legacy Universal Analytics snippet (analytics.js or ga.js) still tracked before consent, because Universal Analytics predates Consent Mode and ignores it. Both files now wait for Analytics to be accepted, and are listed in Known Services as "Google Universal Analytics (Legacy)". GA4 is unaffected.
* Compatibility: Elementor Header & Footer Builder or Ultimate Addons for Elementor - The Re-Consent "Menu Level" link did nothing in menus built with the addon's navigation widget, leaving visitors no way to reopen their preferences. Those menus now open the preferences window like any other.
* Compatibility: FlyingPress - Saving SureCookie settings left the cache untouched, so visitors kept being served the previous banner. It is now cleared on save. FlyingPress 5 still needs its exclusions by hand, or cached pages show the preferences window in English: keep "surecookie" and "/wp-includes/js/dist/" in Delay All JavaScript and "surecookie" in Remove Unused CSS.

= 1.8.0 - 02-November-2026 =
* New: You can now import your configuration from WPConsent under Settings > Tools > Migration, covering banner content, buttons, consent behavior, categories and cookies. SureCookie shows what will be replaced before anything changes, never deletes your WPConsent data. ( https://surecookie.com/docs/migrating-from-wpconsent-to-surecookie/ )
* New: A "Take a Tour" button on every admin page opens a guided walkthrough of that page's features and settings.
* New: Meta's tracking is now held until the visitor accepts Marketing, for both Meta Pixel for WordPress and Meta for WooCommerce. Those plugins previously set the _fbp cookie and sent Conversions API events while the page was built, which page caching then repeated to every later visitor. One gap remains: on a visitor's first uncached page, Meta Pixel for WordPress sets _fbp (and _fbc after a Facebook link) before SureCookie loads, so that first write is not held yet.
* Improvement: The setup wizard has been rebuilt. It opens by showing what setup covers, walks you through connecting and scanning, and ends on a screen listing what protects your site and what is still outstanding, with most of it fixable in one click.
* Improvement: Setup now offers to keep your cookie list up to date automatically. Scheduled re-scanning was off on about three quarters of sites, which leaves the published policy describing cookies the site no longer sets.
* Improvement: On local sites, and sites with WP-Cron switched off, setup now offers the browser-based scanner instead of a scan button that cannot work.
* Improvement: Known Services has an "Analyzed on Your Site" section listing services detected but not yet added, and the "Services We Recognised" notice now links straight to it.
* Improvement: Turning off "Enable Cookie Banner" no longer hides the banner and preference modal content fields, so you can write your copy before it goes live. A notice explains that blocking is paused while the banner is off.
* Improvement: When a visitor's browser sends a "do not sell or share" privacy signal, the preference window now names the categories that signal keeps off, instead of offering switches it silently overrides.
* Improvement: A scan now records which host set each cookie when that host is within the cookie's own domain. SureCookie Pro's Compliance Guard uses it to hold only that host instead of the whole domain.
* Improvement: An embed held for review by SureCookie Pro's Compliance Guard now tells visitors the site owner is reviewing it, rather than only that it is blocked. Administrators also see where to approve or release it.
* Improvement: The banner now downloads one font file instead of three, about 29 KB less per page view, and no longer replaces the site's own Figtree when a theme uses that font.
* Improvement: While migrating from WPConsent, the pages using WPConsent's shortcodes keep working after you deactivate it.
* Improvement: With a browser privacy signal switched on, such as Firefox's "Tell websites not to sell or share my data", accepting cookies released nothing at all. It now holds back only the categories that signal covers, and anything still held explains why. The developer consent summary matches what is actually allowed.
* Improvement: The cookie policy now shows one table per category with a Provider column, instead of a table per provider. Cells no longer break words apart under themes that set word-break, and Duration reads "30 days" rather than a bare "30".
* Improvement: Consent records now match what the visitor chose. Saving preferences with every category on was recorded as "Partially Accepted" rather than "Accepted", and "Only Essential" as "Partially Accepted" rather than "Declined". Existing records are unchanged.
* Improvement: WooCommerce order attribution cookies were credited to an unrelated website on the cookie policy, and cookies our classifier could not identify published lines such as "The purpose of this cookie is unclear". Both are corrected on existing policies too.
* Fix: The setting that disables browser-based scanning had no effect. Turning it off now hides the option on both the setup wizard and the Scanning screen.
* Fix: If verifying your domain failed twice, the second message never appeared. It is now shown.
* Fix: On local sites and sites with WP-Cron off, the browser-scan notice claimed your server had blocked our scanner. Nothing had been blocked, and the explanation is now accurate.
* Fix: Changing a scanned cookie's category no longer fails when the cookie moved after the page loaded. In Automatic Scanning this left Pending Review entries that Approve All could never clear.
* Fix: On Scripts and Embeds, setting one service's hosts to different categories could leave its embed loading forever with no placeholder, and every row read "Unknown". Rows now name their service, with a notice when categories disagree.
* Fix: A scan could count the same cookie more than once, or report a known cookie as new. Scan totals, the change summary and the Automatic Scanning queue now count each cookie once.
* Fix: Avada's Live editor now opens normally. The editing canvas no longer shows blocked-content placeholders, and blocking still applies everywhere else.
* Fix: Avada videos loaded Vimeo and YouTube before consent when the Video Facade option or Avada's iframe lazy loading was on. They are now held behind the usual placeholder.
* Fix: A third-party script, video or font link loaded before consent when its tag was written in an unusual but valid way, such as a ">" inside an attribute value or a space before the ">" of a closing tag. It is now held like any other.
* Fix: On LearnDash lessons using Vimeo Video Progression, Mark Complete unlocked but only reloaded the lesson, so students could not progress. Finishing the video now records it as watched.
* Fix: With Google Consent Mode on, Google tags added by another script could stay blocked in the browser after a visitor accepted, while the server had already allowed them. The two now agree.
* Fix: On hosts whose page cache keeps the cookies a page sends, such as WP Engine, the consent shared through the WP Consent API came from whoever loaded the page first. The banner now sets it in the visitor's own browser.
* Fix: In the preferences window, a cookie's duration showed as a bare number, and session cookies added through Known Services showed "0", also in the Cookies list. They now read "30 days" or "Session".
* Compatibility: A Presto Player video inside a Spectra container never appeared after accepting cookies and collapsed to a thin line. It now restores correctly, and keeps the placeholder up if the stored copy cannot be read.
* Compatibility: Presto Player videos that contact no third party, whether hosted on your own site or streamed from Bunny, are no longer held behind consent. A self-hosted video pointing at another site is still blocked until the visitor accepts.

= 1.7.0 - 20-October-2026 =
* New: The preferences window now includes links to your Cookie Policy, Privacy Policy, and Legal Notice. You can reorder or hide them under Banner > Content > Preference Modal.
* New: Added a Legal Notice (Imprint) page setting for countries that require one. Select the page alongside your other legal links in the preference modal settings.
* New: The preferences window now shows which services receive data and when it is transferred outside the EU/EEA, based on your scan results and services catalog.
* New: Added a support shortcut to the admin top bar, labels for its icons on hover, and an Enable Automatic Scanning button on the dashboard when scheduled scans are disabled.
* Improvement: The setup wizard now stays on the scan step to show results as they arrive. You can continue at any time while the scan runs in the background.
* Improvement: Scan results now refresh automatically when a scan finishes, even when the scanning log is closed.
* Improvement: The setup wizard now explains when a scan is blocked by your host's firewall or finds nothing, and offers a browser-based scan instead.
* Improvement: The setup wizard now provides a Cookie Preferences link for all themes, including block themes, which receive a shortcode to add it.
* Improvement: The setup wizard now selects your homepage by default when scanning, since it often contains the most tracking.
* Improvement: Licence activation errors now include clearer guidance instead of raw error messages.
* Improvement: Added Ukrainian translations for the banner, preferences window, and admin screens.
* Improvement: Business Details can now be saved without selecting a privacy law. Leave Applicable Privacy Regimes empty if none applies to your site.
* Improvement: Updated the Analytics category description to better explain what its cookies do.
* Improvement: Hardened the security of the plugin.
* Fix: The setup wizard now lets you connect your account when SureCookie Pro is active but has no licence key.
* Fix: If your browser blocks the account connection pop-up, you are now returned to your previous setup wizard step.
* Fix: The dashboard tour button now correctly describes its action instead of suggesting it opens the banner designer.
* Fix: The setup wizard now explains when scanning is paused because WP-Cron is disabled and what to ask your hosting provider.
* Fix: Consent records are now saved on servers that block URLs ending in `-log`. Site Health also warns when the original address is blocked.
* Fix: Deleting consent logs now works on servers that block URLs ending in `-log`.
* Fix: Shortcode and block features that depend on WordPress React, such as Powerful Docs search, now load correctly on affected sites.
* Fix: First-party session cookies, such as `PHPSESSID`, are now attributed to your own site in the cookie policy. Existing entries are corrected automatically.
* Fix: Geographic Rules now work correctly with page caching. Visitors receive the rules for their own region instead of another region's cached settings. Clear your cache once after updating.
* Fix: Consent Log selections now stay in sync with the displayed rows when changing pages or filters, preventing accidental deletion of hidden records.
* Fix: Changes made while settings are saving are no longer lost. The Save button remains available until all changes are stored.
* Fix: The Country list in Compliance > Business Details now includes all countries and territories, including the Cayman Islands, Bermuda, and Puerto Rico.
* Fix: Consent sharing on multisite networks now tracks sites by their identity rather than their address, so shared records remain removable after a subsite's address changes. Existing records are repaired automatically where possible.
* Fix: LearnDash lessons using Vimeo Video Progression now unlock the Mark Complete button after visitors accept cookies and finish watching. Added the `surecookie_scripts_restored` browser event for plugins that need to initialise scripts after they are restored.
* Fix: Accept All and Reject All buttons in the preferences window now retain their appearance on hover, even with themes and builders that apply their own button styles.
* Fix: Removed an extra scrollbar and unexpected page scrolling caused by a hidden screen-reader element.
* Fix: SureCookie and LiteSpeed Cache cookies are now correctly attributed to your own domain in the cookie policy. Existing entries are corrected automatically without rescanning.
* Fix: Consent records are now saved on sites where the WordPress Address and Site Address use different hosts, such as versions with and without `www`. Requests from other sites remain blocked.
* Fix: The Cookie Preferences menu item no longer triggers PHP deprecation notices on sites where themes or menu plugins inspect menu item details.
* Fix: The banner preview in the dashboard now uses the same button text color as the live banner, such as dark text on light brand colors like Astra's orange.
* Fix: The Cookie Preferences menu item and shortcode no longer show a link with no text when the saved button label is empty. They now use the default label.
* Fix: Blocked content placeholders now name the website they would connect to when a scan could not identify the provider, instead of reading "would connect to ." with the name missing.

= 1.6.1 - 7-October-2026 =
* Improvement: SureCart affiliates are now credited even if visitors browse a few pages before accepting cookies. The affiliate code is preserved on internal links until the tracker runs, without storing anything on the visitor’s device. Visitors who decline are still not credited.
* Fix: Some scanned cookies showed "null" as the provider. This is now either left blank or filled correctly from the services list, and existing entries are fixed automatically after update.
* Fix: On sites using optimization plugins like WP Rocket or Autoptimize, trackers served from your own site could run before consent. SureCookie now ensures these stay blocked until consent, while other optimizations continue as normal.
* Fix: When using delayed JavaScript execution, blocking one tracker could stop other scripts from running. Scripts now continue to load as expected, while blocked trackers still wait for consent.
* Fix: With W3 Total Cache Minify enabled, blocked scripts could be combined and run before consent. These are now excluded from combining so they load only after consent. If you use page caching, clear caches once after updating.
* Fix: SureCart affiliate tracking could run before consent and set cookies even after visitors declined. It now waits for Marketing consent and is correctly reflected in the cookie policy.
* Fix: Global Privacy Control is now fully respected by script blocking. Visitors sending this signal receive only essential cookies and scripts, regardless of previous choices.
* Fix: Declining or withdrawing consent now removes both scanned and manually added cookies for that category. Essential and allowed cookies are preserved.
* Fix: Pages visited during cookie scans could be cached with trackers unblocked. These pages are no longer cached, ensuring visitors always see the correct consent-controlled version. Clear your cache after updating.
* Fix: Duplicate cookies could appear in the cookie policy when added manually and detected by scan. Cookies are now merged into a single entry using your custom wording.
* Fix: Some scripts from known service domains could load before consent if not explicitly listed. Blocking now applies consistently across the entire domain, while still allowing exceptions where needed.
* Fix: With certain optimization settings, the cookie banner could lose styling or appear behind content. Styling is now preserved and displayed correctly.
* Fix: Translation issues in Dutch and other languages have been corrected, including table labels and scan timers.
* Fix: On sites using WP Rocket with Minify JavaScript on, trackers such as Plausible, Fathom, Simple Analytics and Cloudflare Web Analytics were copied to your own site by WP Rocket and ran when a visitor first interacted, before they had chosen. They now stay at their original address and wait for consent.

= 1.6.0 - 30-September-2026 =
* New: Banner > Content now lets you manage all four buttons in one place. You can reorder them, show or hide each one, and set custom labels. Empty labels fall back to translated defaults, so most sites do not need to change anything. Preferences and refusal options always remain visible.
* New: PixelYourSite now respects visitor consent. Its pixels, cookies, and tracking events are held until the visitor accepts the relevant category, then start on the same page. Google Consent Mode and Global Privacy Control are also respected.
* New: The dashboard now shows when a new version of SureCookie or SureCookie Pro is available, with a quick link to the updates screen. Visible only to users who can update plugins.
* New: Added a `surecookie_capability` filter to control who can manage SureCookie settings. Useful for agencies that want to restrict access. Default behavior remains unchanged.
* Improvement: The default banner message is now shorter and fits better on mobile screens, helping PageSpeed measure your site content instead of the banner. Custom messages are not affected.
* Improvement: Reduced unused configuration data loaded on each page, lowering page size while keeping cookie policy and preferences unchanged.
* Fix: Improved compatibility with W3 Total Cache so the banner and its scripts are not broken by file combining.
* Fix: Screen readers now announce banner buttons using their visible labels, improving accessibility across all languages.
* Fix: The preferences window now only shows Accept All where it is enabled in the banner, ensuring consent logs remain accurate.
* Fix: Button order and labels are now validated to prevent missing or duplicate buttons, and labels are limited to a safe length.
* Fix: Visitors sending Global Privacy Control could be treated as consenting on the server, allowing some plugins to run when they should not. The server now matches the browser and Google Consent Mode, so everything except essential cookies is denied regardless of consent model or any earlier choice.
* Fix: Re-requesting consent now correctly resets previous choices on both browser and server, preventing trackers from running before a new choice is made.
* Fix: Google reCAPTCHA and Google Fonts are now blocked until consent when using Google Consent Mode. You can still allow them manually if needed.
* Fix: HubSpot tracking is now correctly blocked for EU-hosted portals.
* Fix: Cookie policy now lists only services your site actually loads, avoiding incorrect entries.
* Fix: Google Consent Mode defaults are now consistent for all visitors, preventing cached pages from applying incorrect consent states.
* Fix: Placeholder content styling is now consistent across themes, while still allowing basic formatting.
* Fix: Microsoft Clarity now receives consent updates correctly, so analytics tracking and session recordings work as expected.
* Fix: EU and EEA geographic rules now apply correctly across all supported regions.
* Fix: Scripts that depend on each other now load in the correct order after consent, preventing broken functionality.

For older releases, see the full SureCookie changelog [here](https://surecookie.com/changelog/).
