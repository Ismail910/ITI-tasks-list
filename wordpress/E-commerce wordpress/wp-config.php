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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'E-commerceWordpress' );

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
define( 'AUTH_KEY',         'B,BGN+WhO@Hdj&oEIqmd[-rOc> K1P,?d.mf{I+q0h2oOjYL%K`wWF/A}l,UPAyv' );
define( 'SECURE_AUTH_KEY',  'ow>=jf(JiI(F(#d_YJ0Z@W>`v$<A-@ub+h&`Qm4k5^^[3,`c,?@$NV;14cu|`Ai|' );
define( 'LOGGED_IN_KEY',    'z=WQ5SFW+4U@L*ga6r~[@IuWX5[^z/Sr<e@={E fQlGy!{)eTaJjbR7x;zRf!+lU' );
define( 'NONCE_KEY',        'qC7JPqT)[#.)hDJC&_|%:b0Z4]aUP`PWprQ&dz0tHyI~Uh|bTfaPS`>>0(&B1)m2' );
define( 'AUTH_SALT',        '}9[F%jhDl6epg33G3S({W{GzJ(/jiA8}H,3G-g_o{t<z=v$v$%GJr21^Cc_(,BNk' );
define( 'SECURE_AUTH_SALT', 'P0vY9[37h$v-mJ!UdveGB)3+<CjFX+yc#Mhtc,q!cdWK0>g9p7r8Bx}RW6$Wo)C1' );
define( 'LOGGED_IN_SALT',   '9gJv3zoX{`bo9mQ9b1T7ZM.Ki223nxB|Lo_@FK7q3pls27RA9(Qolp>r/ar)7rTZ' );
define( 'NONCE_SALT',       '(gb2As|]V8q8ZQPz 7W;&CB8|X6(.t`+b~fuo5^G;Hgp4i|k*e.+w6Q!3m 1Uo85' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'iti_';

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
