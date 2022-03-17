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
define( 'DB_NAME', 'PurpleBug' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'NE8w3MfjzianjQjQ2bFZ6UrCxGODsSG2JD6nX8svW82b3s4CkZMriMZmAcUA6zBN' );
define( 'SECURE_AUTH_KEY',  'B9ixOudfsIPAOkwhnr2obzlYpWdLkn0b9sMQ7TaQoeoR9X0NN8KkYRnUZbwL5k63' );
define( 'LOGGED_IN_KEY',    'dEq9bj9V2c9eHvkY3f4ApYIchoXptFCZ4ledT3ItQbC8JRZfDaQmaLDkVApdWJfu' );
define( 'NONCE_KEY',        'SZUNXLTNElQtlUnh0tE9MgFhjXtC6aKvoJU748tchunWJwHOo4zRi3A76pVrvRNA' );
define( 'AUTH_SALT',        'EEKJkP2wt7876bl75jraJ4ZM267avsyWn4o5OXZqJfd4pfVRVlTh4LiifYVQOTUc' );
define( 'SECURE_AUTH_SALT', 'vNCTTPGStQzv882MlnUj8s4QeB6rhnmxBQtzLC51b4CTlhLgfba8yz4y9PLBa6aG' );
define( 'LOGGED_IN_SALT',   'Pzg23S0adLvgW7YdU98Dz6nTL4ZPp8wiBpqieqShGSjI71SmIUwBPrtMtJir9oPX' );
define( 'NONCE_SALT',       'cZBiYeiT41fcjxoSoHqHjtSFELsmrh1vqXM5v84Nap4FGgKG4lb3U4fHhv4Qu0gv' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
