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
define( 'DB_NAME', 'school' );

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
define( 'AUTH_KEY',         'BR@-omT:%39eQs?X.F4}:ub>}CQO{m/9Ui~<zOP0i+ke6UX4G,xYn-tuMy9<3&jb' );
define( 'SECURE_AUTH_KEY',  'sHqJHJnDaE!Ak}_>apD1hqO&%sv%7DD:cpp3*FrytR{PS>4K#> u7]tEk15GoSXg' );
define( 'LOGGED_IN_KEY',    '5L1E+k?sy8R*;v_h2 cV_(x@si)wpRcn|26rg,iesV}mO*Hbg-L?L/D|A6f6ahfh' );
define( 'NONCE_KEY',        'i< 4i%p_Kd]>t8N>X~/UMY?8?mb<Z&#8VQ|/b?{-qw#a{84~td2sQAGOJ97L_TF7' );
define( 'AUTH_SALT',        ';-.PGPed]YI=OCU+{L/w]}Sud3JH~q9Ar57E_^~]~`g-bHu{|QCqJG]X (`iVjg0' );
define( 'SECURE_AUTH_SALT', '71 t~|E;v %t]4>_|eiQPAt0{vJfM5{bl2TDcf-~<[uLnSNL+EzwSrc9odijfc=C' );
define( 'LOGGED_IN_SALT',   'B_O#$P0q<Qp0[iz*1va)+{vphejVDhylQ(:?$=@ZsP:MM)#ki)udLM7Lu!#x,w99' );
define( 'NONCE_SALT',       'Of}7iQp_b-~Op}8,3E4j|1KBvb1[%_3yxY>,a]?p~Nq@!w~>7*!  3!t$@CBECL[' );

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
