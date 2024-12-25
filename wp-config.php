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
define( 'DB_NAME', 'projek' );

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
define( 'AUTH_KEY',         'F|Kmisz~K$t/*[$9/%Fn5y_:+BoP24SP~}cjR_|BrZknfEibd1BQ1NcWJ :tu3Ot' );
define( 'SECURE_AUTH_KEY',  ';hSyWLTCnLCE,EuYFyT~TMkPg@0p>=#Aw{ 6DGINu Ot@Njo~nPD%x9ZwVwZ0Lc,' );
define( 'LOGGED_IN_KEY',    'W[!uORk9-GF(b7oBw1 Z}x>_]t`2iY;7)i/Q6<^v9$JEzY#jYv%UN.Rb+}w=x.h-' );
define( 'NONCE_KEY',        'x|O!&$[8(dsQG$ea2[/Gz+`x!(y?j-8AlR{Io($z!{K&lGjJT3.0mZ`xUNr^j:Mg' );
define( 'AUTH_SALT',        'cHC/hWc%L-#@$U71f*O`IJdH`@bjR|x@`1mIqp(dg-9OwwP~;Maeb}g7b=rlxg/y' );
define( 'SECURE_AUTH_SALT', ',.8{W(y>KrT|yCxYc+Kd@}s?X>%HDtScabH+ugdU#K2hv?jRtq9y^C+Mq0DvJ%)k' );
define( 'LOGGED_IN_SALT',   'iSNmt(9b;kQDL~OIjkjcH9q095HSEy}q 19=}qnN.cP9sU(Cwu:bL4Codp{D9q##' );
define( 'NONCE_SALT',       'tC;dLvS{#H*=oqm_4)JtHoJF+2_k,XP.x`2Qp]PJinV|$Xc?[2xruCWhh}Sk0D/b' );

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
