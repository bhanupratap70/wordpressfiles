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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'oi|1i2u_#6Zv)@aM6=(I:>Zk}Lp4;|HGVN8Dw$,eAO)$ulSh-GhDTfKKP}o{)b L' );
define( 'SECURE_AUTH_KEY',  '@D4i-AC/_ F+}s8(s)g<=$5}rk:m]-U6#YnD9ylA_%mKa]V>uV6I67vwB$IAK^2D' );
define( 'LOGGED_IN_KEY',    '@FB-4eH;9F=Cuj5*y?lYZ8(G2~ >x%w<!gC:3=vbB[QCW9M<:tO9  ~zz4t,vfl|' );
define( 'NONCE_KEY',        'lF/yqb}iRn@&Od05YO;N^qw[6d+X$k5a|~=2~]PUu)ki^C_bbs,BnM;BPT{O:`!9' );
define( 'AUTH_SALT',        ':u~cb:6L-=@VYbuU*k}BHi4yxaPMS1<~}E&`zY_9cXjCMKdQ*a$lK`%%<`Zjl+z`' );
define( 'SECURE_AUTH_SALT', 'uXX,=KH5qlB}a8@XIeN^F+fR$i!9_Y-ZAs{E0-Qp[|ua8`}2W  `:,Tqmxqd}ZHC' );
define( 'LOGGED_IN_SALT',   'u_.?J@`0mPL)bczWMUw<{_Rn_whRfLs[H&py>tL/-d{wCro&4@*J-}%bPL9IGtRm' );
define( 'NONCE_SALT',       '.H2<mnj<yr`nXe6&k_JW;T/SEdbs{`Ko)V?nfrgX^m4(Djzu t4iqO4[Z{Ofm;O`' );

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
