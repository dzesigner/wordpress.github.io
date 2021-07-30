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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'w1' );

/** MySQL database username */
define( 'DB_USER', 'dz' );

/** MySQL database password */
define( 'DB_PASSWORD', 'dz' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '[P5>=#GV =DSOj#z(i`o;YvM+-(ZVX6@JY[N4Myn  EGD*y -<sFxs9!TM*VHP~K' );
define( 'SECURE_AUTH_KEY',  'cH3p==3Fa.y{ H|{AdWT{,RDTGgYhqQuyO#ah*2!xP.*xN,$k3Th?_jHv-(i_eXK' );
define( 'LOGGED_IN_KEY',    'F^LeU~nNn,wQ<-u2ldZmG4t6y(|3e[=,#`=mQ `;HlL>DDAzbzy<}Hm3H#TY] DB' );
define( 'NONCE_KEY',        '<bUNB[r&.V`sz$b&l.)r:dF0dK!*:YuF_lqLHSI4-/JGL7BVS=}|KW3iXsIcT7] ' );
define( 'AUTH_SALT',        'BD$]18q:L[cZ<lXV}wHUOpK0y{Q92d~w.NkvO9)G@&_El!Aup0.K@:rbv^IM.BkH' );
define( 'SECURE_AUTH_SALT', 'N|TRD{Pn8[;X&~0{G}r]Rp`3B]<N7^wF`&`QN017zEm&bZ9x(H~DJ#yo%.6I4RvM' );
define( 'LOGGED_IN_SALT',   'w-uJ|k%P ff]CG[N/I+ ib>V%Ldz<E~UIV.Q<.Ai^za>(Bux@$:_F9f=}Xyyj)}5' );
define( 'NONCE_SALT',       'm{:AivM62Fnoj@0Kn~FFetO/f=zb@aQ:C_A?JR4MfGsdn&KB~kO|in?d0+B%8jj@' );

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
