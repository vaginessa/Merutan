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
define('DB_NAME', 'i2925945_wp1');

/** MySQL database username */
define('DB_USER', 'i2925945_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'G.Si[@ND[]D(3*meHa@25&.1');

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
define('AUTH_KEY',         '468hp54M6vNkORroNSwzCDNKIvJUTAVYOeOq15PNO5YWWz8ARuwVWp04FaDdJGpo');
define('SECURE_AUTH_KEY',  'veO6OepDg5HxJXM0fKar4qzp4jzB8eGv1R1oli7IbbU3iyPKrldahpi0O0AZGUZZ');
define('LOGGED_IN_KEY',    'SWNGDGa5GEr5Z9KaWZahA0AvKy3GyqSjaPFalZwPZ62BnpPQwkumXXFYicGouxcd');
define('NONCE_KEY',        'xeexWipVyQd6ckC4Xu0HgjwbRHsNtJY4BKMMQflNWXAY7KFap2IXlJO16hYtX62p');
define('AUTH_SALT',        'b6KvckBOQIM7EL7J9trL6T1D2ktLome7fA213QPfiwnxTjZGkvUTkOEh417rYcMJ');
define('SECURE_AUTH_SALT', '3SY4jyqlM9FIL72sA9tiEsjvrDChFBnAGWWWscpWCJWWDs0hr6Mo2DJ14Scfyk6j');
define('LOGGED_IN_SALT',   '2griAh3NhlHOQLfkM6G7TpHG5lzta9GCrgDo7LJTvgmLsUzhcgZBirSv3sRla4Mu');
define('NONCE_SALT',       'jr0VzPwKMWTbMeRsOeZTi9I2GceILAYTjHPltanIneEVI1Po1GmGa06UVlChREnU');

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
