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
define( 'DB_NAME', '2020_luca_sciclub3' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@P(pm5OOf#;Q 6(015XzX>g/?T31OO?>YD|14W4gl3}aFfVqh9TBJ4F!FR[RCAX8' );
define( 'SECURE_AUTH_KEY',  'doA^])s9eTc2ut3)0{SPR{0<ae$ G)A[/:2NcO0#nk*gV Nl^5ug=*FYeLee/#6w' );
define( 'LOGGED_IN_KEY',    '&P#,r[|c8q(Pt[B+w~BNZW,J#Y]cJAk>vt8}(v0t|d`a6 _@W4?[ssa}6~/Dt^5d' );
define( 'NONCE_KEY',        'hei*2i)Q{o74ckbgd02cC>R:iSPX]7 Rrdmk|g^K6qJJUpfsM9K&UXjf*z5baG,5' );
define( 'AUTH_SALT',        '&uz+*$2uPIthOK7:X{_o{A$`oTJV;RitP5ar>QZ-Q<J[I:UE0 Hw{i!}>#/`j3c0' );
define( 'SECURE_AUTH_SALT', '#}x6WBb#*n?g[5:c?X?c5z;~%,F;4V#ySLq)i|i&sU3##X~JHw>IAI$3w}1(`HNi' );
define( 'LOGGED_IN_SALT',   'TDCbPsl]5824(qzBk$W6]bdGv_ax2K8m<@u/AWbgIS>X3~?zy61lyzGcibU3g{c)' );
define( 'NONCE_SALT',       '+JSCEa2(ar[u>R]K ]HO.^`#USJ;S}5iT(U:N6ge+Vw|C5`Sm~c(?J1!zzX0|5@0' );

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
