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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'wpuser' );

/** Database password */
define( 'DB_PASSWORD', 'redhat' );

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
define( 'AUTH_KEY',         '${M$4DTP8VvLB_K:`MRa!r8&<0>qS6WR0.8:MWGsG/Mdjx,7fP$76#=-lO:pL3KU' );
define( 'SECURE_AUTH_KEY',  '|}Gww<IFB%WZ4w-$f%XiN,L:|!y7AvC+bu*HeTk,@f)/bM=P=hZ?CKm#}2r6}o0(' );
define( 'LOGGED_IN_KEY',    'P[2<^*97&iQ6]/tOB-/a}t,=(3yaC?+~Qd^/<`p$O|eCE?-1Z:G%#@6f$loe?,uN' );
define( 'NONCE_KEY',        '{OxY[>$[/SE3+eq@4q[#q,-ra-Ail^Wc(oZo&SVb >4|,WIA=gctZ6|n*Nk)8a(S' );
define( 'AUTH_SALT',        'm%pR*| 8kUZqIV(n0Sw,(f;xl`%Y-g9)2[IJf39H6BD:_,@Pc${NOwJ?M}%g [<|' );
define( 'SECURE_AUTH_SALT', '^T#vpzd*er+n[XZOM0smQqfwz5Pmo#hs)pqYH Bv;l[j*]L:$.JBdRK8Nwc>P_x=' );
define( 'LOGGED_IN_SALT',   ':>5[>._GT_hx].~[p~)E!Ff*]5sNJXXa/a(r~0LWPqz5@kE(+dwd2dMk:5PFX.|f' );
define( 'NONCE_SALT',       '))-zQa`5jf/KB EZ_Z?Iv> 2%U#q4r#J7XYRb2,KU,S%l~7SI$z.D4|] B:~v~.m' );

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

define(‘WPSITEURL’,’http://localhost:8080/’);
define('WPHOME’,’http://localhost:8080/’);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

