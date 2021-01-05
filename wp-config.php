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
define( 'DB_NAME', 'wpweb' );

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
define( 'AUTH_KEY',         'LuFX7R1~rB0b5|!|k$Uwz575hQazFYen_,7]fM*/TAA0W{lt+r*U@^#)*3QrIkUp' );
define( 'SECURE_AUTH_KEY',  'Fgp(p/zkDeT@N+->V64`l}c>i+I4Y7/.=g{n_PELS>}{Wqq@hq3R!v`>~TmSWt5S' );
define( 'LOGGED_IN_KEY',    'Pa2~[lQwo&@uO9Wa{_z(;ob3adPm@K6doHx@ACdThP4/;vP`CaOp_*DEfP#UurxO' );
define( 'NONCE_KEY',        ')LxFq8p_V(^@bNT>;:X:5g<@&za,}P]bxbh3Fo7vGAsS&HH6B>j#9%;<@Y<g$5sI' );
define( 'AUTH_SALT',        'vS4G&dB^ Jil0#NHc^i@^A.k;G?[saW|b9cAUa6]m[^lU Ry51(htLx,#;%1^?!M' );
define( 'SECURE_AUTH_SALT', 'Ad0D-&~9dPNdv*M69&94_u`b.&vNe6^IJA#;#ee#7!S-]ya2fb#vuQO4~iOOeS?i' );
define( 'LOGGED_IN_SALT',   'Qy0XP0s]YPb(b,Dl6*IR+X<vB(_){+(pG%#;,.v~M-rCrIm--]]BQ%0c?2Momea=' );
define( 'NONCE_SALT',       '%>OKkd*JX2,Px|JK]OPG}<|znJBjRh|Gz&O/{SyAoN;W^{z!=RG>pP*7$Xo+Cs^f' );

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
