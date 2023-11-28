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
define( 'DB_NAME', 'wp_siteweb_final' );

/** Database username */
define( 'DB_USER', 'test1' );

/** Database password */
define( 'DB_PASSWORD', 'test1' );

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
define( 'AUTH_KEY',         ' G}^/2q4u7v]_t$yC3j2xoIow``15pvK#J@:^oqX#9)[eak,7m {P{$y}M{!1?a=' );
define( 'SECURE_AUTH_KEY',  ']MfZde_T18_Gu-onlI$c5vW2]I}Y`$[Js ;Eiv&p!JJ).ci{p+R[||=K{6u>_{w(' );
define( 'LOGGED_IN_KEY',    '{h([Cg oNvg2jsf3,Hn1*U~r5!Qpf(Naqgxqor*NDDiv/3_8Ls[T96!>;U$3NJTZ' );
define( 'NONCE_KEY',        'D9~Twdx2N6a4oOf<JgHvZXyGlfpC`OOm1?[c9SM:<J0s]N~1JypSDutFO@q5*B$|' );
define( 'AUTH_SALT',        'D?@UmnhVij-yivrAY3)yVehGWrXkyh4.>lb_nNn[Y7=_.qGKTV3l=vDDo.5ynKa&' );
define( 'SECURE_AUTH_SALT', 'e>;wXpd$C9=,-tWK?{_={czFe)Nlh3_dj[hbVhZII=(^*]d9*~(FHn@S*! (i_:M' );
define( 'LOGGED_IN_SALT',   '%-}4HywUHo;$=NN6ui/@Ma>RmXZj@ aqh4o9R9a2N)r)>W/5s0|C~XNljq$E_q2g' );
define( 'NONCE_SALT',       'i<tCl%PkR7TWLEiq3ivisa^eJ+S#1,=/FA.yKz/+XP8!$&wji,i?K/f?yzq+?gga' );

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
