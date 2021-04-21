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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', "http://localhost/LTI_POC");
define('WP_SITEURL', "http://localhost/LTI_POC");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         ';SPy(vAq-^se<-_A-55)i[xr6tNtvv#~Oc<ej..$Xr):,M-Fr@ucbz?xcJ1G,l(Q');
define('SECURE_AUTH_KEY',  '-?*FA_Yol+@xj!/@/^K;?Y51a4VJik-}L|Bn-`X>s20~G0mijvM7W4p![a3|K5@}');
define('LOGGED_IN_KEY',    '-r-JWzLJ#b7]G^,5C /mJ6Zw0XXYDM5B.r[f|ZF-pHx0)M?-O&$ U+d-<RD<65=i');
define('NONCE_KEY',        '^kl^.+@Es0RT`+]2(<1=f|sg!q@)L#s4B|}D`{|0WC;hZ]:dJdlTF`!zc1^jAbM*');
define('AUTH_SALT',        '!ZiH:#j_=Yiup8vae?[k`w#1o7]rZM=;2Lq7n>T=Y[viGKaMH9tC7;`#K|+D_*9C');
define('SECURE_AUTH_SALT', '!-?5 8+soakEYi-oDIP>I7<sI:?%qvK-5 XsX;!bg,@>68L(cV|e02p;agvC|IB-');
define('LOGGED_IN_SALT',   ' ~UQIx>].gmITJ;|nJ7}<8nc-<bl]b486B?/?Udo dQNCkD=y2?&1E4TL}=LDM2b');
define('NONCE_SALT',       'GW?-N&2|J+KQV>2O|@mJhg]y:-|$5cC-2`@pM0b0<d%/0f<>6Y15,r1#T<7Aje>7');
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
 
/**define( 'WP_DEBUG', true );
*/

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
