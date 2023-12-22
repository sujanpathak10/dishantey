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
define( 'DB_NAME', 'dishanteyy' );

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
define( 'AUTH_KEY',         'FBrY+[{{tCn1$s`a,>09J}H=wg0V9H{}Nw[VQ-B{fk#hICs;#~k:>B]js1?b3T|R' );
define( 'SECURE_AUTH_KEY',  'jem1]y1ZeV?&EYn(;V%@<sW2O%N#gJ{*eTBJKdby?Y#<=E_uIFU_e[`n~PBf$G#?' );
define( 'LOGGED_IN_KEY',    '731.E?D9.}5`{$GN?;sd6)CwG~2pQtk]XL64]/=*(^Q%|7/)q|8ts^Zku6Thh0*X' );
define( 'NONCE_KEY',        'hhh#q=m8;bmnpji;>(GSGz6F4Y;]BL`83 _{K,[ZO8qT=,HDG}r yDrH!G3w0MHl' );
define( 'AUTH_SALT',        'fseC%>EGlBKw`hLaOXAEIv>CghRbnp]Y WV]8x1%UsmJE{F>A( :G)=Pmf5!KK/=' );
define( 'SECURE_AUTH_SALT', 'Q1%J?{Iv1lTN tdOiS1t?7LUH:^wy.ByDfM-}|qst<g<`cSiUd8)Q{:%1XN19N&D' );
define( 'LOGGED_IN_SALT',   'NL+{~:RmAU=]4{t_5pS8w>aS)i7V?s.IJ?K;bM|1S7`8[?K**M+&]D_zgh4^Es<,' );
define( 'NONCE_SALT',       'BY]/?nf5|4/(,}9R$77NA]J1At|:qdW~1KmAi.]Ob0d5AoI[v`4*N|rZ220q5NNj' );

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
