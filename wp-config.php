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
define( 'DB_NAME', '2023_LessardMatthew' );

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
define( 'AUTH_KEY',         ')[h0M@PBD,j0<;]g6&7,#:U!?`Xdmm*eBF?y1<%d~B&1Gc$.Qq< naZL?]Jc$*p?' );
define( 'SECURE_AUTH_KEY',  'N&+492S|?4s,j=Q!f]S N}b[a`qPZ!lO/5#yiT6ps{Z1x `Toub>bR;*+0Ea&N)Y' );
define( 'LOGGED_IN_KEY',    '>8<!`^-4k~5-%O%&N0%0oR-jY}B3l:xy%TQdd&Bi+Hlo<Hl>;FrYL!K1kVQF`.pJ' );
define( 'NONCE_KEY',        '(!Z>&Ma]|R^Ep&{Y^_AzE:/|$4[2R0ImNef@0x#&>&VqZS~`^:jvyTQO4`70=LEK' );
define( 'AUTH_SALT',        'o8~Q9Vs}7OoU]0~TPkisP3Z-,aF<.,wi5v/]M3R`)Wi0zfgr4q1?Po5t[;6dQz$S' );
define( 'SECURE_AUTH_SALT', 'zpSZH(!Rq{&=RJ4w-g7ig6&ymht/$}[#hSHq7 Y]HZhcWSH:2V1kDg3L,MLr|O0W' );
define( 'LOGGED_IN_SALT',   '$ 3qPlq#Y;EbpA;%U9Vmxkk%]_ %7ZUXA,z/L~Vv(t4|*+7=8)(=Wb>x]L:0?3h,' );
define( 'NONCE_SALT',       '?&&VRzZQ?y`L~3U6A|;N?t!&@q)]:v&;JTqu(R.B4?+B~l0Aoy1$`rQ[@(tg_{pV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'atm_';

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
define('WP_DEBUG_LOG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
