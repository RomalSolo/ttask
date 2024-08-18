<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ttask' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'E;(zbu5<6G=<}bFC_J2}DK7xg^]m~vTf+%CoQ8]FUR$2G~yy~5fw+5?uL[:*o%CH' );
define( 'SECURE_AUTH_KEY',  'IYJ,sndn!!1SDCu?:r<+)O*YLS^Gug8Ix0Yw<m$P_^,wshz,Yu3s5!@KZF}QY;gE' );
define( 'LOGGED_IN_KEY',    'Z{~Hmk%h;,}+fNrd]_l*M+2XpA;*|[&iGXsEM=oJ@;Jc]Y@O=DN[?~<FrE1k%B{r' );
define( 'NONCE_KEY',        'Bf>QIg9@aQkefM|I7zDDNQPN^u]BJWFk#N~4$6yxTn4h?`81+gM8Os{mZ(@G<Q|U' );
define( 'AUTH_SALT',        '%UBR>CO@P0`_DQdWVzp275!d:cE74.&>h=iTn]kp3{0zjAT1AHWKF}:cu#JA?:!F' );
define( 'SECURE_AUTH_SALT', 'Q:/qL +n,Z-omHDjMw25}gl!R*sTiV$Y]<AAR)P;R 6J/{1qY]{kBNLD:OX{:HoL' );
define( 'LOGGED_IN_SALT',   'f4)N[};eC4j)~gRnyUlIgsby%(=dx%.P9o-EEX69#{@z_4|B}CgO1.R|vw`@lI$7' );
define( 'NONCE_SALT',       ')#1 ]F@#|&t8>c&tdEZYrB4i:moNUIvgPS[z,q*]l,wLHHDLpAg{b,k[NF*r3f$R' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
