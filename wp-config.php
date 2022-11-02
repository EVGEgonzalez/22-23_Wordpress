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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Carga directa de Temas */
define( 'FS_METHOD', 'direct' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Y@pn`l=a]kS5vkchOmZw=NDQf{t9iX!)77x!g)K5M!,6Z8<~Wt3|!k}AM/_ohujs' );
define( 'SECURE_AUTH_KEY',  '-50[.iK1eHS],C12n3_^IeQ[HTy]Wo|:E~EHq,e,)??Yr*!(*tmD?FLj[vBrrALE' );
define( 'LOGGED_IN_KEY',    'R#~;D)`K+CluEV~Eo,VwNR`UsCbKzA:bp$_n0GgQNkM7UtV]hc5sNmPGch<9B.%;' );
define( 'NONCE_KEY',        '7`@cZ:V$?H&vPqQbNoHg!?`I{[.4{?6i+mutg*cPm1KO80x-;pQ;5s:Zd;Un%}1^' );
define( 'AUTH_SALT',        '+@z(npksRL0T0ZgT7d(MA&U^=kWB *ObcS.[H]pkR(D]l[eSh*Vz$9=J]lP4`n%v' );
define( 'SECURE_AUTH_SALT', 'M@aPBlGjkt;>0tMZ5q>h9Mnn-AuFSB4LiEJ_d0SxT(#jU7PpkmIG(qb/lv!;s0dY' );
define( 'LOGGED_IN_SALT',   '-XK{>G[7Sn|=1-^Di5u~8>pXeIVJ|=8B*vN&Ok,ySS4go8e#z(VM-wQw.,?B#o{c' );
define( 'NONCE_SALT',       '& k.IX0#62gFx#<j>P-b{kX]K_I;Fyw;FdMQUjR&^gEG{$Tv`/AQ%[YfISl[yki0' );

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
