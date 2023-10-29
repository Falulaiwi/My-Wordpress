<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'Fawaz' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{:9V`(!T|6w#W|<xu838vz$yp/il;1P/Wj+|QlrcdP#0jQOq>j*gr`2#y|PAI,TO' );
define( 'SECURE_AUTH_KEY',  '>6O=:l-H83aL=b`Klw5tKR<keeXABCyc;4d(R3W{f1IE?<E%$fEsw(-AF7k*?6zt' );
define( 'LOGGED_IN_KEY',    '{<)GWMd)}FbK6)= +B. MGK:Q<(p36sH]W8Kzk;_%:G#Qa|uNNZ_S 5/>R;^S@7i' );
define( 'NONCE_KEY',        '2&&VEqcvC1G$^UjmMEECQJSU7e215?!Gs:q,#k$<(4f6Y/0Sb@ObHJOzd$fn[j `' );
define( 'AUTH_SALT',        'wG8IfYnf%8:))6K8 w}4P:[S -yQ.niBj*:X|zRKP7N6C`!K=-vjO=YxqY,x0B2c' );
define( 'SECURE_AUTH_SALT', 'kq; CFv@&oj&gO6&4,|W{^%(>*5Gg2byba|=<Mk*!u{aO|OR8bmjFr=d!V;hO}.Q' );
define( 'LOGGED_IN_SALT',   '5Z_ogMuT;GNO=yoEhXI=pIVzv,hXI2V-k2{5S%jA?e-.~]+ph{[F)S4FmhKS`GYw' );
define( 'NONCE_SALT',       'qvX#XZRgWRW3Z>=#1M,6-,(~L#KS(+%Qt&v<{:N.E>sGV`{.^uf,!~Au;`GT0)+X' );

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
