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
define( 'DB_NAME', 'cyberhero' );

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
define( 'AUTH_KEY',         'A:s3mu)*0Um3A[/rJKG|b7h>+:`el;]lg@<K%=+>5M[J>~<63H`)u2quav3p^Y-3' );
define( 'SECURE_AUTH_KEY',  '1A6eVLr6yvzk<:-4bmj4!K.]aE;Z;PeAr)ypZNK%T0$qc}@e?P7T<BnlRCm`]=?q' );
define( 'LOGGED_IN_KEY',    'X*UQ.@eCxv6=W>LYU*4hUAkmi^)z<hR`=S(q}Gv(TSSbIb@9ZrWAk/RYCxmA*]mM' );
define( 'NONCE_KEY',        '`A[^)Pk6Sb=T$7pF h+bmD .+Z*-yDtf^igN].Y3?YhG~(iTQd{6[Tm`>rQskYxr' );
define( 'AUTH_SALT',        '^qn;!Jd?|=k@~bSJ351l|53b62n_%_$=TF`wH{P]%pmBme]kuei3)fqB1OA7Ouc5' );
define( 'SECURE_AUTH_SALT', ',N|m:hpK$Yb}C/{sibxqn$gBYsmc!;[[F[l+4:HVN|?id;C}ho.>i ( (a:HP~{,' );
define( 'LOGGED_IN_SALT',   '_>fvvvp`sUt+b<_fE`~8sqS+FnAI5,1bw);JF1%pT3wAz+gOKOX)u|!m8pw[@-&[' );
define( 'NONCE_SALT',       'E{CEAkYXvL0f7yJd?y+s&dImRKFw)d=b(NYC0(ttTpkgOlhr*C`m&a=XjV{u{3(z' );

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
