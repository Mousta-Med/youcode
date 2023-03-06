<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'youcode' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`btWSDxDbFeBh[c|b^G_6Y{_EJ}SP}!bTiQp&#g{+7d.`[4QG/UQ#t6?=-yE|2`8' );
define( 'SECURE_AUTH_KEY',  'W{<Q/M&~YvSG-Eqd;;yA+:p<I#Dz6z&[6E-T,dPL.;sVJ0P[SI;)c4ePF`4AV~8H' );
define( 'LOGGED_IN_KEY',    '@Q6,}B59sc]_%MpPQ<Ww~xfnAt@E.>>MNR=rY/g57V{%YYGes&;1 aZ*8Wi/qh^|' );
define( 'NONCE_KEY',        '^Xq_RCc_?<:W2HvUx0]ZYW-Kt2_?ICr5I3%`L$EBi]ntOlPq}$dK1y]#P{v^Xzm(' );
define( 'AUTH_SALT',        '<2KzCgKk;+*Vb?s2{;6r2$Co122|ftcyw)ec@}M@a_RF*K^zg[u*WQU![>mz[~<_' );
define( 'SECURE_AUTH_SALT', 'F%FYa2)soJYlPD0OUgsL@&Dk`EF9=p:}nwoJYs}K.G]iO`c$0=2TPj3Uts?7(zz[' );
define( 'LOGGED_IN_SALT',   '5aYbXzFg!QLdfnZ{+s|2/Lp)GA%,p8Y(p}Y_S!={?hz#kx85d<|5xDX&c/Aq1i`8' );
define( 'NONCE_SALT',       'vB/UHA$DP<~].k*RhP ,R))|bQu`]].NXwv|v}vE9C8BC`rMOrm@~LVHUU8UJ-34' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
