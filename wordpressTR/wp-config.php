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
define('DB_NAME', 'wordpresstr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

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
define('AUTH_KEY',         'snP%oK}D iDs?Lli.+LHRVsvUl!1Si5$7//(WI0wb /OII4J!99QW& xbQ$W=,##');
define('SECURE_AUTH_KEY',  'VT)CF}(Am:4BVg{14.+-> Sy@Z<Mh:_-2b=#/})ZWx&h>Nv<$I3{g{s9R23Nt?,/');
define('LOGGED_IN_KEY',    'So9-(X2npne/Ad>mKw %td*j4<k,F8WImja9Wtf>WHH=>_PA /YZA~i51(,ZzH,1');
define('NONCE_KEY',        '![!~Gs.n*G[hERUZgJ@[A Ow>t6}qggo.`M~s$o ,U-wP~2*;bY{Yr__GAe4K+PG');
define('AUTH_SALT',        '/zljnpqffw5o:^v@wt]y? R1gl{D.s9)p<kZ8x}U6IwC.|H?Nd-WYG#P^bH#V6Y$');
define('SECURE_AUTH_SALT', 'cpcmwdQJ8@U3hwo3M)c,/Ax9o^M7:+X7V?0^W#f=mAq0j{7#<CaCnVv3tZQ9]Dw*');
define('LOGGED_IN_SALT',   ',4ZPhXRp%] /G0`L$xOOdl9z=u3XW&-1dA5ud[b/x&Aedr<TSD_B&gLYo^m}~B:}');
define('NONCE_SALT',       '+FS[[*<s+KtvZ]rm2<%pd]l]d$CZI(,@Yqr cu*4,-E6N7H4<}Q,s^x32nHgm?%c');

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
?>
