<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cc_portfolio_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '=Yc?Yy%D}$Ddt(8!%+*r6,~cpg{4P*yX|xyUtX++6k#uPFr QdjLNdvN7!P!wL#D' );
define( 'SECURE_AUTH_KEY',  'PEq_{JHDBt`y@ 030t/-b%C/8H~mhA(_%B]rMvJ94JL7oRJHC&Ba6SfCSN5|.Ece' );
define( 'LOGGED_IN_KEY',    'r4pvQI#B[W,-mwPTP 8U?>&O13],bBI0k1s jH^3S1(c$u{qdW9uF zL{J1XK0[_' );
define( 'NONCE_KEY',        '[qg;:.=CoyiAMm5^,EJF$Ta93J`u/:~QKY@mk{F)PFjtTi:]pnP|!Y|6S!NATKm!' );
define( 'AUTH_SALT',        'HxV@CZ^_*@^+u_x~&`a%/1?uxra1W]Sz[!O%$Kog3tpx_1ylT]X&c0<~=[6]kq)7' );
define( 'SECURE_AUTH_SALT', 'Q=2eP_D.Wy%Xn#{WhpHo27{^m=:4j8XuF$9]HA2Qu,91[`|WKtMagC*CSb?xvX.4' );
define( 'LOGGED_IN_SALT',   '|@ipdNSF^[Es[s ;`@vUw3k=hKsZZ$YL-0m+a?L?]|,`,!bz?r_ZoG85ij76<:g5' );
define( 'NONCE_SALT',       'fr:?=)]Im+xH^zFk0Z,ll+^ZRo:/(c/T>PnP^pdSjfXxPBz0*+GfWr#CB0bTV[UL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
