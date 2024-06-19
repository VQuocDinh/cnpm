<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'cnpm' );

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
define( 'AUTH_KEY',         'T?IuO|_d;~#cgN(XOD(!/BSv<R+?p3`<}8[RG%7!#:/_l8|7.(Sykb[RusABgm<d' );
define( 'SECURE_AUTH_KEY',  'N{C/{nTj Rsr0_GV*8jd/n8jG~SIb8E2CcJLYPGzw`wN&0J*U|.NJ+Z9D2O.awar' );
define( 'LOGGED_IN_KEY',    '_rAhExq!zezDqb`!_PW}Bu[o#Xe-/G15o9}0}kifZvB#c?9EDGqz#w3f1^Uho:/D' );
define( 'NONCE_KEY',        '>&Q>.v`H{4_ZAVIwdRtxy|4]`42JgBM:H{XH?eBown.LT1tM26Gf-j22:V((U#NR' );
define( 'AUTH_SALT',        '$[P0PvjvW(&];%g^Vz-;:|~e-!7p?RqDI-fn={{cVt$nQRN(XeXOhu2*(}a?N!,%' );
define( 'SECURE_AUTH_SALT', 'aA~j9dQJm4Cc<.2pN[6}a%S{E;gM`jY^b8<,zO4>xgJOq:ot0gcEzIEP`$AYUF1f' );
define( 'LOGGED_IN_SALT',   '~Nl)EQO  cbcird*@G}=~60mGC<a|0{.HTlQr2n47Wdz5sL`D`JRh8stu$Cb?80K' );
define( 'NONCE_SALT',       '&F~^:@$+VQ*U41xSq2& c&&[ePKL9(%H@31t,b2hB~HZf{0oU-f4v||{aC-mI8d/' );

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
