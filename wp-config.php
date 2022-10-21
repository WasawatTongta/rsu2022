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
define( 'DB_NAME', 'rsu2022_database' );

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
define( 'AUTH_KEY',         'DbaX[cp^Dnw<H%oZTZo;q`H6Td@4*WN=rRP%gsF0LA92$T)`k9x><h~gR~:hmODe' );
define( 'SECURE_AUTH_KEY',  'Oli52709^|MmPi{]S;/%lzoVYw7K XYy@w=wsJwr[Zsug>_ZNQhN`C8kwBYGP_wq' );
define( 'LOGGED_IN_KEY',    'c8lo}yWD)p`,:/^QGAr4psS_QR51t`I)0P%N;K6tZo-zW}Z@j;NBb,>D>vyT|[wP' );
define( 'NONCE_KEY',        '8zFGA.K?$@7B.r_%(&%Fu5|vakD+Q5DA2h^Wl8 rBU*mIFugV+T))84z>wF:d?G~' );
define( 'AUTH_SALT',        'QVG5RExtN9;M.m9%Qq5<>6YTy6cwJjxp)^M]=1@S#ZEDqUpt}`p-,_in!a&olP=j' );
define( 'SECURE_AUTH_SALT', '1e$nF7!PtI$no,~(%hJlYb29,_C7qeqKlO0<^#YMgYJABcQ/=uSY%#$N2S8[vk-4' );
define( 'LOGGED_IN_SALT',   '6<|r=J]nmI,v*Q)O-cwWfS;{L^sVm}>7=>nM ,:,Dq|elzbKvq(MM>4:;MTDim*3' );
define( 'NONCE_SALT',       '7*MNtfWF0Ki@Z4%_U+w+Pl@Qcb$6U|Uq_?G2V3A;as&<q}0CAvnme1_*&86KHsil' );

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
