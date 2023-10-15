<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'BBguoyS3ezgKACA95argwW7eq1mWr8743c28qsRKn2ro7i0yDK0x4qmMQYWsTIVa8rHGsj+xXbvyHbVG5ByJsg==');
define('SECURE_AUTH_KEY',  'DLka7d7YMUrNr2dk5LfhBpKVmuQI/Ol+39PTtrBBzOZsINYq6gJIwyXptLXAWr0dmV0oXNhEEAM/I+3cM7xoag==');
define('LOGGED_IN_KEY',    '8Z0o51q+m9ry4+xTD3jydPITJu/tyWN+/PTl/HiaU2tt9IzLN3Ys4t7Ps2qBT8SNFOJUUVWDkkxdXKP3lIWhrA==');
define('NONCE_KEY',        'rg7Cn+3gaqp2D0Xb2QnsvqO89YREoVkGOTICi2nZPNZSKR+LAtqzRR8gFm5ZixpfJbSNMQBC8UJOdubUCZN78Q==');
define('AUTH_SALT',        'h0BJ1EgVrEJAVQidW4gxKXoFbLGU6c8Hrj0OWKzfJw2YNgXnBcwdZgKqeD7I72wq9BcBUL0PbfL4znAqSMdRvA==');
define('SECURE_AUTH_SALT', 'MoDA2k8XwVe4zK9jqJ1sbi/byRJn8f87YnvFlPkIYWODYLUTIj59M5DCrrSAW+wbdf14OnLpLO9GTChCc8Zpzw==');
define('LOGGED_IN_SALT',   '39MHnSxE76BBzBBGCeM0A9QSppSW+WnxvMcKrqRIllB/+XwXnrVp+xhWFsFQfZXhZZ3uOuPwIASu7YNmkRe48A==');
define('NONCE_SALT',       'puQXoPEucjIKiWRGs9tLiOWykByRIN+DQe47v4J/ddO1Ato430PTIc/inKfCjPbfwk8aoznyYt1j25hdcQ3t+g==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
