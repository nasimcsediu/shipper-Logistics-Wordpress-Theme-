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
define('DB_NAME', 'shipper');

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
define('AUTH_KEY',         'Zwz!tJ!V>)uXC,#}#_vjPW1,5.}fs-Ls/C1%q#DzPla<C_l{b)KB!<6bA%yayu<V');
define('SECURE_AUTH_KEY',  'bo.Q(iT7cU~A7U t,7TtEX.8LNba72([6%<ZuW&BYW.6u.2JK;(2wB9h$QOJ*.6,');
define('LOGGED_IN_KEY',    'h6,AG!z2+F//Oph*$tayYB7Y4i`e~[`(v1NPvxx~jyvu`RKFr8mK0xmKVUA)Es)^');
define('NONCE_KEY',        '6|dTKak{%y$p~!Hq/*gs<q-t]*;lhmA~G!%%ykwYvo/h49tx,2PwSZky<*M@p4eS');
define('AUTH_SALT',        'NH }GTe]3pMU^3j|KX6%s}SSiMYu76[ZVh.O#sNoyap{Iv^o( IRTs/u.4=JsWCQ');
define('SECURE_AUTH_SALT', 'QA$<ys-b[`u@pPs0 z,DqjphbtO:MhI?L:.kv_` IIQPa,=C.yh`[*5pljqEgu[_');
define('LOGGED_IN_SALT',   'wOpjC8:CRm#Ju7;6jAh]1EkWntj,tS[-`c#@`,J.KC%O<J#%amRAA~M47BFg3s#P');
define('NONCE_SALT',       '@) {K/Tn;(~Fi`:R[rFNfh9&bl%EJqPq*3]Z[S.wbXo@YquRg0W=F(2cJZpxFG>g');

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
