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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'remoto' );

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
define( 'AUTH_KEY',         'iI~Rqevxq)=e >b5)N&c<HDM[E<!ZQ;sE$}u NiBLY FZpl=[+O+x]OI!cD%4C?M' );
define( 'SECURE_AUTH_KEY',  'd#6{?mrQymFbb-M*?: KdRyL$O)}HI^/Kbh*mK/3( }&ufPG642(=Z&AA~4Y8g5%' );
define( 'LOGGED_IN_KEY',    'qNcCzs#,)loG},afWPIR<?:=g?<~LjkyPB3q]|3Yz:qFqOEP&9v`5PY.Zq`2C7=`' );
define( 'NONCE_KEY',        ']Focgk&kDrx(xT%D~uR<8>H}M)}OCAxKVS7usZ-Yt-3Q7O$1]XJYNL`b@ZD<+S?H' );
define( 'AUTH_SALT',        'c{cb^#T<~I*PgQ#:}j5=bt35(1U&MD3j;Fzz6b4l`A3k|S)MNjO/f#-&zX_CQp1w' );
define( 'SECURE_AUTH_SALT', '|CA70+n[r@DYimMWS3HBMO-5e)ST(f !u;mE?a5d|hjOa_z*x0xiWSm}mYlH^/6A' );
define( 'LOGGED_IN_SALT',   '(8dF@N?c.b/4:gqceu]9idYZ^rih=J~u~^W~-Br>bv?A)D|HA~Bl=b[xxmgkg@^1' );
define( 'NONCE_SALT',       'XR)_NSy$iM>J?@*1NJY1#G6}hc:;]19p,Z8X$Pc9^sXQUfs.P.>=z_&:.0)n6lOp' );

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
