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
define('DB_NAME', 'test');

/** MySQL database username */
define('DB_USER', 'localhost');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'VDPHX39O6FNyWSSpS0QeAxHPgSu8WW9puh1DggwIXrgp8HCizzZaTeRa6Fbd9fJq');
define('SECURE_AUTH_KEY',  'Xc7SM30BfQt4NFe6nDjNLpV1wZlxqjw7Gq5aSjxMBYI1p0YLktTM1OEWe9eZnAT4');
define('LOGGED_IN_KEY',    'jpzpzb2rfZv4Tmv6C0ls4dWRvjDsh48wn23w0hhsGn8jJUWRh13sgGOwk3n9uGzi');
define('NONCE_KEY',        'KDWnpy26CKoq43WHaybxBggTeQ3E78dNzjlCiUJUuLWQSIkD8vpZsE529DWOVBhJ');
define('AUTH_SALT',        'zfX0pdHkQQKb5BGlGDqfdHMXiBJzLpsA6gEt1FUeY8D2hTsKqUTKDvNjns71KmPo');
define('SECURE_AUTH_SALT', 'hm5sRcqSQQW4we1TWAf1OtaxUTMN3klJhefqnQVj1zTWiHwExIU2Qlr3eGiCQcKc');
define('LOGGED_IN_SALT',   '0HciP8OazGSTbjK2sKsdnwwhVpJqMjJ5o1YOQqhBSuUv7xgFAYVFHc20HvrvomgA');
define('NONCE_SALT',       'o0TSmwASc1xvSHzBURvh5CKhkMZjqiswz0QleTVqGf7SV83uEQU4FLt7Vddn8hGP');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
