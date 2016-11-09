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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', 'trance872');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '9T#(6IU_U((pkG|YQEJE!A5lWuI baOo4:[PTmK6lKZ|a0(+>Z7n;%qe.F6oTL|.');
define('SECURE_AUTH_KEY',  'jPn7s07B47q)Imnm.98XQu2aovZ4(l==be#+2Fv;Z*=KIz2~<{$/q54i7Es$VtrG');
define('LOGGED_IN_KEY',    'q*xNa&MhVXGK&`hu]jO+Xr8;|h0W|uP`2QRp<:R9U=eS5*|)Jk]<2Y0a>-P6nu#s');
define('NONCE_KEY',        'fYnm**5([$rf:>V61$e_q5U*:ZzU*@0^?)yxc*A9Zi9&Z8<g,K;Xihlj<-ZYR)bL');
define('AUTH_SALT',        'y41gef;>J+e#:cS`++%-${XLy(xq=HuLnvDE-uB#_J-+K!uUn>9CuO{ks8#S!?r,');
define('SECURE_AUTH_SALT', '!XmM^D58/QP5-4LZ8,RT9`Lh:f5W*=fdfEVz4oWGjl2l %g#:S2_-Tun|B},D&;X');
define('LOGGED_IN_SALT',   'mA]?.@BBE|K]pUoeHh-7_|]?T;G- H-v*9lRb/u$;1)f13H_,W*0?a8l4J2~Q>d^');
define('NONCE_SALT',       'Oa?;rH>+j:-75F7?lv|jouWA*Siq2E9T2wcI{x<_S:(&|LatkZOGspwgmH;jN>AW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
