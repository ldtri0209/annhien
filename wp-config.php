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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/khoafd5b/public_html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('WP_HOME','http://khosimsodepgiare.com');
define('WP_SITEURL','http://khosimsodepgiare.com');

define('DB_NAME', 'khoafd5b_db');
/** MySQL database username */
define('DB_USER', 'khoafd5b_admin');

/** MySQL database password */
define('DB_PASSWORD', 'P@ss2016');

/** MySQL hostname */
define('DB_HOST', 'db05.serverhosting.vn');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'I+N2EDQtD|6+Mi$,PgZb^y$QH&_N~B&Aa|3x7Sz++T3_EPUAN|*.YMdVrOAYv.eF');
define('SECURE_AUTH_KEY',  '*c-#?{7|ZD?zvsfUy;KIR!(oz~hG&HH.wpxOpjL(va,ed<!+nkqo#y[}wBK1Mi<8');
define('LOGGED_IN_KEY',    '@wmgSL>BpwZp7^1.-8%8}J8R.p$|cbm0nd4~M6Vkd:9UTb1~$J:*#XC~id!kmqIn');
define('NONCE_KEY',        'RUgRjzJ7mdO*5A7_Edq>3oxzXB;P-A+Iw+]0Z,I%30OkqG]]=+2ZW7D9U-`X6/.+');
define('AUTH_SALT',        '9iVj1DBa%#K,3ro]*u;O+hX#QM#_uUV=x.#73ewv-[Wmq8GBxmT{O?W9+SQqbHb0');
define('SECURE_AUTH_SALT', '@=10RO(X<x4Fs8{|HhzeI}7o@nkFd6=&byU{|06HgQkSq-N)=&= GQ3L#W]#6;AG');
define('LOGGED_IN_SALT',   '8B Ex4]63trxkG3`((}CJ-5n4V~!.I!f[zqv)GjOElRzzOH70U1I5A8V+h2|;VYV');
define('NONCE_SALT',       'VC)?|s#kL Ec7.|ppOfJ`M|kH`*[c82E*I*OSxH)+;Q*6,S=+[}`|7-*|Cwj)Vnk');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
