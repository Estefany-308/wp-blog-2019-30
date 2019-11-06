<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-blog-2019-30' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '65a6cd7c6e36b8d9a308a5f9c5047593c3631eaa803fa2d6' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<rpr&xn-5Rh#N~N:ETd2kj~.P,w&E8VXKI4V`P3aJg9b;/ ,-{>LgcIhx_`PwD7*' );
define( 'SECURE_AUTH_KEY',  'AQMFlMBHlBgO%&6b`sp1MdZ%ER3?-y7MQhMF;h-^I)LiB`|o@l3R{mx@Mp|eb14h' );
define( 'LOGGED_IN_KEY',    'zkc.ND3k$EK/SV<jEDd{ 8/~T.H?*3yK6N3k=Kig]M/7w Ehxl$Z-W>ylxz;3s&F' );
define( 'NONCE_KEY',        'lyX8AK4ZY6_FI?? hoK1aI(1*0@0x):+k:L4A/(UH?1nY{]spq )oy4a^<,phAP2' );
define( 'AUTH_SALT',        'W&(LtXF<;(sUFwV>74]di>b{fG2BR4Pd?DS!C]bFa68>A=o*H4hG&V&LcGT]KYVa' );
define( 'SECURE_AUTH_SALT', 'ziF@yMYE15nE~KW2HGV&HdpAWqN[3b0=9M%)D)!EW A>o?Y~VRH>$c;eq+E/3YU}' );
define( 'LOGGED_IN_SALT',   '3JpTXD#uAmcM_BodaXNsr^AV^1aK]n}{5fVy{tpAud[UG2G@:b<&ZI;ck2}k&Z#y' );
define( 'NONCE_SALT',       'L A9?d<jf*b|_N~XDl.C?{mQRO(WkWC?{I@IyeLdAE:mbza`Us3^Wic(G0PLj:4&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
