<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

define( 'WP_CACHE', true );

define( 'ITSEC_ENCRYPTION_KEY', 'VzR1X3dxUHZKUDNhdDN3K0FJcWhNeSllcH5fRGx+Yn1PSEJxKGx3Q2QjQ2hNdk5hIEp0bFkkfGtBRkIzUVh3Ww==' );

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
define( 'DB_NAME', 'wp_rooft_db1' );

/** Database username */
define( 'DB_USER', 'wp_rooft_1' );

/** Database password */
define( 'DB_PASSWORD', 'fXJANhbmBpfaeb2P' );

/** Database hostname */
define( 'DB_HOST', 'sql719.your-server.de' );

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
define( 'AUTH_KEY',         'i0zEkpE.ohz.GCsLOIZKP0YOQGBYeDdPcPb2FECP8jWr5Xxt.GxbGJ.T5HauGmSb' );
define( 'SECURE_AUTH_KEY',  's.FjhviyEw2UHOc6ndXlScDdELvG01sQ.ZIB/wQcxrpdXSCVgDqgMP2dKn3mARM.' );
define( 'LOGGED_IN_KEY',    'e6ihraMpMU7oKhaLFOixHYFwvPSD/pWVzjefZx0IkQk/Az7QWiqYsvbOLQ9/1aQp' );
define( 'NONCE_KEY',        '3ziPhoeB8cGzOgYPkcUhy7Z32ay01iAyfUSJJEEvpJbFfp2sykRF.CbyYFp/oCIW' );
define( 'AUTH_SALT',        'pytbPtigndqVbRxELzwbx.jpKMNs1OzLkDpLUVd9hjxynX.nmj7FzXkmpe4ljqfQ' );
define( 'SECURE_AUTH_SALT', 'EadzvFgWeUOEiKad.fDTYYl0FXd9MuDUNR8aiTQ5CuLaet8Z6lHGNCSDg4cFjUar' );
define( 'LOGGED_IN_SALT',   'mAaEiZhM1Id4WMAeEup3WW7aJLboN94l5RFbThvQ7dMPhvSuTqOwbVDNLr5rJX8G' );
define( 'NONCE_SALT',       'arg2DStggy83u3yENbFo1AN8E3hMoSY4I8u1.4INcmSqlZuiUonNjGvCh1t4nrjG' );

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
