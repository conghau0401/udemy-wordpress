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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

define('ALLOW_UNFILTERED_UPLOADS', true);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fancy-lab' );

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
define( 'AUTH_KEY',         'r~KUob%R)4Kbgj_RZ=[qY?5=4VJQ]AzvM0W^&-bH/TTEAtKM/*:s0a{0YXpF$.~f' );
define( 'SECURE_AUTH_KEY',  'w=XF&9O.PFN#S3?veY%r`PBcO&p(X1(~g^Nz8]Y_vnJpz`v*q$fMLRtIgg1$cpM*' );
define( 'LOGGED_IN_KEY',    'cVb]+Z_/z6yc =5K-p;0L3;Bg&&OT4>N5+&?ooK7Lpki#z}h[2KL;kC5]Tq;6H{u' );
define( 'NONCE_KEY',        'Q0mkoK`nv1Eq$c97}%zE~x[Lbh0}Q_t,|ZD<sh=ioiJ;&Vlh3PzTPQz6pfOIxqdl' );
define( 'AUTH_SALT',        'H3i`.#9 PPX4S:wdY27(QVx|x7{gQSsqX,VPt &~Wy.we]]de:7;ED! Y.Pg{x3N' );
define( 'SECURE_AUTH_SALT', 'J-$hjt=M<SwoqYy*U}BNL_?$jsc]SrkDp3%?nJ98|4oY+68D(}rJ[7uz C)_~Fir' );
define( 'LOGGED_IN_SALT',   '5!7qj,`t]96qD!+PHd~OK|KyP/dn^<d{tE229WVE0)ZM2~_r2^1SQ>mQzv#wXA>K' );
define( 'NONCE_SALT',       'uQX>bGGW;GBt1(9FZ$han&k+<dV/0F> --,p.teP_f#[S]$pPYO,QJ[1Gv5R5e/n' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
