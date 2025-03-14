<?php
define('WP_CACHE', true); // WP-Optimize Cache
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
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2905976_travel' );
/** Database username */
define( 'DB_USER', 'u2905976_travel' );
/** Database password */
define( 'DB_PASSWORD', 'Far@1970' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',         'z|z.@v)g;&4zOr>V`lA@&SdFDSn<*^|I%h^&tRv1HI1+c41R0;davu8N2z;gn]La' );
define( 'SECURE_AUTH_KEY',  '(Dl#.k2k+dy4BL%~p<-(7_DRN?1,D#r{*w[@#i]JAlY*_4`zWK/Nw  ;F.7L#f_m' );
define( 'LOGGED_IN_KEY',    '6W@}l(STt=wA.H]eN0XG}/y+t[j,d@;2pwp4bZ5Cq] RD?::cwKMvuY_du~`Mf2Z' );
define( 'NONCE_KEY',        '?^>AtRcTB?*HvK/;UO)`4#k%P%fQl%Rnm=EM<@9IbIS_{B3hqJ9=}93_;$]Q4}_r' );
define( 'AUTH_SALT',        'Gg73hN|1ysT/dAU{~7/yX`$z^r~2Eig ;~QmNkCiQa1rZtYWGG9AKfaS~EvXyMNL' );
define( 'SECURE_AUTH_SALT', '(^]B%f$m!1YEyIpf20h78[SNny[sC0x$0ENG4<XX5K;2:?[PUw/TM#5uh:.d9T-6' );
define( 'LOGGED_IN_SALT',   'mhKcM?q[QA.ypj$B.z//.;QfAb} U<4|l-C|@<0EwKnYFUs*];sGlVsn{E$esmJl' );
define( 'NONCE_SALT',       'tR!riF(qct4]s0-{.)|oKVEnR=CA,43I2l;pTA6{t~wao3j~J3Ai9&u[AYNb;Iz=' );
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