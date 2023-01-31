<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tshirtprinting' );

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
define( 'AUTH_KEY',         'm067X/0(^bmEa6hc5tj[;[)ku|koo~~[<|Mkbp8y_^:Us{5t,E/RFKR%R)]CZJHa' );
define( 'SECURE_AUTH_KEY',  'dLH,b?-9Y@^6v@J.SFy~PD%?1EP{6|l*BQ,wk?2<As[2}p:+!~5U-MP NV7#b_2_' );
define( 'LOGGED_IN_KEY',    '%:ON:8(Yrr}KiWp]|$uwSYlKV;VKRh]CWE/@`;4;%d{V_qU<ql8`J55!:5%s]]KW' );
define( 'NONCE_KEY',        '4sexFN@DYuH*a%BBbGm`AlcL|wUXPt{oY9Ji}D&Wy/myo.b3zc9YlbKcPRDh#6mW' );
define( 'AUTH_SALT',        'k/p4pQ9b^sTgLq.$lFVkB9Y[LV+-kG FAr1rvr[=6nB7|/Y9XiCX>Ksh^RfqTCt=' );
define( 'SECURE_AUTH_SALT', 'P-j=0Yyj[)k%XpniUji4a|Bz~A/xri:YG]46_QJ% ZmY$o3.(A?mj/&?[E+?a8|U' );
define( 'LOGGED_IN_SALT',   'CY_v430D7NK71S2!s6[*.4+)Hst78MVmN>AZ0h&)SM;6j,*-rd.ia4FOqlx.oiu7' );
define( 'NONCE_SALT',       'o91>%#W$#_PPp4GX]1.|kJXx.CZny4SzverS?E[ Z_OT[_W^s7RnT%k^.+EIa2]A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
