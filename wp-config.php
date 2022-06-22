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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bdm' );

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
define( 'AUTH_KEY',         'G,<7f]jc3F# USX^R$MO&a]N}p],|qpZqWr+/ERn_G8<Dk2d.^h6qhkBFC6>RCgi' );
define( 'SECURE_AUTH_KEY',  '%4u|RhH-FS,2Un>o8fHv!mz1OJ0rH*>;jT06h_;N!`&{(y# ,%},swd+?tIVb@7F' );
define( 'LOGGED_IN_KEY',    'xu[WfO31Gqs*/cC(W|%zj%4$4uZDBh1iMvD^@y1TAz;R$L~%L@S@9-yWZmsalC3q' );
define( 'NONCE_KEY',        'p_Kltz ; Hfp7>n8r:L8},eK4=nzGhxM,89vsZ:MfUrI,?5rB4mkNh!Za[,9hieh' );
define( 'AUTH_SALT',        'Cv_%_ <q-rD#Cl@*kfE{#TN9X|,QGXa%CkJD;PCB/=[<C9^Vw/C9_RKf;VKLcKQ*' );
define( 'SECURE_AUTH_SALT', 'bX<i{OYat.zw[KdPhgcv-SQ`ZG OYT]~G8B)VS|KeI&%LYa%pn/($>bq){61,o{>' );
define( 'LOGGED_IN_SALT',   '9kIEwNX$sFWPy:f%>`SU[g-uS(yR<NJu#vgRb]0(36bRMjns)}yCd9@SW;YZAMoZ' );
define( 'NONCE_SALT',       'Z#=j2!z>o7Z:LJ7E+|m]^0^De.<q&#4_2/H<_@].IBfcX;|TqKU=Y79ilQ}]@s_h' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
