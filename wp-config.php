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
define('AUTH_KEY',         ']G*A=s$:/K-HRB@7;6a*.3BYlhsm7s:aJ!Ce,:6LxU hI`{iNZnSgVJfT7#j(i(]');
define('SECURE_AUTH_KEY',  'HlDaV9&{@qxvqZ+bMEPAqL+]C=EMs]c<;e<-J[7nf/EHX735Z/cN)-j+`P=`|t{B');
define('LOGGED_IN_KEY',    '!D$$O+NS{^8lAI/@N@C4[<*UU_W>xw2y${p3O:y-J.Vo=&^,j]K9m[+l1|9MOt2k');
define('NONCE_KEY',        '1$8Yf;8O6F}oO;KlBeBqCIt%{f:65)ZPG2QU!#FGIYc8{mDV[R&vCYzRRnolsuUY');
define('AUTH_SALT',        'WqI8DP2o-] rYj)Xrb)363PW>X(4oEt|zSSs#Xl*+?uk!,RgYEnp/~<)2DPTE-CQ');
define('SECURE_AUTH_SALT', ':>;OA]4]TIox0(SG:0lLHxUjKh, uoBPn]KY&1f)srz}[TP 9l]%u$rP}cb*F)p6');
define('LOGGED_IN_SALT',   '$|=0z{:;@RE3faWWVjBcM=qwN2Eh*;5v0&pV{g Haw R53 5w;Nn3mURY#rdZ24}');
define('NONCE_SALT',       'I>>#*L1v%[A0~NC9z[X^1ZUwMYSjxQ/[qN%0X]Vz|64cBF^W35Il_BimWVoVVo2I');

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
