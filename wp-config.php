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
define( 'DB_NAME', 'snap' );

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
define( 'AUTH_KEY',         'y*`7DrFZ]b6-mSYmYmT{W`MIWy$&sUO|8LzQs&*&l=4[D?s`~-Gf}TYb9zvz.,e1' );
define( 'SECURE_AUTH_KEY',  'g&I45+& r[wmurLbv0~H6A}zk_~v`y6_>gn`r+T*xKNeqQk`b{~NP4M3B)+))T!Z' );
define( 'LOGGED_IN_KEY',    'u@S4:Gdu&L<J%UWrMrVTFU<{OU[CZ~-TLs}fmYENL=Y*w(BNl0S3raHO{G1^!EoP' );
define( 'NONCE_KEY',        'Yc9haurlB:M .nNAi<fZqaN-hB~QT)e]Ar7sK>Q,m2PupRAwGdWE>]:5sl9C4$~h' );
define( 'AUTH_SALT',        'KBH.u6QKGqvV.oDXjXzPN.BNp~;EEhY9d{/L9-g.`&4|1s$V6z^oB:F<sbqN3w=!' );
define( 'SECURE_AUTH_SALT', '`HsJhy-NFh#b0A~QE $]5!<jFVJ}*=y$ [~M.f_v)7_${R0 B9$b.TH ST{6GW3k' );
define( 'LOGGED_IN_SALT',   'P|h__q(2TYTm3O:ocW|Fzb0fR$E LBAEy64~_I&BRmjc[NZ85.rak)cQ[dG11sFk' );
define( 'NONCE_SALT',       '89$uA[,4=#kTL^:Ak:jg-G5FI5rQQF^h4MvvRu[ESS~F_k6r%N`=<{eHJ>A%3+fS' );

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
define('FS_METHOD', 'direct');
