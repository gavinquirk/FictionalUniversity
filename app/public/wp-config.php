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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '4tsnVvsHMIS/kawHAE1FKXES/JJnGEAWx5T7AwCSCXSSr99g4CmtPclHLvjpK90N4bSTtsH4+c1VK8n1c+oelw==');
define('SECURE_AUTH_KEY',  'cWX8/mhhpZaFRijs9vCv4cCBtF86r2LpbECbOObD+e4egdCXCwIA5n1D6oqXr2zCYV5Z2LORrUUk9bK3J0VxdA==');
define('LOGGED_IN_KEY',    '+ezHDXOWhbADLNj60CBbm9cZ+nim2h+tO62cDS0BBCcqLdTYbDr1MbR28PBuWqGcknN6C/D93jNGUH0bdVQtwQ==');
define('NONCE_KEY',        'b8mj4F9yCLJXJKp2ymfpICA1cGw/Dplf1gL1TqRGgxC7hCkla/Mq3JW9jWp57Uk2dH1TQcrSviwfyGXv2t80gQ==');
define('AUTH_SALT',        'ZBjcaUyf7QFCXUa4/rob1gDQdhrERSDy0tLWyFFIuBah7iyZlfPy9jduUTEsIbUm+yjzx4CwWTjYIWn/XLDAaQ==');
define('SECURE_AUTH_SALT', '8wMDViQJwNihrieK/8sDeDqGYyU9pj8/7kfYYhjF4Diu5h7jHkMZXty6p9MIuAgToVeIOaX4otGChClSYVvXkA==');
define('LOGGED_IN_SALT',   'Uu24pXi603dzFmuYspi4qENmAi/Fo7zdPwwj2WGTJe9DX/b+sSClx4Hv2ztf3DpnZOC5+UswabeE+EEFjsGDVA==');
define('NONCE_SALT',       'L8lTjcK4BYipCjDFd4J7VplONS9cEn6gj5e3mQV4uQtLIZPF0LXpZkbyy6muvNOkTgjU6FRdaun6+braVCK13g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
