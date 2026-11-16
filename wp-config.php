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
define( 'DB_NAME', 'TEAM-PORTFOLIO' );

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

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'Zi1GyMeQEMkW1xotoWHestKAoDrazWu2hAok49MFr1q51IYlWPILMiOKQKmetAGW' );
define( 'SECURE_AUTH_KEY',  'fY5Czw1oULEqIUrLYCS6Yb1c0BQ4oYueLZSDzApvyeTqcXLKCs0rJUrBg3DZ8O8b' );
define( 'LOGGED_IN_KEY',    'ktfwGLxWZ6p5NneMOxUE5F3ERsgUQNk86HVgWS2N8YCxnOMPwpINNR5GJLEzfcra' );
define( 'NONCE_KEY',        'sOMucDVI85ziE4fq7SvAk2FXKstlLPPJPTapH8QcF6QcYqF2meVDLan7rUhW5j0N' );
define( 'AUTH_SALT',        'uEhfwzMR67yLc6zc4Zrp0KwH83k4jekakDN1gw6fd8wajKWSouc4ZoCtpL4WPfIx' );
define( 'SECURE_AUTH_SALT', 'yk95e0uc7MWOvk8BrvVB7mYiFKYkjQvjfRC8eSvqLwIH5P5PmC8W9ZycD4rKhUET' );
define( 'LOGGED_IN_SALT',   'REHs9UVeyHsCZkxZqhPLeX9KyzRfX61htY6mmKuylL6Oa3eKPwdCAt1KONNRdmGh' );
define( 'NONCE_SALT',       'k7Zc3UAkhUWqjp9uG7vL7Vetg4E4QlRRKwzbtjqiVO4Ll5LhYGzGALT5dIfVAqEO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
