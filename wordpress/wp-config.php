<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_laravel' );

/** MySQL database username */
define( 'DB_USER', 'laravel' );

/** MySQL database password */
define( 'DB_PASSWORD', 'secret' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         '&V]uY*{Q>e%^7bY*M+ej7N|KY1?: rFT=e_MR7Ep(Ccz3zEocp@B/|8:4<0Mfv![');
define('SECURE_AUTH_KEY',  'eLYR i`;>C$1haN?OJZyU4X5Rq1@*U}Ls:Yc6>Xak7 LR8Iru/{:!+Xb+,hgU8@K');
define('LOGGED_IN_KEY',    '>R]Y.<KbAuv4{>8|(q-alIkCYa Qsr(ni+`^J.q+~&jhJWPL-`4aXs:k</tm`T+T');
define('NONCE_KEY',        '#h<LiX?Y~z-!_D rkv72,k3h]Ye^bk.k4)o0~(x|,[?|$RCF}!P<tN~F]kZ:#H]l');
define('AUTH_SALT',        '|bhO*#3e)p@q?7~Qa5mef-sw81.8S1!60K8NczFYPt+ME-Z6|/)]e$,AHIHD0qg:');
define('SECURE_AUTH_SALT', '|c,FT.0kXP8C>cF@`ND`ei:Go?gM8-C/+r3IIENcRBbktm]Cu*+a`BezF)KUmb]&');
define('LOGGED_IN_SALT',   '1VmFCR6EYa(77XA)NPL%Y0VvJomq4%EzDhA +Y5wLW]^OnG;Twp%v2+|m~sqAmmi');
define('NONCE_SALT',       '[hBEplWH<eyNA&SyQy7-oh=`<sEz_DppSq2Q-)L0T!f3R#wf2]<]-pv7bN1|(7ef');

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
