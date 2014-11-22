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
define('DB_NAME', 'homework_db');

/** MySQL database username */
define('DB_USER', 'homeworkdbuser');

/** MySQL database password */
define('DB_PASSWORD', 'baswupaSwaVa5ahu');

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
define('AUTH_KEY',         'j|_}+E@n+|O2B28dtY5vN/;xH{+8>R#LXtmmAmvud6G&vy@ZN=]=>v^78(w1%=y9');
define('SECURE_AUTH_KEY',  'J}@=AJW#9-S+fg([YDp lN}^<(kuZ1a9 .R$J^6! r/mXJssg!7J/Yo63Q`SxR*U');
define('LOGGED_IN_KEY',    'hGG0L-%m/WJn59^65|sr6u[?4->^y,<FgEQ<5}D:{+U?yQaqXX,@K$0w71m?Lo`;');
define('NONCE_KEY',        'P0-[ZpefLp+)|.FW<0nm_{tzQ8=^aK-$w3K_G$skhx]oP.8NyDhfI6l%SR*?Fk_M');
define('AUTH_SALT',        '$vGh?Ko7C9pH%~l|k,o;X+H-Ym+9oYw#EA5~ X2bRZA|4P#wA18_R`O+>A9d|>:*');
define('SECURE_AUTH_SALT', 'M-os`hgjQb}LQpT`5%xipK2LH0ley&%jjVK>-^q9A{S--{rk*QS/*h3Vq-Q+e5= ');
define('LOGGED_IN_SALT',   'pH!hZ#zA|~DmhhDV*egL|Xp,FI]g6Ci**Vd3A,G!PnZV#|S-t;>-*X!x0da*_d9]');
define('NONCE_SALT',       '_Ly?J`%t]NK4^|f isYuFJcxX% J]=ZkDuSg-Hhx{Qde-(BH#JQuwuK-UVNB=FaZ');

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

