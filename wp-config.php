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

// ** MySQL settings - You can get this info from your web host ** //
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
define('AUTH_KEY',         'njmExqogwj0b2H55TSUydyD6g5ai92I6ov/rFMt0zqowpY90bXV7I6faoR4Hy6zbLDOBNvTBoP+DxmQWkl2EBw==');
define('SECURE_AUTH_KEY',  'hFzCdtMFlakpSBYbhbwQdAz4VrHGWiG9pThExgd0PdOVgXoYQLWJ2PMkdkK/Dn2VO4ayJgYFyWWCqOuLQ8IIXA==');
define('LOGGED_IN_KEY',    'fLQkYgGfuQY9gP4j/3x9j70bGw7/kHjUspLWIAViMldPbJtU/czNcCFjJjyoYBgHnhBgZJSdT+UjvkO2nPC5oA==');
define('NONCE_KEY',        '0EFUw0Uc0cYFTIt8URr/SqV8hlc7iuZ1RWyK56KN9LeV/mSACdvZLFV8TOBc9fYvmzwQ9WmlH6Js6b6ha5VR7Q==');
define('AUTH_SALT',        '4Sn+TnRSTDutxu8QE/6GXhrpWkqRB9UXq761U64yoHkmc3/UdlXcUGDud3X1/mE97O9DaSyXqCtBFnoWJheP8g==');
define('SECURE_AUTH_SALT', '1wDH+wfQl4IZ62KK5mvcDDs7JmcZ5kltjoZTE6xOrb6rAif668ny53Ro1AE+5y698FvzKt5+Q39k/xM/ERNn1w==');
define('LOGGED_IN_SALT',   'Bge8hfdPu1V8atD2FM0cOl2osMBDnWdJT6d825QKdKlk/fD9C5f+NsRnYpPm5GprRUmRkeeOXjTDx5xYLyRrgA==');
define('NONCE_SALT',       'EcjVSaIL8zL8mtxNiyc9/EpMF9rH1t7iIdtPqoVyyBWt+wCO16oZbYAAM3ejHMW1Nx2QGYrBuy41y+JUL8BEYA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
