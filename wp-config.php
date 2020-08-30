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
define('DB_NAME', 'i2830174_wp1');

/** MySQL database username */
define('DB_USER', 'i2830174_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'V(dnDp@g]nRR9*plCI#29((2');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zjh4ilytxgzi8PiX9Mr86QBkIK9ikmDVJN6XFB5PsN42gtTxJIpviLADw6ijiROy');
define('SECURE_AUTH_KEY',  'hbdbJKK4vY7T2mOAyT4K63pbLyWxS4E5vjbPqDAgxL8krYJ91i2ltTXMaFDoDnRF');
define('LOGGED_IN_KEY',    'YQNwuBILG2o7a8iZDAxuXeHr81aGKwYp9jxYP9MU5GEke6WK5bDc5S9IRL2TM9gu');
define('NONCE_KEY',        'g7zhXF0YQghRKf0d0qALawcqtcoG3M9QjfzXMG0ZPrDxhFLFd4l6M84HnyjY9QFM');
define('AUTH_SALT',        '4foEP2bJAtt1MX7RT3goEBYopkB1yiFTfEVMwEloTxDbVirhEz2SM7TgzAR4KAuB');
define('SECURE_AUTH_SALT', '9hSyM3zcOtNX17TUQcJ5bO8jbO7EAjoFyvma6uqeOd8KWRFogYqs2tyYYxPEkabP');
define('LOGGED_IN_SALT',   'hnDtCClPLiuSDzkWwAaEcMUj8zxpUl4Lw9nBKw0A8khWHDzuYbIVFMUPDKkbMuQN');
define('NONCE_SALT',       'nU0yIzS8f2hDHTVDHC3iz3D3OLHtNwn7JpPFYPpxyUcqL53geHj7B84D4Ive6SrA');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
