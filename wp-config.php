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
define('AUTH_KEY',         'rJr5opAtgIX/lsN4IpgLQ1qvQL5+AHCTkH2A5OfJ1WGUU/Y9fOYcxFbQ0Izc044dYkPaVDnZZrmj3UEWKCgPvA==');
define('SECURE_AUTH_KEY',  'Z8Q/TMyV7DSwpZPv/9kWC0kKGCqWZ78Cth3skFLi99rEmlJ5vYmIVZwxEAZ/WLcHHIdxr4bs8XmWwlMUEimXAg==');
define('LOGGED_IN_KEY',    'mbgIjueDORa2u7D5jpeUZu1czDUwk58G16ObCKJkvFjnMEMIVHsMQyh1SncPoCdwoFKRuK2BhGBSm1p1EgAGOQ==');
define('NONCE_KEY',        'WC3Bhlc8jjhxkNy5pwYDoFG/g/3+uwHzDA4mkPgBS6yrMZegcb3Fwn5t4D0TVjvvL0qCCO3MbZozvJxh8RLNlg==');
define('AUTH_SALT',        'IXimVRyf+OBVwrC5pBIZVdNUKDgbp+DD+4+3WHXTInwWjrJIbXeJlxP1QJ3Ziu0KQDGJGHr6hxYYe9oqp8/iiQ==');
define('SECURE_AUTH_SALT', 'XQYgmCeCQAf2TyaEWV3p74yfAyY3qFx2lKPb0M9v8tmnHRkafTnKvKkf9FYQcjDZ5EIbjo/OxjBTRJEXTN4y2A==');
define('LOGGED_IN_SALT',   'jgthq/T1DZESQAm00hovL8TM5rVm4aov1wTczcAV0hU2/k7gKdi7VwvRhbd1YtXeLsNWh9fbOkccKxDeqOEIPA==');
define('NONCE_SALT',       '0nq20xFZshndxkd6SGmgowMFH7agfex2V+wY1Zvwdgz3/bWX1x3EmqnrrpTqM+VVZCW8AItGqc2jhlCQ37Nm6g==');

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
