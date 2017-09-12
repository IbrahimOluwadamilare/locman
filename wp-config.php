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
define('DB_NAME', 'lockmans');

/** MySQL database username */
define('DB_USER', 'lockmans');

/** MySQL database password */
define('DB_PASSWORD', 'hitmandon01!');

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
define('AUTH_KEY',         '%Mg[+_VmX%B^!0[)E:M]&X^eue7{N_v%=uY Dy#!+/xE9 uoelv6AGwqXtJ90UD.');
define('SECURE_AUTH_KEY',  'jjsMgp#Oc)}qU]g~iP,]V)BapL9884n,4C.|!*M;Ss2$^]0Kp9_}e%Z;0#g0N/By');
define('LOGGED_IN_KEY',    'w>{%,+:8`B)BJi:;]`66HVKA8}E(Qq%o0#N Jp JYOoqlDayu-/+DW./-zYByA)v');
define('NONCE_KEY',        '[]*DHD`3k.{PQ<eBh42%M)z>:k*zoXE~OWL})y ,sp+z^FB+1Qf ,~b7Y!{C|l`G');
define('AUTH_SALT',        'r9)kk~B+DCo6?p5NJV?|rN|wr-8ur]Q$Va7p]S0SY2EJ -j+mz~9TjBO+2{1p.}`');
define('SECURE_AUTH_SALT', 'p#X(|rR=J:pgViyB@^T~a_g@dgVN{k@P%jN_qcph=]anF?r1Oro%)pObGo!X:{F ');
define('LOGGED_IN_SALT',   '$[HA!?K,b6ZE s~j&GP,fn.$= kBN5w6~rQvsf9rRum;${5c`>uym4dmBC3d:YVN');
define('NONCE_SALT',       'u4e^8b*JR~y+qDASS#I{)g]e|iUKRWpXUv/m/>[&$7{neD`tg/L1VW/wFRCcs@F$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'loi_';

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
