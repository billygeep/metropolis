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
define( 'DB_NAME', 'db_metropolis' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'q7KM:`/_ARpwA0fkZ9U*2W:2$F%Z}~Eewkv00t~n IQfwEm{%i3EsmODE4QZBh(t' );
define( 'SECURE_AUTH_KEY',  '+%iW7,B/5|TQRPHNYZ!a5L25SSlC(JfSf_4X_Fp:uF&p=c6Fs)t*DEf]qA9,zGH(' );
define( 'LOGGED_IN_KEY',    'O|6zmNTC6foL*ru@r97PQ{PR7pRk* 3FE4Fig;K`S+];OIURZ5t!Zt_`{~Qk?4HD' );
define( 'NONCE_KEY',        'P<g6g?%qr3%W)uX)s/ZflTO6or^^_klAS+SH}H)S`L,_p?@x2aE*$gvX3z7$JHg7' );
define( 'AUTH_SALT',        'ryY=QX;]8h[@XXCT6(nJi`TsgG[M+fqv1lvB0g7}qcHw4hPUduw?&PPvLlLV[ nA' );
define( 'SECURE_AUTH_SALT', 'd0*@PAkT$Zo:W!h-^Orv @gn++8Jw)~OMAS6{x*J1c|65%)iAWsS<%2RPj%CSPp?' );
define( 'LOGGED_IN_SALT',   'IJ%dMNKDaRg%%4a4=j/&nW3V5f.n?T`h:>yYT,#8Ds#i6kAvAl2tkeMFqH5[t#Dc' );
define( 'NONCE_SALT',       'k[p%)4d|<`sN%(d,},Gn%@zPQk1w .J2vxeFG!wBkY/)O<ks%nx$vIl]h00=Wrb*' );

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
