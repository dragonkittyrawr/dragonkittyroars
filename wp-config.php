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
define('DB_NAME', 'es_dragonkittyroars');

/** MySQL database username */
define('DB_USER', 'erin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         '/0!oANT Bjg%}jf7d{iPY=?tY+v1s?8rA5jk%{$%ZsYZ8{_zX8wJ$PPLxZSI;n4f');
define('SECURE_AUTH_KEY',  'F5%smc{F-E{9`dHA_)C;!]IDS|eknj/ L(o`-f|GE5l98YUI/b<k]=IYb>)-6Q8S');
define('LOGGED_IN_KEY',    'HGv,mGJ(m|e3@yQ#! 3X%T}RIo[@ysn]pd:RG*9*80/(wifES.N-J@-Mv5o?E?78');
define('NONCE_KEY',        'YZ^)G9[1@?oWsqBP{,(]]-H2XO!~Vp(3&riGJ|W3{fAykX<okufX.#{nOp_6o9o#');
define('AUTH_SALT',        'Dm rst`ESgw_]I~bLV3q^!_N`.W+d?*7E-l4_YOt$E)sv/wE%>(`_BJf!:#CT&Y.');
define('SECURE_AUTH_SALT', 'jT;.u !+|_=e{-Pf n1u$WzpD}W2|Tk:uLMW_&wPcY}pA(X+t-5)Trd$Ne[4W;DF');
define('LOGGED_IN_SALT',   '@1G//W])lOK],JOut`uu!bg=--6Z?hZA>le];D2cV#JkR9)K}dP3gs^G#NGx_l`$');
define('NONCE_SALT',       'WP4BIl)G(hD10+))48U`Bb^WnxYjS0,c`X=)d|to3/|hRKkC;AYM$E+2LU3pF8O3');

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
