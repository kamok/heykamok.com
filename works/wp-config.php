<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '951063');

/** MySQL database username */
define('DB_USER', '951063');

/** MySQL database password */
define('DB_PASSWORD', 'Leads2015!');

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
define('AUTH_KEY',         '?9C+u)X/H-!7w,BG9pe|79)!JCo-+P_-qt>ro~,abWfErrAsy!BeRjU==- v0Kk9');
define('SECURE_AUTH_KEY',  'r:+%22%u&K!{XfRnS*Zq8OU!l%JDr$Pg0Nt ;PLFG4m,NdX]-La3z*Pp:F0]h0! ');
define('LOGGED_IN_KEY',    '8RnJ.SEW/M;}J^_J~Sg.)!V;c6KEImlThQEa&<-hhwKe<bn259SsagfUZ +*hTdY');
define('NONCE_KEY',        'PI{f-:-!@U75c$+-m}2iR7E.Kx#--3*l|7VkQ|K6:+%h-^XXPY:+a=x|b&4*+,l[');
define('AUTH_SALT',        '$eMpR 32RVd=IQ{,3e|6{RD/?t%KJmu-.Z-x3g4q:7g.Cc-&/O_9+53]Jv:;se|a');
define('SECURE_AUTH_SALT', '@5V[3|c<By]1d7xgO%1]`FgH[O=<Q]S}jO6{y0at3mqfwBo{1(6;&[YQ=r;[c=<$');
define('LOGGED_IN_SALT',   'D-}Dg<cT]!pc=}ws,iu}./jxQIKHvef[QzR-:VZ_RfhCm.]`vZQXJiQ [*dt3D$2');
define('NONCE_SALT',       'LPFjv;^YPecQ@Q+L%HZ`OFu6En6#QKi+gH-_{4sZ^uw{~jdyP;4DZUhl1jPUN23t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
