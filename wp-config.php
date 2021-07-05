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
define( 'DB_NAME', 'affiliate' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '%n-jmG<I*TxB#MP?5z^S*! |EGG;7ARrq,b^JIvh7QqZ[ce>>e403nF4^RR@0GWL' );
define( 'SECURE_AUTH_KEY',  '[iw_[?9Gkw/H,n.PAq.|oZaXq>^A(#ZZq&L)|TSyP;o#;A$d!h*moT+iCp&6u0t*' );
define( 'LOGGED_IN_KEY',    '{LejuALTp!>jA{9o*ZHwmD F>sg;2#rcK_Ya9uE(Vz?Fhs#;Bh}*6[]N>s)Jc0|M' );
define( 'NONCE_KEY',        '4iI+?f054F>p~b6-fB)P[G_TEH m5wOFL+vgbT&!a1_apaa)7C67c$5[3Q=84]<*' );
define( 'AUTH_SALT',        'fXvhe..3|>8ljts1W[bKS+}j8vNjFNC$3?npb7{v-#v a6FG?S/8K_Qe<W`rX6XB' );
define( 'SECURE_AUTH_SALT', 'vcnO=WgeE]@y(0cyVfF/KMf?j!Jz;q@-O><H<;g4>Z,w7 <;M k$ZRn.N/54+9cT' );
define( 'LOGGED_IN_SALT',   '`K-W%%0l]fWF|wjq~9(@!_C73]PN1FPADBexu[&|^d>zlhA)pV&t~ ~U0&DDP5WX' );
define( 'NONCE_SALT',       '_;lBC[#5qv@qHi77zAQ0{=b+DP)%9pPci<U9y7U7n{P)13,Q<.ymkOl3eS@eaQ3Q' );

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
