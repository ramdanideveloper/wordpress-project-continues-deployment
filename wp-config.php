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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpramdani' );

/** Database username */
define( 'DB_USER', 'ramdaniusr' );

/** Database password */
define( 'DB_PASSWORD', '%$$g9nA0IG' );

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
define( 'AUTH_KEY',         'u6nccd88dlrjqihspzgotatzxbtwhih8r9hxct3nvmfnrbesphr22k6em6ldtl3u' );
define( 'SECURE_AUTH_KEY',  'jtps66mw5xq6zdkf23j9lmf3lwxbedsunf35txgtsjlp2objafdykpouzstutqnk' );
define( 'LOGGED_IN_KEY',    'wsturz1crf9ecdtk1icz2kjngfeiilv1ybz5qfo8sgbnnp1waooy6bthefpigblh' );
define( 'NONCE_KEY',        'zgwkv1uveiuzzzj7o0trczejluup8fdqxr8p0uqxuc1mlmmjfaqzw9t3l2o58pki' );
define( 'AUTH_SALT',        '4rqsjxje6viaxlcs7paucihkzpjywgv9pcs13t2m0ee5kc1mq8qtvp6saziqw0uo' );
define( 'SECURE_AUTH_SALT', 'j3ze928nwxsjockf8lzmhbgearbbgjyq3te4biqhml9anhmijbq0xqbqbn9ymmub' );
define( 'LOGGED_IN_SALT',   'k2zeuyzhgmesjoy7fvtznlzimdmrbg3loqgbs4pzeg1fgvikfgdm1sno5yq3dy8u' );
define( 'NONCE_SALT',       'nq3hkcyfw2woux850qvi1zow9o9kqxb5lwn9rgqzkpidjjotebjwbyw7diurs1wf' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprm_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
