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
define( 'DB_NAME', 'wpv5.7demo' );

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
define( 'AUTH_KEY',         'a7Fg1U.I#w>~XMtI45+nI&+T:-rH;%~L612!OqnOM bmk63NL{[?TGD7^KiV&`s!' );
define( 'SECURE_AUTH_KEY',  '7LzMM&3,!3P,EfcAb}(}:j`Veu3j&:5xA-T]Nl(UH!P)]}QK@G k|F[f#k-cS?1_' );
define( 'LOGGED_IN_KEY',    '@+yl:4pUoZ`Ow$,o%jBTxuDEARIbs i9lTgR`PXE=}CPLTdelMf]5MCc|n#hcRv^' );
define( 'NONCE_KEY',        'nuad{Y,/s-oh5@dym}4p{G|gsV(1K[w.):4;7XBk^*fH&aC|~#vbTabk_N9GWUV[' );
define( 'AUTH_SALT',        'hqZ}b<k#d35R)+ZtS.UMb-5ed4)nJ]ODdn`r^[fO5A#zehY_2:i$b?;.W,lbj;*v' );
define( 'SECURE_AUTH_SALT', 'H3H!MjJ90a4t?$/HCk<9.<S)pmh`8mYJ)e4v,}/1mZ{!f{7KV9h,F`@#!8%.Ac0C' );
define( 'LOGGED_IN_SALT',   '[gdlZR`nj@)X+%gC>LSy[(h8AwX~rn Ka?)]l4kWc|qfEkQ2x6wR65L]4uA9Pqf|' );
define( 'NONCE_SALT',       'UkJ:lX_+s!mwXzZS,X$G`j2JH,XE~0-kEc%1+$1`%2W@^Dv3hU&PbD9N{Rh1%;YW' );

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
