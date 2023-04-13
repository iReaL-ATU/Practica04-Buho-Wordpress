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
define( 'DB_NAME', 'tiendatigre_wordpress' );

/** Database username */
define( 'DB_USER', 'tiendatigre_paul' );

/** Database password */
define( 'DB_PASSWORD', 'q)GBTt%*b79W' );

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
define( 'AUTH_KEY',         'm|-hGoJ>,S>8.gmHD/}H`^TZac-AI_NH$-&OItOX+i`a[|8M4D)yf,,o)OnP,xj>' );
define( 'SECURE_AUTH_KEY',  'ZLp%HgM]#Waf<!&13LJUm/_Ud;2jkV7+5zx]$(QJ:RKi1SkEc8;m|7b>Ps8_bYuV' );
define( 'LOGGED_IN_KEY',    '8d#z|6B_CuK+*>gEF]W`p{DUws#Hi(|QMX0A/Qij|B6YZ#?Wbuc@]INz4M|#s<b`' );
define( 'NONCE_KEY',        'b%`oRvDT0SnMtEUD=!ULT=pQ!r|9MT=m563(oYYypnI?>~(~lK[S61HWkos9L}4)' );
define( 'AUTH_SALT',        '5{H~&[]k`O3Aj%;aceJ,bU>)@fm.=g=6#e*B<AgTRFC}M *Lb]U-!*Ad@YN`TWSy' );
define( 'SECURE_AUTH_SALT', 'u?.;r}vHM)Vf~4XL&#d/$2$ q.*#Lk4kh5X{E=OBorUP5Wx?iRB@pL~?oNyH/#,n' );
define( 'LOGGED_IN_SALT',   'CN1(7KPF}I95}_T(O8wm(FOVD8*qOL$|PhztwgtA4<^VIDU3[a#ghOu6vMtTov74' );
define( 'NONCE_SALT',       'FH.|_c_P}Mbpjnmwa4*]||z&Niz:*ATFGqxx;LG=n.wAX8?+4:uw_2NXQ#;8CN-2' );

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
