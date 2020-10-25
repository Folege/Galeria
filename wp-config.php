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
define('DB_NAME', 'dbgaleria');

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
define('AUTH_KEY',         '-`0^Y^2syu>ws`,rg[x?mQ}-=Nj-v&y6WS8/fC(~U##MY&(o ?ra7boJ0ky!X%Z:');
define('SECURE_AUTH_KEY',  '5-4.oLK#,k%IvYE>gm,#&2EFX$]8y{LMf/Pm+I&&TVKN %JSj7(e+yS1G#V9e3UU');
define('LOGGED_IN_KEY',    'y{D&~T`j_KgBH>+{{):k@<UDk,p-(2 >9puK[p<T{l#7Qua-0HW#ot{R>{*0F6n%');
define('NONCE_KEY',        '(6}GCs]7F{nr=LO9crD[Qfo)(ZmyhcX^^{90$euP.yYh#1KdfCc[G^(@uq0pPnjY');
define('AUTH_SALT',        '(cb6=2e]q}}in44[V01 s>!1mx5dLbLtK8*)bJm?%uB|lU/cK=EBx]R{n]|wMcMl');
define('SECURE_AUTH_SALT', 'z?b.~$[S=S+/RVi0TYrbn%tJ^]AZx)!a|_2xnm^zxZ~/8T@W8:>I$]D,,yTraD!-');
define('LOGGED_IN_SALT',   '$MX[%Qs)[fq!5=TR,R]go$MsusoeBwU`(pmgxyv 4$2K^N*L,I=9E [${j54Tbe^');
define('NONCE_SALT',       '!0L7!x/{R u*[?W@uc<TA23<eN?MCDCY2qlGcEMcH8Z i?/O|&Ew`kjVU~oqa|^>');

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
