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
define( 'DB_NAME', 'BDM' );

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
define( 'AUTH_KEY',         'miUpM8e62h9|swPq$<GMgV}}:Tn%4lV;Ej@g1_0HKuDHL1~{j{24*/|mH/}tm{-M' );
define( 'SECURE_AUTH_KEY',  'V~E,x`z9cz0CdQ}%qJ;=r6ZufqOM1Am611n%k>R-`YGj~#(oM8iC8_(R~;%U#j=/' );
define( 'LOGGED_IN_KEY',    '0Z*zI1sX+W+U5RzO9<*jTFNn2S@@bhEIDG0@_IV+?=>Ef_=1Eh*=Lkf-}2EyV_#8' );
define( 'NONCE_KEY',        '6u#_p`,>;wPIEMA9:p*?]ADoMj;b5mor{p.!iGvPh|]60u55r~`*yNPI^`Bi? rH' );
define( 'AUTH_SALT',        'KsA;LQu,q/c=,EYNKeAf>lCA!B}@YO4C9x{TC_vcN}$`l?m.lYt$;sjmjc^|`5e/' );
define( 'SECURE_AUTH_SALT', 'U=:0zjex2W2pJ7GEJ,(IXt39YHw/3VndTR#_1lS2Cd_W?tEZ=v$dSpDylw1w~XFh' );
define( 'LOGGED_IN_SALT',   '9t-CEEF:8L78Y=NhLRMrT:AGMp<w0=5@}Ep|,Zbb=;1(f0$t:f{@h+{~zoiT|f50' );
define( 'NONCE_SALT',       'b+LEMj1H[#& ^S(ox>l)o)S r:|f(uNmc|dk<>KSMG:1N`;QlZtQ=}7-u66fC3M]' );

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
