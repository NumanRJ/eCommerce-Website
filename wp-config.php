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
define( 'AUTH_KEY',         '_!,SVU3<Z}D$wO9(MlFopXDoEm}wIp6?xgV74Su0r$P-=`Il%&5p!Mp)beTwL95#' );
define( 'SECURE_AUTH_KEY',  '(X(Mq{E~nmA@Y:%[=|&]!lFqaIwV=wGedeG?Dvs7H$65F}Ik-B](%NOXmY+MUMA4' );
define( 'LOGGED_IN_KEY',    'CDgY?8V8KtbC!oZWso7FaT>WTCK]I6vRFS7H~X_d&Dl@#h~=_{}EMu#A|~Fr]4g*' );
define( 'NONCE_KEY',        '7!nl`nux`-qp=8A^BoXqL&qnh6<&w}k=xiIyD4j{4XFLJXn@rRit+|z.-4}U{S_:' );
define( 'AUTH_SALT',        '!?Y&a%};0XL#pOhxa}ZDU8O*J+RE~(HPM3c]M[|Nb,u{,2Haw/wgkvSD~A{u7xcp' );
define( 'SECURE_AUTH_SALT', 'X1){j3.Wj%T@FRf?PYWC]ex&K{h:ql<n#qHXAS}xQi?/MMDir/Ajlo,wPGXB5B#A' );
define( 'LOGGED_IN_SALT',   '#p6!NS%J*O 0O1Mb53q(1+g%bD-T>co<siEitFw{Zr1%;/8?#l(E5,7xRyo2nQn}' );
define( 'NONCE_SALT',       'n)u!0N#MWfreCDTPa<%!y4=*ZWW8`]$J9}[~Zi.[5lb#q,n7~y0BolH&1<x/e`Og' );

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
