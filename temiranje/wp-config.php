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
define('DB_NAME', 'vencanje');

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
define('AUTH_KEY',         ' 8[,S8G#`.*:{+|6fvAmv4R(S]z$RrYA)I&-v<iTww5`x+PEj`L>[=hn*t!G?@x.');
define('SECURE_AUTH_KEY',  'Qy|{4+<FfqfWBr/k5B@PTWv>+TsJoJZT/LWPE>YYNAp^Rf^X/7lQ-7_+Ii$)S,:j');
define('LOGGED_IN_KEY',    'K40(dc2H2{1l76*mVO@=}ys-r$N(WdMW$UT&v%i50e4}l]uc=7>o6h%-fx?t| jQ');
define('NONCE_KEY',        '[D3w&O#x3OsCI1{a^?CJ>#k|Q5.e,/A|fLEHW7:E+=lm#%vkZwQv4hXp,JNt|(D(');
define('AUTH_SALT',        'tr@YQqM-+-ay2*u:b~jaMJ6[B_[-KI?_Z6a3;<({ZFECKJ7[QXPx|GeQ*bL1tb*n');
define('SECURE_AUTH_SALT', 'c)wVcaj;1A?Q[$o!iR6hkE-_)90MIIwBzSs&0T97i7|:g(-Vi5>*)a3[31.yyHUs');
define('LOGGED_IN_SALT',   'iGx(mgWH<g<&2.RkN~H^#jEc/(/TWiV{hlNvEH9@c+c1Y(}({-o&dk&pNKHXv6U-');
define('NONCE_SALT',       'sBOHV#F+%%An-Ea/)+~FNF,wEga*|pe1vy4}ieAN5=WZPFr]|9Ql|EAsec.kbrUc');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
