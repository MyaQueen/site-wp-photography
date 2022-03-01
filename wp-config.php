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
define( 'DB_NAME', 'photographybd' );

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
define( 'AUTH_KEY',         '$TD%&lr#Sp0 %@kw3iIDDDe`tA~RJUqzY.bFs~6gO#vKD6#}Zec1{DBqvBR~C9Lh' );
define( 'SECURE_AUTH_KEY',  'KrLTPHn)!4Y>vHOg>e0:En#u%`{s,AkJ-vw>2]~G;BEKA CTi?B}}!%]6DwJg_!G' );
define( 'LOGGED_IN_KEY',    'fhUE3Zb;I>X/w$(a~W5c+j^q?;kpovEv|4k3r[(7HsvZ*kZ|6ip&wSkOab<N`]]1' );
define( 'NONCE_KEY',        '@{s-oH5%=7F{[_Xb;Nr6P{.Afn(1OC@k/62&sKaS<TiKI_^V8mxA#Jkn|Xb(U6FL' );
define( 'AUTH_SALT',        ' 1:5Yma=hlSo}B?vJ(zR~(lU<,nBo|+dF03C2bsrB-L/`C06`~KH*8/u>`/MsY(#' );
define( 'SECURE_AUTH_SALT', 'Kt]:ncP_zq9+8r5#gad1+>P%W+w`Cj)a7xA8lHp!@}VY<pqjKtB.31v,*={$%2C+' );
define( 'LOGGED_IN_SALT',   'E ;h/HT 0rA~bn7pjRXtzzvPWnW)ww 4DPup$;5%v(z[Mq%^Ot&fSC7OS(B1=On<' );
define( 'NONCE_SALT',       'K%YyLMy!> 5=!$^{|k)x;0H(=p2XExGjv;D4Lv0#=q~M.ro!99gYo`- +xfT+fzv' );

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
