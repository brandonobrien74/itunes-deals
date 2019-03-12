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
define('AUTH_KEY',         'xYucJ+3ZsqaJAXTH3YvJGPspqdxtyz5J5566alK+oAvcmw0KeIaK5XpATlxN5QOa+uSWcdhsUBxFsaXjkPMFxQ==');
define('SECURE_AUTH_KEY',  '/JTAoC+J61D60GA/fxpeuCWgpZxixYM9BWLspYO7DtMy6Apop2BR8WRKjBgEYFuu2+sRdJZou6RR68rwcwOtqQ==');
define('LOGGED_IN_KEY',    'P2ug/TwjXGY2KQXqgcC1Je2kCoqjw+RgOIwfdd7MpyBfWsah+AefQfg8h0ZlyZ2IvOtOBeI/JupK/9aR8EMvrw==');
define('NONCE_KEY',        '12BO/aoBrm9ztC915VZHg2ZEiMvFa9gKN6N6OrN4HbOZweIMG7X7n/gzfbRb9cPDVXeH9dZdkEfyKivLli33nA==');
define('AUTH_SALT',        'UjQTksOg5SG0LFsdjyJrbKlkAHKkM5Ocl+mJxMAxrJpw9U1rg8e83nc3RNxmQnfHKEyCTQ3UgvGG55rQ5ZWfjA==');
define('SECURE_AUTH_SALT', 'U/l2mUduvHFQR75OQO3MoMiSdOlrpQRGpSaBzxVlGLr119SaMqEcM99en1dmMHD1VIuQlRnt1m2shLtU4/jX4A==');
define('LOGGED_IN_SALT',   'uh5CM3ejfuU8pZTSj4XCwA+dxLyiYurHAxZEgJ8ptQ/cKlth5h8nWk3Y3kZvEQWXbM6woiD9GieNHxuDEsTXjA==');
define('NONCE_SALT',       'g2WT9u4LHaW/3TaBMbNCM4/xzUYEhsMFoDEtyy0YZ02a8yXZNXUjn0GRK3WPf6/oGlHNU5EYTWYlLucaM+8EIQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ge8s4zdg52_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
