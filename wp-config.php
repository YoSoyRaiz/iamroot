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
define( 'DB_NAME', 'iamroot' );

/** Database username */
define( 'DB_USER', 'iamroot' );

/** Database password */
define( 'DB_PASSWORD', '112090@1b2c3d4' );

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
define( 'AUTH_KEY',         'PQCq>5zK*sPHjC2qNxV]y*`pTh</!)],y@H14*J1oL}%RK?dRHK*/nO`XkTO3h]w' );
define( 'SECURE_AUTH_KEY',  '~i2Z5*U9#}1,3W<[f,whsZ=kXet{-y&)aYMo.k-K_mrG;C*:}1`<oAV5FM+;-@XT' );
define( 'LOGGED_IN_KEY',    'Ma)m9e-lZ9_!15bmh~W+):p<UCHK;e0@4xr]~/F]*Tii8!f,|*PHL&/r:$KeG[tN' );
define( 'NONCE_KEY',        ')^>({?QVKRMpsQ+#D.sWRGJ#80$U^j_t.6h^PzHt?tO]FVs0-e[-3V<&AI:(xZ[l' );
define( 'AUTH_SALT',        'SH9uzYOqI;zK j3(EM^W;sjz(CfdfU|$CCij-Nq!);3bjQn~25*I;-pS%0zZPGw)' );
define( 'SECURE_AUTH_SALT', '53lC:SASz[,zxm>llXN@z:)UVE(B<, XWMJ-Rcm`4I:7p}ExRZH+Fb-Mg99`(M>9' );
define( 'LOGGED_IN_SALT',   'P4&H2a I]52FCeGj~E+?tvJUH5:G<B@soT>-z4in+q+hXvQGbz@rW6/b+F:%hk7S' );
define( 'NONCE_SALT',       '6+Nu[HczAM)*nRdea`3|4[@69T-f( Gq@lui;{n0L)Ny9[ ?$;1=)q|^r>*]2[<A' );

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
