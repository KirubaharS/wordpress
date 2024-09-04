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
define( 'AUTH_KEY',         'O~Lk{3g8W0sj!qBn&=9y:Q1hN7+,!tm N&EOSsX6PlCIL4a=h^EL!)QrUX?I!&Hb' );
define( 'SECURE_AUTH_KEY',  ')M3]]y$U:#~Eh7A#XeVz/,Eu=2lxyp}|6vgKN-{%sZ#v@zAl$c,@8<T:,4uGq4~L' );
define( 'LOGGED_IN_KEY',    '|5:,ZQ=/xBjXz?i`9SLR7j0XwO:L_q__,w2x?[ket@o5B.Am!PfV4V5SgFSX_v=n' );
define( 'NONCE_KEY',        '6#zz-=T}C-LuR/K @ZPDxmJ7e<}pRcf4-x7=g;svQsI(THx#JSAsC#u+}!;cM?&E' );
define( 'AUTH_SALT',        'D]cM#KE|*?+iPYwWTWv:`ZarHaU;4Mhu26/;2^T^NT$`_9]RLX{F1NNkOERK=G7.' );
define( 'SECURE_AUTH_SALT', '}LK05@<c!~RP:g*(*!I4Lv6AscV?s *PGfo%piu(/4_IK;Bv6ppn^VH(3@wfA=hV' );
define( 'LOGGED_IN_SALT',   ')Z(Z/L2hXN?ib2&wS#VAl&Z9Z>l`=X![]XnZ<M1Z.D:Fm$nqVwJH]4C&OUg?$*+K' );
define( 'NONCE_SALT',       ')ujQwyM ir#ArJ#SeQ^Ay@]^axt3-jZYsKMF^J;cNH>+=iu>/I&p?xS<X^k/)!l3' );

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
