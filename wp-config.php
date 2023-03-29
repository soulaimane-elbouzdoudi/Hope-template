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
define( 'DB_NAME', 'foeja' );

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
define( 'AUTH_KEY',         ']0dgPUFy #2:cdZEXFotEW`T%0==w <|oJ8M=r2NvR|(YX$uUZ7R01F,Kx_o_C43' );
define( 'SECURE_AUTH_KEY',  '|.*(0S+8k(Dc*tKhf-1?D+;#UzjCG3fA/c:F= ?P,4oWj|a4P78l0Uml[ev99G:m' );
define( 'LOGGED_IN_KEY',    'EeT,KnSu~{Q^c@;PkiQAK|:E02(Hf.NS .<a+`^E-S_ZBw[XvW6P}^A^^[-mT9uM' );
define( 'NONCE_KEY',        'Mg=X|iz?U]7g!LpyM9u_SKAjHX};aYUqwBW:0!u0bMn cx1,>PmZr$|$P];<NvpE' );
define( 'AUTH_SALT',        '6~%7eajpc2EOGfRny?%WT<<6w~.+>zcYbL(w6*)cd&19lcA9ma0gU]l:xVlte~{%' );
define( 'SECURE_AUTH_SALT', '1H^F*oP]tNZ,duPoX%-}xEUV*<`bhS wpkLfqX!qIfPF=9XxpKt$3~{GJ(SO=5zi' );
define( 'LOGGED_IN_SALT',   'hY~2BhHy~2qrf~e~>xxW|y(*NuLoqt>*I%^$Ki}0-iLY,:HQuPCZ?wp%^D3234`m' );
define( 'NONCE_SALT',       'EXr.K6d5y*dZdQoI!17%[MJ?,[jEp!(#1)S%Wse=redS8<1e0!8S7YPslr*wF=S9' );

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
