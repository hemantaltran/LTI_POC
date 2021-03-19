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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'LMAo}k09D<s]yvQ2Qr_;B@)E-6g;38u1BAVNY{S+J7zhb&w=fujUAV1u%UVvV:8*' );
define( 'SECURE_AUTH_KEY',  'o*Z?M.l<!k8|O91h,0(0KYQ2MUM_3.t%nFW~1BbjRc6H+C$!T>:OHPA [>Tk6hQ6' );
define( 'LOGGED_IN_KEY',    '6TYGdd[E=>3yJi*<~+mfI7xdWF8+M<r-X4TGAbWzrF+-C[5/XUNwSq>+KaCvKh2O' );
define( 'NONCE_KEY',        'Am3&K}./]{D*)|8J6COi/p*Yc4:|QL,hu5H9+j-3U`)eWkMveH`KBrqt!V&QE_Kk' );
define( 'AUTH_SALT',        '0TewUnXlSnE J?c32Bcr~mZ=f.m<y$[-::znG*_5GFy@cD,PB_[d/l5,p%m  HZx' );
define( 'SECURE_AUTH_SALT', '9I6b|hrPQL<OYk5cX8#Lf3%(%T]:WyEuoqBA`JU3KuUWXo&llAK*<15YQViTt&Vt' );
define( 'LOGGED_IN_SALT',   'Q`T{]qMc6c>]M94fRdB,:]ty%>+o :AA}|@eU- 2g!qMv3c_3Pi9r.sS3ZpBzh.T' );
define( 'NONCE_SALT',       'I6,_?m7x.:}Bp~Zc,[VYNzd,XJx<fcK(*t!xc,>Rk-I9;  _9+$@EV_j?g@RLJd&' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
