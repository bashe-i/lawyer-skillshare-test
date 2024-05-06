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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '})I|%{6ZsJBZivZFiAe4_FCU:t%!L)!(4h6.gKK]Cd5dWrqaF|3a{f#SNn)|1F8<' );
define( 'SECURE_AUTH_KEY',   '9C( `/foXrffYx~J>6FPUt4FRQxb7FoXo@}4g4_L+@L8$P9m^@?CSE0tQ||+YXui' );
define( 'LOGGED_IN_KEY',     'dHw^DyqdAQvpt`?QJ%5;&J[m~(.dmP)q;}e;}FOEIZe@dtP|;b2IiX!CUF<C.c4p' );
define( 'NONCE_KEY',         ',qk*xS[R8F/HMk)@n0wmb&{p@[(E_lIEzy{][zF, Acj?*Dy}*0hY:U24Z5Ub.9V' );
define( 'AUTH_SALT',         'D2,j=fXj]*pMB68Uoy4x1r#&*<~MKV#wd!Hx2F?kA#|7E^{DmgZx?J(l(5&3Ogr6' );
define( 'SECURE_AUTH_SALT',  '>O`8>7G%{`dUbq1{D=tM1dnU=0.Gk^aF/3V[W+(<clN*hNi.fnP;>Y)T[tMnPddu' );
define( 'LOGGED_IN_SALT',    'S5jSx7?lN|Bi(6G~vj`9E}z82{?2|d0-Qy7U$Y.mbj@DB(1|vh<-kJ_=dO=FarWb' );
define( 'NONCE_SALT',        'yX:H6=%@}MF(Xp.Gu5<J)-N,>JpgKg2}2PeR(!e/<%s+.5R2_y/v}8/;.;D(jCaH' );
define( 'WP_CACHE_KEY_SALT', 'SRf;[5>dcixDCn3|R;nJ<`A2BKS1e6pyZ^3kJ,<Z2[AZ<U. & /zU*^^)paQniui' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
