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
define( 'DB_NAME', 'portfolioo' );

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
define( 'AUTH_KEY',         'JSl8R=X&:vhQjOY4cM @K-$;NoU)Lr@q]0<A .T9&-ncaQZSB;m#=C5e&,S-g$I;' );
define( 'SECURE_AUTH_KEY',  ' Lh =@-#+IpK0Xn{rnnWgK@R`uhhp<A4kIo?=c=)UH(3JB,qJ;JXIR+&J[[j$_;X' );
define( 'LOGGED_IN_KEY',    '(sgGN``IB:vWAn_iqq|s%D}Xi^:3R@#?;YP~=0N }J>JMT+/]RrDl4/MT)@w~Cwu' );
define( 'NONCE_KEY',        '*A_V_m@R> ~$ni[4Ey*joA|D03AkceM@u}rdhe;=%J5R8~I&GZi95|[E#,(48W`7' );
define( 'AUTH_SALT',        'Ap>1kBZ-b{x`zDH<xy06#D?j rj8}ZDnSBVM3@ouU%FcA7X1*e87rx3},_HOuZu]' );
define( 'SECURE_AUTH_SALT', '4b?#xU<<mH`ds:J.zCikD:ww0cQ>Jgiz@9Au{Dp,KdBUH;O1;#EC~58x(pbLl87k' );
define( 'LOGGED_IN_SALT',   '<BpJKUv^eQxIo*<PC~X0N}6]y|KX{#,)3q~)+M^iD8hxX?RqwbtzH%A=4kRa-u7W' );
define( 'NONCE_SALT',       'FpHMX/5&P6k.|l0|nq?dAkI2W@++~|WW3JQoqbPOACVM>Lo_!WDv{l)URZ2?KSa?' );

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
