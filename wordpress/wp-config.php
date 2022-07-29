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
define( 'DB_NAME', 'wptest' );

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
define( 'AUTH_KEY',         '`/{e!U&X3`4c^gDd@*OagAmR7?;8rZUru@{j%r.Bio4-pb:&5,Srl0+>yb+9c%Du' );
define( 'SECURE_AUTH_KEY',  'MKG%9[}U8>6w,S{;L^1Rb8tAhJoCIL!0m*iEkN3#L{zIx^-Av?yPAFx5-Wf)h.;|' );
define( 'LOGGED_IN_KEY',    'Si|q47AGkyawV-H8v|1?Cr^1pR[]9Tl^%N.jeVS#%e*#*m#tUhN4WX5<pS%Ml%s ' );
define( 'NONCE_KEY',        'O`@+.0/W^;{9ly)zzDucv N&OP.-_y-K^$ld#lwA!]>P,1dOrSiVd+#4c(0FJ.#A' );
define( 'AUTH_SALT',        'jW?$pz>sF(_p-1O|ujWu(2EZrlN6aT^#  G#5e!%^?vd/q>tmtxawvY~=@I^3|^3' );
define( 'SECURE_AUTH_SALT', 'Gu[A19HX4Z!sQ4R<A{SHsmEH n>[&0!1~E+ #*)T2@!QDZ:_Xjy~$AG@]<+tX3b+' );
define( 'LOGGED_IN_SALT',   '`ZhUt8d%/k:d{P@!{8c)[dN0ub~&ujU{.f2saw-NTH5#R[2Ak.J.h1=^?>II<Wgo' );
define( 'NONCE_SALT',       '_psv^VA)GJ+fs1gC]ac]oM}0:=}c e ~u,Zj:IepC0{yRgAW3FQ@0sEz}H~S=wBO' );

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
