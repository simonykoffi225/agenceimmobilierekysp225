<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u700538637_8vS6S' );

/** Database username */
define( 'DB_USER', 'u700538637_2pvla' );

/** Database password */
define( 'DB_PASSWORD', 'j6tuAaKhcO' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'IvU`A8vq5)8YU(55ODJA;W!JCkq]4iCJxw>4^1Vb>D<O?TrlZQ5IBLYd+G.{-~z[' );
define( 'SECURE_AUTH_KEY',   '^(Em[u,VOu/@J}^lT)#>Sd*x?]2Ym_}DAvpxOECmO}`Qr7ON-m(x3Ju^=0EpFc=@' );
define( 'LOGGED_IN_KEY',     'MOhPaa5d9ChgQmf :MS(^|[~W+gip4.rA?7j:{yII9.U{k@}rXfOnm0G44QvvX5b' );
define( 'NONCE_KEY',         'ZtVv1 =>3#/Z,yOz&jkD@$bA`r6cUbZ5xi%;$7w8S04e(aVrT|Xu;&]zK4rHG4ze' );
define( 'AUTH_SALT',         'wh1T`uvDGfmyXpV|GnY4cbkhyYaDOrit`@!zP7* Yh|NG3/G??ZmbjG*4a5+l>nW' );
define( 'SECURE_AUTH_SALT',  '/z-QzA9]O<}B7W_dL},A@R.YS?M=3VJ|jG#iDg235yC<IR=6i[Z9[&k37!7A.z{ ' );
define( 'LOGGED_IN_SALT',    'S`0nOn%UiZQg{R6<E)8XX2c6;dlv&`^0/s.x!/g:H>gRmkj}r]sP}8d|TMEZy/}k' );
define( 'NONCE_SALT',        'qlt^T3J^wc&H&#[F*H]je1sshbR28cbRGu[(iN/jdaKT|4v?XcV.=WdKja2OyTIG' );
define( 'WP_CACHE_KEY_SALT', '*-L9XmSde.<;h#,z]nj;Bd2R8aq8sE(q*ew>Z&+@l.(7:=J,s;<ww; YHC5S.Kx&' );


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



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
