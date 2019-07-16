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
// define( 'DB_NAME', 'wordpress-docker' );
define('DB_NAME', getenv('MYSQL_DATABASE'));

/** MySQL database username */
// define( 'DB_USER', 'root' );
define('DB_USER', 'root');

/** MySQL database password */
// define( 'DB_PASSWORD', '' );
define('DB_PASSWORD', getenv('MYSQL_ROOT_PASSWORD'));

/** MySQL hostname */
// define( 'DB_HOST', 'localhost' );
define('DB_HOST', getenv('MYSQL_HOST'));

/** Database Charset to use in creating database tables. */
// define( 'DB_CHARSET', 'utf8mb4' );
define('DB_CHARSET', 'utf8');

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
define( 'AUTH_KEY',         'hfJdh)z3.TQ%}vzsp!G7zny&}!ArSZ3Y::r)c{6jS_#mDy1a_bfE.@4[xcM8WQ~$' );
define( 'SECURE_AUTH_KEY',  '#bn/S54TZS~WG2S{w])`-b~?s0` qtl<Gnd^?zc y>Fsfzo5N,^Da;w T7LN4IX]' );
define( 'LOGGED_IN_KEY',    'qN?sbI|(0U[R0v4y:a4=RLYV2U*ip}Wg9`<D 4S4]m:9!k~OCOR%1w6;ivm2u_j$' );
define( 'NONCE_KEY',        'k]GD-kn&#?sTXMPWWQ.D0M@S&].w=wwLu=~k-$PS&eJ-]AS}5D5uqADK+V|[HaAV' );
define( 'AUTH_SALT',        ':QH(3j}j.SRi8GH!G|o3ozyXy#k_V(<A3SV@-3D-8Dk%{,DzN5M?X5{ZOQ`@Hq+F' );
define( 'SECURE_AUTH_SALT', 'u*:g^DoKW?DKlP8J%b fC|I.$5%wiCN{o^Sq;4)U4)&(VEB#~9x?3:VtEe{0vd{C' );
define( 'LOGGED_IN_SALT',   'KYbb8h+G|(k}i?mwHjxc|f1o>=l8{`^#j]J76Q~kO^olH]6mgkG,KR?{;nYB2BLz' );
define( 'NONCE_SALT',       '[pc%Bc>X(oovjwbr9q/[p{2mL{B1IJMB7K=(`jFJY[;L.&W+z)_}nRyZH8$[i>Y|' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
// $table_prefix = 'wp_';
$table_prefix  =  getenv('TABLE_PREFIX').'_';

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

// Config SSl
// define( 'FORCE_SSL_ADMIN', true );
// if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)  
//     $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
// require_once( ABSPATH . 'wp-settings.php' );

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
// Config file size upload
define( 'WP_MEMORY_LIMIT', '2500M' );
