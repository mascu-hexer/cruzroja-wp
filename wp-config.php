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
define( 'DB_NAME', 'cruzroja_db' );

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
define( 'AUTH_KEY',         'MdoeE@BtLv*Rn<8>-E~_NIE,E4-,3%@}yF2hTfD=c7M4ex,dreKY;rf j[Xqkyhd' );
define( 'SECURE_AUTH_KEY',  '0p_~;PXSyKv-v9Q$#EX$-}KFJ2bQU:M_~E+c@Lxn&+U[[lW#<0Y0o@/B|TSEwuWr' );
define( 'LOGGED_IN_KEY',    '%2i=A$l*O0-sVd?Wefw.0n]{*=swWB) cW/{R|Vh[n-o}Yc^W0<A2I3;&+k*0eI+' );
define( 'NONCE_KEY',        'DzM0>U<;@8i!z34M$)LoR{_L ~WxxrDvN2^H@S7260Ont^UZoyJYWDR([4<#FD~y' );
define( 'AUTH_SALT',        'c5& cSL?:h c_g*SDmz-QUw2)tUC2lor64vR3efa*D:/QV]BaN)1R@$mZkM:ygMW' );
define( 'SECURE_AUTH_SALT', 'X>n_ku0cahtm2}d*aS#0SNoF-p;(I.?bxWrBgi|[G3<&`nzsy&pcHF_gP97t5peQ' );
define( 'LOGGED_IN_SALT',   'G&I_E}Wkda6cec3_/$-~=E-7@,DnGwTu,.HHHodgAY`u4?h<8LwOGUP{U$V4! .}' );
define( 'NONCE_SALT',       't6/7t}&X.7Lb<Uye5FKAdwuL~Wp.5SQ-g ~dmZ+iXhoT?/VaQVsM`2$H$+~;rKo@' );

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
