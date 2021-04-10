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
define( 'DB_NAME', 'sherlock-zoos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j}tKkr%a5GV(lj3>t53uRbK~~k.@FiG<sG/Cz%;|45:@()@AJg^_ZhfQVJ^z:2KB' );
define( 'SECURE_AUTH_KEY',  'Fl^*4#2p@dC}m<bI!ldO4`N1MX7v14*cfC/~!-`iIJGEL.>6~7OMsZB6MSt6i7iL' );
define( 'LOGGED_IN_KEY',    'P[<-4/1Rr0&CtcR*io[oAvSxyXqIG`|AV4+sm}R{3O%gH.+64:^Mn,99c=;^&FtW' );
define( 'NONCE_KEY',        'xKlcnLe3Me9sO(8ZfE+5t:]x.#tb0xxI`x2RVE4E+t?pjrteil.$( )[h)<J7mp<' );
define( 'AUTH_SALT',        'BC[}=bSS^f ]dM]`[|:Y`f),z-P~!Eh6}$oAKDJj8GzB|WM7mB#ERO&#o?mwlsoe' );
define( 'SECURE_AUTH_SALT', 'L5t(yxdT}z2+J| *2~f_5gZab00@d+P? Fursbek=P^A}QFg^c~C8O&)4(a:@%Ln' );
define( 'LOGGED_IN_SALT',   'Hk?>hra9V7q0:?~FHw{F* xV`!o6K`| X{&zp}Z_>&;}r C2k0T>WokH6.7|B]|W' );
define( 'NONCE_SALT',       'P%S{#aH=t5^M35R$5anSZheQUKlj?~OV?F+<:b|LqLqo8)1x5~7>{sowx+[5nDy/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
