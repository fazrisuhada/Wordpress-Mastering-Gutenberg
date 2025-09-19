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
define( 'DB_NAME', 'gutenberg' );

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
define( 'AUTH_KEY',         'Wr,CxNIt1:wR]S(){Y-pD.:V&8C#`bQxw!EALM 4$.yz7m9`_9lx*dc|k+P4#|=O' );
define( 'SECURE_AUTH_KEY',  'KqbwoIC<f5BWc z>8(EJA5WlH}WtHbr)9HsOD$+5q^T~ghHpp(3q_xmr{X=JU3bm' );
define( 'LOGGED_IN_KEY',    'bOa:,9iYS9AWqw$]^)TJ;/:E2xxYy1a57G%d9QeMgMit,_`7Llg?t8v?tI,y|+a%' );
define( 'NONCE_KEY',        'HEm]a>uM=lQGO)pFhWnt6>_b6;&wl,WcFA++nY<JqeJC^Sys8XY~>:RlTp[J5B|p' );
define( 'AUTH_SALT',        'hV[)k7G:#4UcVG56>c)?a>7SW-2eODdk%)73Qs4Jt3>cWdbM#X;3*3+garVaa$xe' );
define( 'SECURE_AUTH_SALT', '|w?:>eq2WjPvbwJ >4j0IvYnI,F>F^Uw+N!c~Ql8)?C/0@1<JAXQQoAaHa|?H:qt' );
define( 'LOGGED_IN_SALT',   '4@03a^?}-z7O+jB@f%;)ibN33^1u4-^fi*h^=6C+41vH%mu[4?Dlf,CC-=<wVc,k' );
define( 'NONCE_SALT',       'o$F g&PMB{L#ly.!>np0v5^w^!<h2]q2ELfY+}>j7lqeRmbw<cxWV+G,zqS87a+%' );

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
