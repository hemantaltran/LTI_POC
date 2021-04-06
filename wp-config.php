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
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', "http://localhost:8888/LTI_POC");
define('WP_SITEURL', "http://localhost:8888/LTI_POC");

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

 define('AUTH_KEY',         'Pw;!|p(~_t4P@-oh+#+{&Dx,JL;(|]f7NL0rXiJ+(Zi{+s%iQ;T;L*rR|2UT/*T^');
define('SECURE_AUTH_KEY',  '-yEFc%wjec#e8t!OZAQ&n?}*/?z_8vE4Gi[OM9P4mxA<i85t`= yIf(3Y,QOz?-5');
define('LOGGED_IN_KEY',    '7?<(Y`ARRiybfUPtHI{(wEYk]i/Q-;1,p_1Q$v53ynRKxo<;j.|j!^F7rHT(};93');
define('NONCE_KEY',        'w]gp,zBy24)0GD7}(W,h<Vd|@kX0 *RL:k{`-+AFfC@%$:0u^Mc0T{Fn^E?uBa+B');
define('AUTH_SALT',        'qS&TTeZ#_fMF3c8Ti:7N&!MFfgD{_j:Ye&=G/S)Ih5Ifot9n3lbx~+Hk8e|.JJ%o');
define('SECURE_AUTH_SALT', '5N6G9DV^^(^);PSRrU o9u]T8?{7(B$-+sIptZ0Z5$wsupa U:=|F-CQG{)mo-T&');
define('LOGGED_IN_SALT',   '/py?G8QxcX] xX<3`B_HuB/f[6Q;uJ!DX-|*Pz[3/2;s9h3`q|No? 6ele|Q>bMD');
define('NONCE_SALT',       '&E_:i(!]%s&/0dtOIQ$gpV|N0QrN1*Mu].KD)7<Au @x0khb8TPvtC{g]Yn--TAH');

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
