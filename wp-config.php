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
define( 'DB_NAME', 'limpezadb' );

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
define( 'AUTH_KEY',         'E%rD-JPqUm>:mPB-Y_VG.jT1a#)$yyuut`(<0mF~L)!;kvD65SlDoK76Eb+1F&%s' );
define( 'SECURE_AUTH_KEY',  '(H7nrI2~T<hXl!Cy.< H[8r~EwtD @ck6&-dH?as6uLi>(>w<g:Hbx*N/>fevLR5' );
define( 'LOGGED_IN_KEY',    '#fC]yt?<O|oFjC)e#p@Ad~|B5!X,1Mh3Y[M(?<}+[H8qZ =HG{B[C&Fp`sfH~^SG' );
define( 'NONCE_KEY',        '-4*u]w.wvQl|=dpZ 62o|Sak79au~T/aIpLW|>Bp%6o+6>XIYN fCMh1M6wS(60w' );
define( 'AUTH_SALT',        ']5d}IN9AoU_%l]3~GLCV3)]9UA`U:O*24da-kgzVNS>YxsZ MZGkxy5G4]_tl,N0' );
define( 'SECURE_AUTH_SALT', '9VV% a]1g8-+3[,z1``}L`HnhR15&N)/gVYnZ:r|d5&yWbd_N/vkD&#wfDIHs5N$' );
define( 'LOGGED_IN_SALT',   'Lw5B]h8T5)YZdfe`{X8aHb}aOZGm0rA~^!`aj:jnH5?*#7EO)^xD.;H}{F4Ub)q!' );
define( 'NONCE_SALT',       'OZCOr3.x{sHv]WLNR#N:YriS7n_A^aMmjn*-uYfzcvyXbX0S+`TXwT]@*;,S*WM0' );

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
