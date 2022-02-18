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
define( 'DB_NAME', 'nallapro_nallasarc' );

/** Database username */
define( 'DB_USER', 'nallapro_nallaarcuser' );

/** Database password */
define( 'DB_PASSWORD', '1El5Uw%nq]IF' );

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
define( 'AUTH_KEY',         'nY_~Q6w)2U0`6Yfa?[ZJ!?py63K>|/O,=.S$?ia[{{:25p@Y&z!18MU4#1]*CR@R' );
define( 'SECURE_AUTH_KEY',  'h2[p>DZ}]jkB%SD9.i)~(Fzv/SBGzednql4QXI,qJ^Kvuic%R?]xX@wxe[NgdSg6' );
define( 'LOGGED_IN_KEY',    'kwj: T1@$&4.O/Kn7IcD%yxtPK{! /]&[om`>RL$j-pN}&C6k23wmE][LhkvARlS' );
define( 'NONCE_KEY',        ')pX],p,:;K@R;wKR)%i`eS(=N2C*mk}m]u?a?dp3PqB!$T%+2Z5x$*e:?%h]^PKl' );
define( 'AUTH_SALT',        '@`C;OQ~cu{o,a~3_AluB/1w_E&^b2*4q&uI,%K~%yEA(d SaE[TV*^76c1j[~8D]' );
define( 'SECURE_AUTH_SALT', '6!&4@6,~}_Kv@oHp*.4O,aBGX6c[@IYh=86Z.U({pav[<$K;&5X6|Fi(hCab$]d:' );
define( 'LOGGED_IN_SALT',   'xRq =D;Y3l`gzF.lXNtc!g(+L0^5 cEq-r=XDr8_o=,RM9?N9x%dk_`m`0w`Mlz`' );
define( 'NONCE_SALT',       '0@w&>y  *},aIQ&:Avz{l^d1Ynq:p~^Cb_Kc%e&MF4U&D|c[5rtn:r#lrThLM|em' );

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
