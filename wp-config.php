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
define( 'DB_NAME', 'wordproject' );

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
define( 'AUTH_KEY',         '&|:fEHtB3rPKurR1THIlU4R]Do`UeqKUfh!&NEH.;VPv$e%(6HU<:Qcxe@-t@py6' );
define( 'SECURE_AUTH_KEY',  '6WRLc?]<vS1=P<2%.SeeOif;7YuVmYI%.{o@F#yOUzIq<S:b5-.%f=H,{MFXp|l0' );
define( 'LOGGED_IN_KEY',    '%k[J9G,/G$m33EOh i7}bPq[(5<;iZMW~Cy*s??XBGn|D2O{[@9a*_+^&(/l_[Gf' );
define( 'NONCE_KEY',        '!p50puWF<rpf/60Y GY_ *IRgB6G5t1KPk`s 1 a<9wd+JXq%iH)JS[.P2g; 0C-' );
define( 'AUTH_SALT',        'I[BAjTbNCu4]qj0d~7C-3ov%n{On~z ^_[`h8azj#{_@=11sZ1^)/8,xL#z8:yo5' );
define( 'SECURE_AUTH_SALT', '0NaSG=I0BaU)GKS{-K~HkPvwE{-~H#-be1xLH!YE@-PfGJ&q3>5g]uj}<cQJ-r6H' );
define( 'LOGGED_IN_SALT',   ';*AiqVudj&GJ6HNkpetgPtR7:QB_q>PTqp:rZ,V$$nfR$hqmv4I)I0JThnQtP#Yf' );
define( 'NONCE_SALT',       '{HNVrh~d2zfs9E/O1%=v.7Q32eJ)V{G/%d2Ku,:_zjQ[05P+lcQo<$^{;8#Tx:~~' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
