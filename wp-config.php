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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7!DBvho+]OAvAzcbDtDRu%[T<xk1a0{Q@d1=PX;tHKjAR7W]JzmWP4;6[X7kg~ZE' );
define( 'SECURE_AUTH_KEY',  'HNC<H]*,JY32;-[T[!+%:u8gea[q(czV~25Vg/!xm=NFh@&.iwkX<N/],GYa/7}z' );
define( 'LOGGED_IN_KEY',    '5JK[@p8>asg.jcK*PJg @gMAAG(%F|t3ZU|jhajXj30M&Ie`!F$>_<ksbw+.T7?i' );
define( 'NONCE_KEY',        '5M#_Sw%/lhKwOiu>~k~%cZHYC&O%HnT<#m69]ve6XfUXAH`>U!V0duL/lt[4~U1R' );
define( 'AUTH_SALT',        'J&#r6dxQ6~X&Ug-g9e#i`wY8nlcQY-R^T1nPx]v 3IzwPe9/h|KteC@[LIMk|FB[' );
define( 'SECURE_AUTH_SALT', '=n!B0wDrd]bQ3} PjUt1kS-!I;w&CKdn!UcxHq^@<#`peHdW|u_.!%7d`^u^|D!%' );
define( 'LOGGED_IN_SALT',   'X_h).%T)%VMp[GO!E^e9ybrjEYYxlqBQw`F8RJ?*;^C%i }:b4mM>{;/@jC$Fw!#' );
define( 'NONCE_SALT',       '/9dH5%?|IK+P8}26tmIk<?hrZcJ9@zEFEa!{O^h0fC(x~f:d~`+{@Gz>.0J 3)qM' );

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
