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
define( 'DB_NAME', 'wordpress_baza_1' );

/** MySQL database username */
define( 'DB_USER', 'bane_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '~`_56alexn&m0veO,B(/hc<Hnz4!XU%-m^26uMN!A6dg|q+9-f:o0&UGmR]WRUo*' );
define( 'SECURE_AUTH_KEY',  'G5Q4FZ:PU2)pSqs3Ce,F4P#Gh[1b+DTF{%iOj03.*N2TmZ5vDq^e0e zY1n(<*,1' );
define( 'LOGGED_IN_KEY',    'H5*:#XoKJohJ#zw?l_LA*>:0 <sW8-b37WCZ -Jv .hx%QH0zG6HBK}9eNBWV/23' );
define( 'NONCE_KEY',        'SLvU$h}g@G7M0dRdC~BIXX9c}5=8V`YY/5.&i*G~K:=aFUcY#4O2SwbGm;/E6kAp' );
define( 'AUTH_SALT',        '47>CGq3i#D1.IcobG *6= |g6V3 O{Y;fgCh?ds[SVnr[F6RdqalzkUn2C]1V0B(' );
define( 'SECURE_AUTH_SALT', 'IzPeUUzzg@}g)%8tv46h)I{C_9[YzL&c=BU4cy^+CMo00I*au--GIT}Kb[)0Ea,K' );
define( 'LOGGED_IN_SALT',   '7v=1K>SeF=DD`6D@@]!^@~[m5|eLtG)}0R$,ZdTNJ:L6G3kTv>y,^ENOOxgR=gxp' );
define( 'NONCE_SALT',       '9V@38^V~jl/`;RW=B_/6tceZ,5kp+2e0>Y7kWn._<KHb&5ni]?OoWrt9E[{nMJS ' );

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
