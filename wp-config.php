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
define( 'DB_NAME', '5432/d5g4n0voh43e48' );

/** MySQL database username */
define( 'DB_USER', 'clmxjednwqgfmc' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b227a18332afd8a29381fd848cc3709762f38c6138e14d3deb42694c4762de5d' );

/** MySQL hostname */
define( 'DB_HOST', 'ec2-35-174-118-71.compute-1.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'jy6HJvyItMWtt6LUB7M17i7H9M4qSGP7Mob2NELCLhtebemob9Hfihg2qbaH3Pqm' );
define( 'SECURE_AUTH_KEY',  '1tyHH04uHASD9IpGgOr74gQB3kfStOqnBWE1DXANB862h30fUMQfdV5Q8Cq08lbB' );
define( 'LOGGED_IN_KEY',    'wR31vcwfTsT0w3bKO459r2cXBHMjPfE7J3nnrA5olnV8xMCy10lbtNIdtD9A7pgY' );
define( 'NONCE_KEY',        'r3XevFWKMR2qWcZVcAUYJ0dslQsi6jyferKsop5y8hvDetvqizhiAnka2gUh2Rnv' );
define( 'AUTH_SALT',        'DGX67XW99bF4hkUJEMI9l9xEzdatrcsVrdWbTHNNUpNiE3gn2C4HUe8kMNf77OXH' );
define( 'SECURE_AUTH_SALT', '0CnEFIoD34fDkE0LC441qRJotWGrj84QMQb4mnsfJ7hFggMv8aiQmHN2ZDNO41pa' );
define( 'LOGGED_IN_SALT',   'pV4E4i6swFGsddxOY4YUkBej3AWMypiYOANOExzJwWBtwmhHJVmbvhYSe3ndwqLC' );
define( 'NONCE_SALT',       'H0VemVAWsXFZa26pBvQRK9ZQs7XLgSVeHTE8ELf5u1NoSaKFhTApUpTMrweYBOeU' );

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
