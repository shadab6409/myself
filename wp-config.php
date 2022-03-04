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
define( 'DB_NAME', 'myself' );

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
define( 'AUTH_KEY',         'C_aPaL8I5sn2/;-lfIy+9<]+`im~d[3iAg`}w%;@J7|Qr4SU6^KS(U w3,/G#*V4' );
define( 'SECURE_AUTH_KEY',  '[EQ)DivG&JqP#3pLVi*MJ`8);%P7#+FDr6L/4E}am7Dmi(fp*fAl5,7Ro#:|NW-r' );
define( 'LOGGED_IN_KEY',    '1GxIbt.|p!HbH/>7R}RA8b/aJ4[ze@&0?8*e#Fu9|8DggDu0|UWn.U%k0@}3KC@k' );
define( 'NONCE_KEY',        'E}_]ED<k:VMe6nCqRVCGdLU]Ue3jHUB;$G`}a?rpImiLe`qmQ4P5GQu]jf+&l<<[' );
define( 'AUTH_SALT',        'I$}^/0FsKz>wVn<jzq|d2SZb}&zGXddJS 2t%&N9?lZZXJr>~%f7l&7Wz#r5c9r;' );
define( 'SECURE_AUTH_SALT', '#jrrbu*;j#^*LC*qeI@J~}K*qbw4zjyLf<lXfea)S{Da$ngJra+Vd6(Ku19@Tgw~' );
define( 'LOGGED_IN_SALT',   'VZsGqi!9kEVRc <OD|jCj0f$UZFve71%w_tp^&T&Ne%0)1?&?=DT`8XPpd!?BHUw' );
define( 'NONCE_SALT',       'HBQ{C%Y;LYM_nCc=:KNaSmTA7sIC2S5FUL*v%@ev-0O_bRTc^}QF8Mj?C*VqwH6L' );

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
