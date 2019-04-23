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
define( 'DB_NAME', 'WP' );

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
define( 'AUTH_KEY',         '$%9bSL/W4_UR$v(Wf]>Ubz^ZWX5v)G@{2]*7}@sS]zJd#{xj0Nwc-*^@%r@llG7D' );
define( 'SECURE_AUTH_KEY',  '(%06;+-Wxl!fZ%#a 0g2W3g9!?%H;]z^ 8#x;k,aH0RwUHPkMo:;XESlxo#%,Wc$' );
define( 'LOGGED_IN_KEY',    'Y&8Tc>)@zt+575TtwmH;e;4*_(qZ#F9Y_5&GDaA+cY;F!_QIaq@()_LwvPEH7&LN' );
define( 'NONCE_KEY',        'klNV~WbAm;t.rPJtMNpnk.`Ubc(H$~wwXV,b1_2mPMo(Q;!s0jfyL],+gv <$&L_' );
define( 'AUTH_SALT',        'iX.u;]@4g9~5+~|~IfDAc=7>$IS:fPj@_zT}W]j=1&r(R!FL}a)vLy@.<!+/q~AP' );
define( 'SECURE_AUTH_SALT', 'h}84`P88H!7K<5D%qzeS[[}MktY5oSSOy:_#$?N#O M-!{XJ8!{V,[23ROgZAO2h' );
define( 'LOGGED_IN_SALT',   '37A0N#.nYeU_kl@gW{K1#Po#YW:Q7.D,XlRg_3bW`#L;y>CxQ9F(!#}+DVp@$nF:' );
define( 'NONCE_SALT',       '&>E;;H(a. ,%[ogn=.?;cm,ylc0Dka{pkY)U*M1(CMaQO4&G<w_<N3]!2}1H-gsY' );

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
