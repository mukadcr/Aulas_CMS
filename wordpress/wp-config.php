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
define( 'DB_USER', 'murilo' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '0h{uXhza7wZ($!5oyuEmIm0ANBRcl8GkMD@K^YHm}uJNUgX3ni~(1vKFz1T32(EK' );
define( 'SECURE_AUTH_KEY',  '+iM2:-yA#kq{+/X$8p`;e<~cA7bKvz;d3:he#*Y-lgrfIEKYR:zIzHS;V9uqNQ1?' );
define( 'LOGGED_IN_KEY',    'xE99efL+]FJGH@l)f|5_I;7(^pNn-q[?jJZ6#0O[g24.42zYX}zykqOrB,wcv$OO' );
define( 'NONCE_KEY',        'LABZd|apJ-=Er?b7T36MY5V{#Vgh8ch8kbET@pUTodVgAw:=K>{oxJ-0d4jAV0ec' );
define( 'AUTH_SALT',        '|i;x^uhz+q3>Ao7DDC[H.oF8L<9/V%Igw2SR>v(*FBk%t~,(+-{R_O LT*l>l/r9' );
define( 'SECURE_AUTH_SALT', 'tqt;gHo=p:7-K;+7hFy{*DQ.{)LGhLRVF!p`4^%RChP%` gpzZ7?M!=EqB~b/Tt&' );
define( 'LOGGED_IN_SALT',   'C,*2UjcU9/`S&Cy:[)$;e^{.)t#*{J_*r]|lbU9^X2P.IQ_,uq2zE60@M$,Fx0&=' );
define( 'NONCE_SALT',       'U{5B,7[baK@}*Pcd%ud?.L|P$gyimh:B`>L/)D N<M77,M*.^#EN;%1jE9Nb<XdA' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
