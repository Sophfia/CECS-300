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
define('DB_NAME', 'whateverDBaudo');

/** MySQL database username */
define('DB_USER', 'whateverDBaudo');

/** MySQL database password */
define('DB_PASSWORD', 'qfwPmAXuB');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>3<bI$nB7<bM$nM7RN!sC:gR|!sC:sd1!kU,vJ40kU|vVCzk8[[-O5plW#_SKG9p');
define('SECURE_AUTH_KEY',  'J^QM3uqX7$bIB^yfF7,jbI40@dVC!-hG8|ldK[_oOG:slSF8|gcJ|!oJF}okR:[w');
define('LOGGED_IN_KEY',    'Bj30$cJB$yTA6yfb7.^bIE^nj3{<YQMogc}|!RJGwsk40[ZV|@-KC8@vrB40gYU,');
define('NONCE_KEY',        '@>cNsoZ:-O8~p9[|ZG-wK1zkg4!VR|sGC:dN:@R8.*pA]ea;+PL6mX6<XIE#tHDxe');
define('AUTH_SALT',        'N@R81woV1:|VOKCslhC5_PLDtqi2]<*PHE*meE6.ebT.+yqOH9~xe95;eWSL+tpLD');
define('SECURE_AUTH_SALT', 'h[SO~-cJFvsC8[ZV|!oN8okR1@D9#lS#_pP62iS2*+LHxieD9plS1~SO5-hd;~eKH');
define('LOGGED_IN_SALT',   '8cYR!@vFC4kcZJ>nfM>,$MFB3jcY4^zYQ7zvn[_~wG85wdV5:-WSK-tp91[#WOK4');
define('NONCE_SALT',       '_H5_~ZG8~wd95:dWSK-tpK1[pWO*xeA6;fXTL+uqM2{qiP{<*QIA6#tmL2]mia].*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
