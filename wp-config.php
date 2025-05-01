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
define( 'DB_NAME', 'wpress' );

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
define( 'AUTH_KEY',         'p-V_~XM*:!:>PS#DPwOkXW~S^ MIYMl84G$A,{fa =QMis?CG.eg/1<dQ5i3Y9Z5' );
define( 'SECURE_AUTH_KEY',  'Ag&o3H~-9Y0A$6L8KLxemb#qvh |bqv,YZCW<Q#C&8}@~l1v<O)[leKrP+3m*mh|' );
define( 'LOGGED_IN_KEY',    'wDa4Q9z~c&FY]qH~C*C|&%yOU,_JL3c9eI:ZdGES7hW+[,s dpXEhY~4irz,M*W%' );
define( 'NONCE_KEY',        'JOKno0/=S^z?~oJ Z<B09n+NPfPzAw.=_3qkX(Kg@1-C6fD<_!UNu2*1gz,P-+</' );
define( 'AUTH_SALT',        '(GwpOhEuoK!.z*)*u/8Q<dAfs#k(`hOf@n0.c4kpxJ0.xP0y$0!~dM]G-uY@:-2G' );
define( 'SECURE_AUTH_SALT', '7;YV#]XLjZb~0;({R5tIEsy?0,Hw+tlBo0d6G%ZzKWDFJv2rG7}:?Z!K$,!3vd1S' );
define( 'LOGGED_IN_SALT',   'Vfla?bg|^NFgUhyd)aM]+l_cr2*?qOGYWOm,Jo [7!*V/U^}v~79 5i..%GtB0Ov' );
define( 'NONCE_SALT',       'Jw4B}|V|la7G]Rl0H&W4av!b:ZXu+(|6:iJ.c5V?`$Ga!_Z_Q&?C^yrz}LlqLW]1' );

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
