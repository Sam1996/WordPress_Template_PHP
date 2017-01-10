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
define('DB_NAME', 'education');

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
define('AUTH_KEY',         'Wr0RFvPKg+&w5]yJX~D[5#veinPN0(j1Hz!={>Ps!8~]!7%:~x[H?X4OH`wY<J8Y');
define('SECURE_AUTH_KEY',  '40oAP/;9opHBTkY%eSY)AQH4IT._Kw0K)VVx4,B$lQg=sMEn%osn^kM-NVE.9_5n');
define('LOGGED_IN_KEY',    'L|5py1= u:{Gwz|hH%jTJK<,!nxM+E@BP<HCsM8l>==xtg@vPrwo],ncd8VW`Ry{');
define('NONCE_KEY',        'w2u_gP(kZK;s33x*%q3gve0:S+j|3Kb)jSn$g;yZkn#X*&32?}C*W4k`3KCPK|Y0');
define('AUTH_SALT',        'Kbha N2v&0x#Zn`BY.jtN;Q16CAm<$I1oq$hQY*<<8tg0(7?&9=8Ko# Y=C1{f(k');
define('SECURE_AUTH_SALT', '{BTI=S}<Gwqo@H8x|T[([jv0>IJyT5PW9[Q a+mw04:}{s-jf^N;-lWKu+-(5M#!');
define('LOGGED_IN_SALT',   '+m6N%]l<iH_~{iq#8D.~X2yE$H_!lc.UC$z|zB2;SW7>,p_7ZeE*~3f/,w!z3`>`');
define('NONCE_SALT',       '*t,1-mZt?n<#,SbOVdB&7NehFZ[qL/u5c@6][C,M3]sZRo++yqp YU=x+ZTYy|g^');

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

