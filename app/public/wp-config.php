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
define('AUTH_KEY',         'yYUQS6c8rfo7zmmDfL7bNcDj/X4JkZOfTtl+caqPU0Q1fkavG0e6opC4iXlJHVS3VTGktWp3lskISgz06P4ONw==');
define('SECURE_AUTH_KEY',  'ueVq77DBftIu5RYQEScVe/s6jki37y1rEK5xOa/3HX7M2LHdsiF+uQ9319/gT8Cb1b2oXMeYGrDaJYwz5MHT0w==');
define('LOGGED_IN_KEY',    '4FemAHIssjYQAfKSwCrFG8NEjSGkRQXz0mplLvkVwpsg6DtR8IyP2rw/g1Hby5c9LCvOja0s9DYbJpUp9yrt4A==');
define('NONCE_KEY',        '72lMyBEh54RMfe2stHCNZlsJsxZFEUkh5bwJfX53tza0+9VR7xY356+s+T0XOfaS9eBjRmMXB09YAb/YUsBtcw==');
define('AUTH_SALT',        'a5cIg37KG2xeLUgjPxCVx7QuiUWT22u9oHjIrJF7vFIdwptLOEcdTuWurVS/YywgXDR3qV58jsdxEXKsRK1FAQ==');
define('SECURE_AUTH_SALT', 'ilvoEQh1jLfaVHWxUqPV7mVHmSmLi2S134gt4gyGQxM0Ew+iB6w6dH+zHtUxcoYV/oU9ErvM0WbKgg6vRfs+nQ==');
define('LOGGED_IN_SALT',   'ex9JgEGfG1vSwTVPKFVwYFHcwLrX5Fs6wGyrW2dghv8DoVN40E6i4hh8WroqKKv2dBp4E4AjBAOHGitrV+8P/w==');
define('NONCE_SALT',       '8zsnJUo1tKjPNRGf3l1iQKkYfgdAM/1PFNPzYJBrLtFQXnJhd3ERLfgL1KNHGPmVu8H3sf8YNWwrfNU10uidgg==');

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
