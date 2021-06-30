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
//define( 'DB_NAME', 'wp-eco');
define( 'DB_NAME', 'wp_eco');
/** MySQL database username */
define( 'DB_USER', 'userEco');

/** MySQL database password */
define( 'DB_PASSWORD', 'userEco2021');

/** MySQL hostname */
//define( 'DB_HOST', 'db-eco-test');
define( 'DB_HOST', '10.20.1.250');
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '');
define('WP_PROXY_HOST', '10.20.1.139');
define('WP_PROXY_PORT', '3128');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '816f6861f78e95a1a87b35f178f8cef291da4db5');
define( 'SECURE_AUTH_KEY',  'f83f4c2347c8efda9119fbbbe06df1eb17e16217');
define( 'LOGGED_IN_KEY',    'c9e9e537775058349514b539ce4219a2de8761fd');
define( 'NONCE_KEY',        '7a7d548f7c5ac8102aa1b79113d6283684204d0f');
define( 'AUTH_SALT',        '1dc1c136878cf2be76af614d3926156d930972ac');
define( 'SECURE_AUTH_SALT', '289eedb1a1eb1b828a63db314ac1044e9a4ffff7');
define( 'LOGGED_IN_SALT',   'e683c85bd8d400aab0762a87b6a24cc4ccec9d18');
define( 'NONCE_SALT',       '564f2e5f243daa15e34ce3e95e7df4bb729ec526');

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

// If we're behind a proxy server and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}


/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
