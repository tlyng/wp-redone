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
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

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
define('AUTH_KEY',         'ua+jbVK|`_~gi@Ceu*jl(z7ioPsZ8_*rwYTDc+iFC-K5-H+(c0AIg2o+XU^|M-?n');
define('SECURE_AUTH_KEY',  'L/bi#8T-fYKj|DJf$[x|}@YCVv?|J^DNUW@P^>g<~L4+gBq_7zzHnUxbo*Iu>@|-');
define('LOGGED_IN_KEY',    '#rx&B7en)|/3|.YZeiO!O<uLt~[gN+Br$$r#lb?(ON~rh[+-`iZBgYYZ|q x-Hv+');
define('NONCE_KEY',        'VX:|+(ax=d-)f1kSuS_o%lWy&Zd7#nqw8&Nqf()sCc-u.P0/|9Yt5i,^4<$m8m{u');
define('AUTH_SALT',        'x/9/|c}eowdLfx.TFdF?A|_J+KT)/j>F2E$D+G*3+6mjz%T1 QTF[<sleKDzA5]@');
define('SECURE_AUTH_SALT', 'iPpREKo!C31 oN-jcZ#K-nc0QJ7[D>5#-g5HSE6w.MnBhS|w#urd+.R*&O/6%s+0');
define('LOGGED_IN_SALT',   'p+^rU+rRg@W+izO#6$R9PUwv.tesv+%tRpXwaAVJ_q&7Xth!xvgERVQoaUd|=/%%');
define('NONCE_SALT',       ')@FW305ws87- >%e-J1GxR7LuwtTORE?9Y2yFJ#r]9Jqh.g>[+CnCg6n/9]>m(%|');
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
