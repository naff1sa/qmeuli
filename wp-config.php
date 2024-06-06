<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Z3<^r>q:mL$trO%>YT1z>E>D#R(XuuzN^map#g/+>BJ5Iu( !L#/[1Zlq)Oqs?kP' );
define( 'SECURE_AUTH_KEY',  'M(1{$-jUs0S=ls9RCL^4/]CpR,rIUl(S>M{W$Dq+/RZM6`CR5k#GgyyUZp3]=SG}' );
define( 'LOGGED_IN_KEY',    'cE<JDAIlBN4y;95~`xsd`T_rZjsG1GUB8;N>X_A`QvU1w!EyT<?k~Q5?&.Sto[IM' );
define( 'NONCE_KEY',        'SWzy3.hQ#8iVXch?|if<71^3t(*(2>Cn1Wl v-1no4U(SeHLmf|hl#Z8h6J(/PQZ' );
define( 'AUTH_SALT',        'L~?7ri:5h;(][Din4MoI>4;d;EF]I/#,1jLGa:^]B|EC1Lf#Y>/O v5on2[2I[A;' );
define( 'SECURE_AUTH_SALT', 'Rm+A$Fl>C=sd>!t+%$$vM]in-BM~B0{H^^ekIWVJWon`YTw`)t@`:0B{T{hzaDQ1' );
define( 'LOGGED_IN_SALT',   '#;T?lL;vbJKUwh]nT7gOVS3:(5[cR`9>g3>hS8g9c9U!oR#._|Fk(<pry2GN=X6.' );
define( 'NONCE_SALT',       '/70}zojk>}A%-<;^Nl3r3d(94j}Uvx[X6AqJI eLF$}P<GGDrif]wz[|98}W*y1m' );

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
