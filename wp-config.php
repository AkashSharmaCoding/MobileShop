<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'testwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'j$Fa9&BBVg7GDMHu9D,7Oeg9fx#gLLL5q?_(QeZ~cc]]xS4_m++K:E8JK;{B(jNO');
define('SECURE_AUTH_KEY',  'qQ%C$RL,x/>K E3{1y1S]TywQ~xsYh(1V2,(`u.f5XKlA3atj]:J l`bZ6XYWE6o');
define('LOGGED_IN_KEY',    '()M5$:3+c+kurSK}MV3z*(FG0siJs1rwlvE9/mr~733lm?e~|:KFZ4[ik{{}Ba4.');
define('NONCE_KEY',        '7<Zi;h<?/S?n]b)@I_~yIOo+w{[b@D#?3wP&^K$F_*0B0+Kfp*PQ(1cLyPc1h(:|');
define('AUTH_SALT',        'rJA*-ZSD ^fB[!]|nfzPn}`3lgCDG+svhbM(gXP12A3XB^+=Mqw_%4s^~X6OLytw');
define('SECURE_AUTH_SALT', 'W.zb`p]i.<RhCRUf#%jnPui@A.()m_(8)L]uCchkQ^c2^2F5[gpkOJwepmFWj+$6');
define('LOGGED_IN_SALT',   ',Mh|8s$ZYB@m&t*2x3{;l:}w@1Mk.C=%@C*YtSzjMnW/m?B17)M;XL,2%i~@Xann');
define('NONCE_SALT',       'Z(F({1pIh/}m#{g#x?Db71|qg6!ppk%=ga`bZ1:-~Urp6T2,d=/)g1ldLU4iSD/9');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
