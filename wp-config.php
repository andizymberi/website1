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
define( 'DB_NAME', 'database' );

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
define( 'AUTH_KEY',         'i3^zqUriJr{j:8uVrpBLeMANJpdC5lBg4vd{5mogA1_Y XL|ly gJL/{(t/z=+tE' );
define( 'SECURE_AUTH_KEY',  'su4=kd4DZ$W3s^^nRhB{Jf}6y/i:c2@2,U$)GGJZO<aAg2w@5hv@TFqP8k7YeWRs' );
define( 'LOGGED_IN_KEY',    'Vx<@p(WEIK]dk)[rl@yq_2<-g5Vt*z+ex]>(^dM<]oPny&!(9_G-K @mzd$.>=K3' );
define( 'NONCE_KEY',        'ZFm~, w~RtvMmjO!JQ^!SO}zC?X36e[ReV[z-|>ckD&nmH=Vi`4Wt!|f%P.TqTH]' );
define( 'AUTH_SALT',        'l[oC&jy(P 2,h(Mqp_/kE/okp{gs+c(3IW]r uuKBW*x)>J)h-e6%|SAMO5ndahf' );
define( 'SECURE_AUTH_SALT', 'j(oHX;uHyjHaRKt5*Md2fw95C`T<24W$Je?t[NBsMqpNBQq]oXyz%.yJB4O/d*0j' );
define( 'LOGGED_IN_SALT',   '[0qW=<}q=^S?w.n`fGl~Q.iLxxq`^+Qo_A?/)~toAt kPPl3+I:o]AuT0S(;C,Y(' );
define( 'NONCE_SALT',       'HOb7L#6l_MEYrAG >@h<&(D(#b8a-|!@0k^n8nCff?9]7s5/]m<v/qG{A5.qz+(>' );

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
define('WP_ALLOW_REPAIR', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

@ini_set( 'upload_max_filesize' , '128M' );
@ini_set( 'post_max_size', '128M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

