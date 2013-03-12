<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '`t6TJDevW~*U>w{2qf+u?]iY*[ki?_k#r98.0/U]yHZ 1646kATcmlc|Z*u/5pb`');
define('SECURE_AUTH_KEY',  'wZ65]~l5SHWn#|-$<-|>p!)qa,-/D=YgtiAZG-`O=ufE-G(U!e0Ed;_d|E /Em`T');
define('LOGGED_IN_KEY',    '+Y_-!xsH|U`GYCb_{5%<5yg^C+^O?EUbo &@>J8Q2z+kGHqjOg/8A(D`+l8uo(-7');
define('NONCE_KEY',        'c/rDNh?h0FCG+lzCvR)bzFbhgGmw^5NWo>#l-_ ({a3HZNBiXBn3@6cHH9cPt<U}');
define('AUTH_SALT',        'U8B+}G]VuT#yGFqxEI6QB~#].oTNE f;q:4)XtxG_&]N+d:p*G4!/Q<Cw?u/I7x0');
define('SECURE_AUTH_SALT', 'x3itS[,*ivN~6?iGpz+P4cu5$VxK,YXt>X~6jo|3UH%>K4yT!f|hzz_cDw4)MYA0');
define('LOGGED_IN_SALT',   'ujI/+UQW6k9v*Mi|wRUw.+q?[U`VZt|d9|}j?(M+-:*B$-X,feFcn JadCIzf]|p');
define('NONCE_SALT',       'J?AVz0~NWE11-q~OR; ATX+^)E[:+]d{^F[1,}F@RNTmhrqz( /I1te-=RM[TUwn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
