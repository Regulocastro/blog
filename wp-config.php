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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blog' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '799c8e1a15474855012ec219f631f1f852bd2517fc99bb3d' );

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
define( 'AUTH_KEY',         'bg.$DphPAK$XCbe,>Hst9@tL1stI%QN51c+{=6LW53|%r1+oA==yo0UYwazY5[|a' );
define( 'SECURE_AUTH_KEY',  'UF?]y*Aduu*,;G!usJT3asmEXPi[.mOzQ{#hQ+v$o@]!@b 5>p3.xJP/^@EJ<.@S' );
define( 'LOGGED_IN_KEY',    'r(K<61s`!po{c|PT50W# 72)aX?c*tfM_Tdr 9G/LJpWNyG%f&2X*mF7pRMr@~b4' );
define( 'NONCE_KEY',        'E4-FrA<=3ubd9}SY[Db{#t#22R}@_I}?GfE@yXqZ(bH3NsLUlT:<SO>+#2^2eAmF' );
define( 'AUTH_SALT',        ':+&*nNxvb!>H5HNcJrQ)dh*elad00(~Lh#tVgJr#MBhaGIcDDqxn9@l@$6P<IjdJ' );
define( 'SECURE_AUTH_SALT', '+vISFd*<2{TJTNJ|^IS~S_U `I5:!?I))fehfFh<3#L7p?@6US;w#m{A;wa]-C*D' );
define( 'LOGGED_IN_SALT',   'hf{>4A8]d]_fy2H4naF3b[AxOier@a?HMkQ!&UqxDc @KmWTSWLGOWAk0w9_]R{x' );
define( 'NONCE_SALT',       'd.E|E~OZCqxH> M5qUEcrK1N+U2SoQ{F,.r2?W!@`52b.{1qgGK-K:-jz(G(cUZj' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
