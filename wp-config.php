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
define('DB_NAME', 'bride');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'b?@+O=,(}]o[t{9Y{E 0:-.AkU+;hx.J3V4nc-.A?kpXK{_*OQ@l&teBQ6D|_i9N');
define('SECURE_AUTH_KEY',  'c.?:X;R$qbsNTcP6fB[v]W={%:?g>%XR(| Y27!}|Q|_n{~-k~+SX]uq97BCZu`H');
define('LOGGED_IN_KEY',    ':)iqbAC,DC.5)~2#n_R+-ydqei#dgp?:w@]sGo#og(EZu<Y|yT+_/NNsj6bS; QD');
define('NONCE_KEY',        'Pl,vcYa|.wL_4OW%Jl7)dP/!6e%fe$U@q?V(6>+@.Jh%21,Nf``yuKrtwTA92x1:');
define('AUTH_SALT',        '.f<|=waO5+iA_jXsU{7{S^Nw%{V.YV]R6|X!Z2u/ RN+]a[9IVfrUdd33XlXVHbO');
define('SECURE_AUTH_SALT', 'wGzT4jY3?|=Ym2?(c@!%ns@m|l2LPC*](.R-E`fvvVE|p+T:sH._s_Wbr bhx7,|');
define('LOGGED_IN_SALT',   's6s:^>RKJU7Z>bRv+O]|s&Dkk_vKH  .E[|,`w`QnaH>v!W7T^eBZW[AVE/ V7Qx');
define('NONCE_SALT',       'mEI;r7+&9P{;Y.V&ISPK$Mq@,Jx^0i{j8n$yK2[T)E.u9BL~=T?{{E.+^N|jwNtY');

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
