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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', '' );

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
define( 'AUTH_KEY',         'gLv6*M9remvkOX0,/Jzk]?Qie$}RK{A^iNE%EK3BYqK4?Yg.bWMP%[vK8>kO[S[y' );
define( 'SECURE_AUTH_KEY',  'w~#w}w1zP841bW@;.ggZ~77N+m,Oz}N.c6F1RutC8/Zk0_P$.0/J%sPJr4/@QjzE' );
define( 'LOGGED_IN_KEY',    'c&xeu?waVwhP_z)<YvG5v`85pyhj59d/)niV[~Br:<935kBd$Q|SCR1V7$W=m:-X' );
define( 'NONCE_KEY',        'b/_(EHJ_R,uFId)S{@n0KS( vkjS6Q48-]z<[;(8JxL9?I;yNdQa|<NM<pA<Hm2s' );
define( 'AUTH_SALT',        '`Bvo+Xl4Oy)XJ-6#B*3z`bNOhTxXRe>fYRJMw)2jCWeY1M}1y>6,TxEs~2gUF=E*' );
define( 'SECURE_AUTH_SALT', 'f2,3e^zXzkMBm00KHZ!{jD@TF}W6zN,F4R|.vRsz]5%N3F#_Eltcbzifb5U-L<0?' );
define( 'LOGGED_IN_SALT',   ';R-os=|oHGhn3}lbI]gU=M1U!CZ,!O@p_5W4y`%L#-TpFXs@8.W`?HKJ]o/:Dy]u' );
define( 'NONCE_SALT',       'HFS7d6j0.!iXefg*I_eKzC,o*rnd7R[%QDTAS5U{gvny<T@a-fY/A@e{MfuXdVi)' );

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
