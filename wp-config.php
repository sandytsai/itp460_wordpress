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
define('DB_NAME', 'mywp');

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
define('AUTH_KEY',         ';r?c1FLnm|;@3r>rUs%{xH([O+dBk0oGKOxOLCaidcYMN!a#TF5$r1_Vs4sp_g,D');
define('SECURE_AUTH_KEY',  'nay/E1oW:-EVI]5^37Y$*hR@nQy,gH38fWqip4A+`zh.x~p7;nD&g05L@{TC=H8q');
define('LOGGED_IN_KEY',    'j5y9?+@PHGt-Wr8s;;+~+cxEBRQGZ&SB:tM^:{qO+(u+B,w9g+v:--gwN+il4@hr');
define('NONCE_KEY',        '8SiO>g/.AuZ:@:zFNJ0}/U}~B!Is$s|^dwq~<9~;$xh,e$&N|OLCvH7M&v2$L^xb');
define('AUTH_SALT',        'V~l@-,<_?tV.(g3e4x#pF(+8g2@{$+hhUM*-|/+V@IYK5D^*C:Y-KZ4T->-lTd35');
define('SECURE_AUTH_SALT', 'gOB~oNR:wR/)88z=@k(0W^i3ZBPouC_dsDz@BDN-51l-Z-+{v:@>h{1v+,f}k]DY');
define('LOGGED_IN_SALT',   'Yh:/m=I}_7o{Jn[yot4 }RTEvpH0Y|k=#I.?]-9C>8@HY<DmMweSdDZg.iwl9_VA');
define('NONCE_SALT',       'M^|C<QK>O|p9aPM&,_}ZyX@;3PI}b]].GrKa=c33`2F56hU)Fg+5Il[iV|QqRgka');

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
