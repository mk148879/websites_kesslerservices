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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_rooft_db1' );

/** Database username */
define( 'DB_USER', 'wp_rooft_1' );

/** Database password */
define( 'DB_PASSWORD', 'tYhqCT2uwwgay7Xx' );

/** Database hostname */
define( 'DB_HOST', 'sql653.your-server.de' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Fc1NjflsgGecRxFz8q82wgurTPeAN4oQmA97.FmC0RJSHd5VmDwEIqUs8SB3GbGG' );
define( 'SECURE_AUTH_KEY',  '5z5JbgLA/DaffQPX7WfrUcLdd5XfRbA7ZVQNh4Z4ZIhk0vfI0SIbZ4wmLkTqCCUH' );
define( 'LOGGED_IN_KEY',    '1.wlOdqy9e0fzChYw8psO2XEhmPp/Osbo.GZpIAbLiZKWJvNCbmree5fQveNFfFm' );
define( 'NONCE_KEY',        '0YIlA8FmBWhRTDSOZbFpGq2mmzmpx9Z5dcYmxmquO2H6BxSTBvx7fRLGK.M4vviK' );
define( 'AUTH_SALT',        'pHwdWMcE5qhBpfWEJ9Y3HUZu68F7sIu5efU.xNBRKPl189fmEEkTn.dVcbP/semB' );
define( 'SECURE_AUTH_SALT', 'gAjUMSAYUl7MHlY.kwGMf0PgGwz1emnMnPaj9eIjYKNOLcWp9PhsiJxCPxBPWtg2' );
define( 'LOGGED_IN_SALT',   'jgw8v3eOfgzS644Do8mHU6dWCfaI3SFfcD9V/ZAiYB.sklec0S3x647V4qNFBkOJ' );
define( 'NONCE_SALT',       'tqXPROzNCrs/qXErNpqJh7TzOT6CHiWQr/awtam4AY1Lk.N67OdCpdWgBre3B4ZS' );

/**#@-*/

/**
 * WordPress database table prefix.
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
