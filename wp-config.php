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
define('DB_NAME', 'vrtic');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Euc}af,A0Z9/h%R{zOll/t/mSnq/2VI^mna2hoNchZ2UU,G@GP,I&<JIOLx=8vK-');
define('SECURE_AUTH_KEY',  'xA<*M$DJp,xoP0y*n-;t{$KVbj66c}RB|4;m(vt5t?}r0ew*S=`^zBo./,>*m(;X');
define('LOGGED_IN_KEY',    '<Qvw$G]jd;U=S>YRz#(S*_]U,q6b2>OM3r5{f-B>$@nbWyOi2aO0f,n,0q+hWY)1');
define('NONCE_KEY',        '%l}>(gQgjZTucW;7Nw,zBS*}M4 4VW>ZYq<&jhrG]>9Z-bi)U]JHBaEN~y.v#(w%');
define('AUTH_SALT',        'laHYzd`ialDb#[RDxzw&)K0+^40{em_h3q:Rny#W]oVMb6q$z*xQ|GvFpe}D+Lxo');
define('SECURE_AUTH_SALT', 'p$`sdmkjr1H.i]Ge:XBj>CU=omd*%{[ef{*65tqoI~.%taf[js42}&^>?aSbcBSv');
define('LOGGED_IN_SALT',   '~,1O?5r0Xk)[ka^=lexM.awC:(e5<8>ijWvUJhUXLEKmnN~t#:54Gf*tY*%]]lIx');
define('NONCE_SALT',       '_#I>v*3!Lygoq0 Sd6XM;,&mCJP;{fOS5&*: k2at!Km80C$42=v,(kmJ3r7.n8k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
