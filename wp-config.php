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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Social' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin123' );

/** Database hostname */
define( 'DB_HOST', 'database-1.cwkkmddtlm1h.us-east-1.rds.amazonaws.com' );

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
define('AUTH_KEY',         '[sg$A(Is|VB;f.bCX|]LkQ*W`q-hojxodG8#2TL=IxL@FNwU+D%s7J*lY0N&/(V9');
define('SECURE_AUTH_KEY',  'F%%v#yv8G,B!Ytq21@6QYF_;V:OM`1X#ilG%y/uA>K<n{oQg|cakIq;Hn9ZEqTBI');
define('LOGGED_IN_KEY',    'de@Ww`BZdmmcP&eXB;udwJ9&Qs4OtO2`N|Ov/HAc-vCL+IE)Z`UakHQ]x?F@f76?');
define('NONCE_KEY',        '~W,+2;[-G7)F(Ll$B/&>`8Z_n1,%J}qej(iy3>)gSZ>H vKg|Oxv{E|%~:{tM5/j');
define('AUTH_SALT',        'A$%G,>tGX46CLr !z98 # :l%:6KJwojpBC^;udIa@W[oHb*HV[2-;lOe=TUjIjS');
define('SECURE_AUTH_SALT', '/aJzo9HtFf-9&r27bkZ{]S3/n|^b4!2:>4UY5.3PL$45?3{-%LlAp:6Qaf00iKUC');
define('LOGGED_IN_SALT',   '$oEkt`J`Rj0Hzh1[kuna%r-z8tte|-t.z^?utf8|P,7gC]goDZ+EfE#-Oat#Cru&');
define('NONCE_SALT',       '8X~6fNO{IvzKeRp<:f+5a,~f .|#Fc02O^Z1NQ0IdCx(YYqrbzY0ryWWG5[ sSWK');

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
