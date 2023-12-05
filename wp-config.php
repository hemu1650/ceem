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
define( 'DB_NAME', 'ceem' );

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

define( 'WP_MEMORY_LIMIT', '512M' );
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
define( 'AUTH_KEY',         '&htmUF[FV0j)Y,eGu<WK9ku+jAc,| /xE1NL>l{nCM]S~EpL5oK3<%~W4um[FLY ' );
define( 'SECURE_AUTH_KEY',  '4zNjKtsR>1_B?%#~S&2)ZdN[w?(!vdO}9oK9:Z0uAPryu@)Ra9opkh#]da6$G>ca' );
define( 'LOGGED_IN_KEY',    '.W5d:H3<h$p$]8M/NHYDy[ZI@8nH[C3R=m.<`Q~?p.^XRr/.}/XHi]oZknxle+1}' );
define( 'NONCE_KEY',        '}q|Eo1pVlKVO7]z&sPD!QICvS+dup)=EUW+KXlEPH2W vqu{!i+$q,e([ UuY*t|' );
define( 'AUTH_SALT',        '@8,r>5#6oT@Kt~*^R%GZHxxsC^:%y{z; jy+s6I~T:d^fNcM#s`yb}&_*,Xq:QfJ' );
define( 'SECURE_AUTH_SALT', 'cP,cEi$vxH B+EdM9XShHDh.kFQ#L#xfa2OW[@2#Fh8}#:f*K!rn*`_8*,%a5n|9' );
define( 'LOGGED_IN_SALT',   '-3~4hfk|,wTLPLY|FJL[4E@/ ]|UbqFPA]!U^ bI8R|2CPYVrLO6@`4%f6C0vHX>' );
define( 'NONCE_SALT',       'SAk!sEdh`*tZ@c=Gzouc?vQDYWQ`tW*?QNmb%d> rWeqe1YE5_Yfi$GQ.f,rM4ib' );

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
