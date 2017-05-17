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
define('DB_NAME', 'ikastola');

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
define('AUTH_KEY',         'YV@HtHl+Y)bxX>175Wh}qkXgO###i^BBi[u-%_&<p..B` !GD<,7sZ|ymCxs5G)E');
define('SECURE_AUTH_KEY',  'pU@58,lF(reqEm]M>Fe~-h-ks8=B;zkm1^c.a5d;<cn`w1(^viD }U]I|?g1MHav');
define('LOGGED_IN_KEY',    'z<iI13b&~;_pW(}]m;ROQ;bWQRsZEez|(}$1:*N5}jllBY<hlzm0fK&o|Z $g&.S');
define('NONCE_KEY',        '@U%S=B5%dHcP^?+ocN &HzcNZc9&>bLrvw_ZM7fa[S&Ofg^)Q*?3/4_7H5w.9/PK');
define('AUTH_SALT',        'A!@avT<[0X]s<VDY[Ma!+l*x[D18&<5}~1ZpVwx,n2I!f1H*x&P;_*m)s&$357Z+');
define('SECURE_AUTH_SALT', '5-f=f`gBOLGU}RHrhBlkmv,C0p2rdD&JSHp6U|`[Gr,!6rjP7)Qp|r GC9w%#(L2');
define('LOGGED_IN_SALT',   'jWOH=FT%{GC*@19>tO=RzmKSo>@ZkmAHh<i`ZlS=3IqQ?p1g,BUodhwQST=js9M ');
define('NONCE_SALT',       'Y3{ktENAn,au0X>}j7jAYt{K@6_5CKUS<sfqC:3|?,EM@+4h5yjl]%h7tU*z;`MM');

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
