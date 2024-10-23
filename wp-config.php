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
define( 'DB_NAME', 'codecloudsproject' );

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
define( 'AUTH_KEY',         ',l1sI}i/og[*CIyBK6&{epMRNl;8FHoxU3dSRvdwy9EukkF>J3Mxz}<O(tZs,h:#' );
define( 'SECURE_AUTH_KEY',  'abh&9jsT8#sln,KF5FCwm]d-TB#^A@em(_>:]EK=a{!xvgZ%U)pb$GwZ%8bi%lu[' );
define( 'LOGGED_IN_KEY',    '1[<}~gAT(ZtpP;oq,9SW-S3Z<hJPnYMnFZ f5`.K@xcD$CKu[%h8Ius?I[[{ONSS' );
define( 'NONCE_KEY',        '=}ndA3/]vzX,>{#W50lwaR}5q645x2WGRK 9Cgc}dApQM#nwJS5Fg^Oaw*S2%!4/' );
define( 'AUTH_SALT',        '*X=MEva]t+*m;iNcW.o,<&T$dS}QL{I;1=SB3hZ^hrZp&5>p-cQ;wHkajc7~4]bW' );
define( 'SECURE_AUTH_SALT', '9&aFiKzq(n%$BJZG[`>xS<RBG:`$N~K6`,Qa6~Pw6oIoJR6FYnk*wSFqYYUjUvXO' );
define( 'LOGGED_IN_SALT',   'dQpNy ;pj~I^MaAIiR:J@AD%Fi-rL8.T.VThL```fApNHXt=AouDl<JGlTUOKa|d' );
define( 'NONCE_SALT',       ';K[8D6triSrV[_Ja+|z_$OF_iOb+0~0)g8m)Yc;e51H]6_FFRO8j{#WC))19oYc%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_cispl';

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
