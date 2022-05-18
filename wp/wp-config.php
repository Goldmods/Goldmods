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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'agsroufi_wp891' );

/** Database username */
define( 'DB_USER', 'agsroufi_wp891' );

/** Database password */
define( 'DB_PASSWORD', '3dp@17S-z0' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'qtq4xh0csqhy0vgwibtdfn3pftvyixowqhndyg6ky8q8i27vnlbupsqu26nu64qy' );
define( 'SECURE_AUTH_KEY',  'gk9f733re1lpcfpm2tfafk6st8vb5pirfxsqwvwjghr0vuwmn5y58onkmnrbnaaa' );
define( 'LOGGED_IN_KEY',    'sgftfvw6g9rdudutzbxycirc5efh34vr7kcvlyjl0ebpxpix2cbcyummpzcrhbm1' );
define( 'NONCE_KEY',        'aaruobfbbxvr6spwwretrg0ylh3d10ahfxj4pyst9d8nolxlazjveo3fx7wu9pxc' );
define( 'AUTH_SALT',        'jddumvtfzx5lp6b47mc6ln29qsr7xh3wq2vm2swwi4fhg6mcpqffrxqqmasqhtj0' );
define( 'SECURE_AUTH_SALT', 'iqentofrlsjd3zspngzdfii7sqntnibiahm4sukkxukmkpgsnkisk7ewxwytnskw' );
define( 'LOGGED_IN_SALT',   '2rsxzdqa46vsim4arg6oppkx3itxsefpwl7jkysc7w6msgwlo83r86jehqxbogid' );
define( 'NONCE_SALT',       'uom2scog28wm4esmhiqqx6b7ot4hgsm6tqa5ymhcljptqe4tnq6j8z3ww3yhi2wu' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpet_';

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
