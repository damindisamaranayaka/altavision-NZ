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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'altavision' );

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
define( 'AUTH_KEY',         '&5r+3k!a+~PW5rnFHrzj n.ZhZJ1.K<FT)OG`~9IK>?4LFjrM%YGu#3w50Xr$lj*' );
define( 'SECURE_AUTH_KEY',  'u(9.u/1zSOst+PY`1rDYSN]v*4UmK#H:SQY>5B}{)Wm#cmOuX$bm1~%+uuLP`7vO' );
define( 'LOGGED_IN_KEY',    'F9X9 SK#R;2{t}=Kz)ca[>&:n4GeLWZEV28}JVV)TbeMu_F;0$FfQi=@0o#5!BG`' );
define( 'NONCE_KEY',        '$t7$#M<_R,v;Q7!TCwg88+7G53<<f>ZQ{{9~A+,tg]!$gw~m8YjE sBFO!h|XYwY' );
define( 'AUTH_SALT',        'd|Q`RABi`L>8CC{`Y.{jP!~^~}#-![*UpVjXL~j12=OGN$NDBvbT97{d]{8mb$m<' );
define( 'SECURE_AUTH_SALT', 'wFq+>J#5mH>?iYf-^PHN?qBI-F&UoCchR#A}8)zx51yBOzgfg_d01ENvD_-{KPU8' );
define( 'LOGGED_IN_SALT',   '&k[8 qFoHZO)a.!YXLoS:59e<(_l RGD&U;>MIPcoWW_N{~d?H@:z}&R9<CODa~=' );
define( 'NONCE_SALT',       'mc{#l|IuwXt.c.5=!M!mIfV6i}tx3I^WbB9kE0rCw7wciJc#V897e<J=]?;INvA]' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
