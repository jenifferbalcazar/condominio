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
define('AUTH_KEY',         '8Mw7q9eLYzs3SLSZzOGbMKwaO4/hJupEpJXJ3AOuq9Rtx4Osj4KaYEkKzWy56wPotzkhPr8eTvqEyUxiv7Gefw==');
define('SECURE_AUTH_KEY',  'LibzjESLaZxhVE1xJfmc7+50saTLte9yXA80zaLhsPK7cIJ//q8jF+B9QkENKwIblPle4C7zi1mCwSL4lrLcxQ==');
define('LOGGED_IN_KEY',    '4Ld4qh2BDoQRql4UoiT5cQLwAKXlp2KzWftn2siXkDc5tuyGyo9PvQ1luO7J9FroeuKXzn4l0bJo6szDuy5fDw==');
define('NONCE_KEY',        '7iQDtuwVhwXk5WALT/LkwsxQRFkW+Zpz6HIZ/5stYI7vMKKSoDrpE7YH7hIF4FP5ozuVGkLMFvjvVvrJvUAKqg==');
define('AUTH_SALT',        '8krUGtSle8Lq6aNu7PREaKoSpS/vtiKD6tEkY8m/MhnHzhVQWfS3Ik7H0Tk6aeE7M4c/SHYPgMe0CnzkwBBl+A==');
define('SECURE_AUTH_SALT', 'cRzOjko6eNvEboGElKsLhNefVjG1Y8wYK6hBrg97pBfRMkIEVIbUq0C+5ydccPontH26f8r33oqvJd916ndJPQ==');
define('LOGGED_IN_SALT',   'i+zkcIxIrm+V179WvoG7XvR1zeZ7tYE+ZqrWecOzgmANdVstGWr/Zinu8p9bm8rSpHXgneygkgLBx4Z2QtNiNQ==');
define('NONCE_SALT',       'pSdUqVOzHfPURSN6yG/+zrJyvsUfNgRCXC39ZfCxOPnFf9n3ymRLkd0TdHOFINBpq5yy9Dk5yNTKReKHo5iJRw==');

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
