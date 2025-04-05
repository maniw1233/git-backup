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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'D@saM3a[6Zn&<4.Mk0voQ6!: JOrsM]j.2)`Wc<|8Mj.q+D|ub@~&_ao0S4U`9)h' );
define( 'SECURE_AUTH_KEY',  '>kkUj9+QRcZih{Z*jQJ*8i{.3|3r|dZ|?).`?76*15kum$y-uLY4{Rvx]K;_Z)(y' );
define( 'LOGGED_IN_KEY',    '1w#fpOKYqIayh`|k$NC&-UD4|c4usVCR]Hlwt>fYxTT}%ExNSx&jQ kGYjQ;|F<D' );
define( 'NONCE_KEY',        'AG{.]0{]!k|nfd8<[z=1?01+y+Jhl<HI^{y}kD/d];A9x>X66qYn+?vufko7Rm(k' );
define( 'AUTH_SALT',        'IAj`JvV@<>i`YQ~g/yF&zKw$r}#ho2{Q$(,D5!QqR&=QXJKqT*>)=V_XbO@hu,jQ' );
define( 'SECURE_AUTH_SALT', 'fc8^&,&mKcYQN^CKS /N,f)DTHrOd{P?}b46#/Ex.})^V26C5|.?MW{Kf,!fh9eW' );
define( 'LOGGED_IN_SALT',   'h}jhdx:R|s,@}T42F]K9*6[,Q@Fl][`Ehcj[X/#B~.h0 p;VC_tK4v0*W?oYh%Ud' );
define( 'NONCE_SALT',       'x/Fx_^B=YfnH_1kgQjF6|*[8(vU<3wpLN_E@shDA/,TFc=j_+uGoHz!w}2di}x6s' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
