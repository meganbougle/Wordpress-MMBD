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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '76O&R8{$2K9]ZlFMeFR_&;]xsh(R$Py?69xl! #P7xfxtn)(/bz2#Z|d!_C*AM6^' );
define( 'SECURE_AUTH_KEY',  'eg-T;7TP!#~j;xGDcI+ <!;&#.g1cXtc&;fk@DaN!K981j1KihV!H{EY7!L@t0U*' );
define( 'LOGGED_IN_KEY',    'A4y1YOk=aqI_ PEe]_Tt<yy>aGCc<Ej)0Pq=NA%*99@J+.cx|NS;LMp@=ATOA,{N' );
define( 'NONCE_KEY',        ']o3kdr/=;p@Q;x{uC!Ix<;[E)Amf30ZQlhhb naVvof*r?_ovS6D(|ya%!QsVxSZ' );
define( 'AUTH_SALT',        'x2_d&[bY8+Tkb $`)a(Wdt(bKdo:S:P-v-UFVk~y~n%HBZSmg($99iz?^]kRx{]^' );
define( 'SECURE_AUTH_SALT', '50dtx56[uH^@NkbbY:NqJl=qoXVFnxzU)URYj:= jG}#-3?CR_Pp79lOW.{z`e o' );
define( 'LOGGED_IN_SALT',   'x|:J?yv^<l!{)./9tf[o#VmV$U4*V]LC5@o:=16$tixIBu37%!-)w:,OPD|9T:-g' );
define( 'NONCE_SALT',       'om?E4aodR^=GNOIsa]g~k^}{]?[z2s?k6SIZ;.]9jp[(,|yx>UfP#{,j/$o&G}-=' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
