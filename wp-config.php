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
define( 'DB_NAME', 'fanatic' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'evB]ylL+@lP(39Cr<W:V 7/:WJ+?itzqAR`(UQP5Ol:;~1QVtrz$5p#]nbcX=!V0' );
define( 'SECURE_AUTH_KEY',  '#e?p8IAs?QF5o=S_`oa@[jVkz)>O4D(jw>1ZK$!]GG7/Wy{[j#AKhL5*mwBL&`MB' );
define( 'LOGGED_IN_KEY',    'e%@nhxxixQ6  83_[rL|]Fm.~;j3a,ovg}S4Q31/P7jiu%9Q3i#Rbu^6/qx;43nU' );
define( 'NONCE_KEY',        'B3)&X8&q5$?~.Oye/u@Q^sx-.:7J9U3(5[vsTXo(TKMAlg15%{1]+^EPa(!jf*<`' );
define( 'AUTH_SALT',        ')1Kb.<L^)QW->5lUFPDM{bta/^pD8 +8d{gzVh[//FSTn+66ID5r(`5`bc9(JG~{' );
define( 'SECURE_AUTH_SALT', 'dCDgcKZTB~cy1S(&1jC8&r 1$}O[)%>Bq&i?4~*v}Yc,%a9]QIf-3HY(~Z^<U8[a' );
define( 'LOGGED_IN_SALT',   '`{Bt5Qn3Q&V1#9`pXW9*N*me&!u@1tmI_*Y5L] ?JNPADLJUD2=Rb6<040O4pe3f' );
define( 'NONCE_SALT',       'lF^*$t-RAOsvM].1)F7X<*@z(GfJF;Lc<|wE;pOm*+M6o?V>5:) Erq3c__XHCME' );

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
