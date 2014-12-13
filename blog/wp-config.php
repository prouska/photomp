<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'prouska');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'tG61:n?;Nf$1 d<-r;PS:9jGQu,R5V+<TRXk?+^8-0sD+D,U9:h?BxU!|BdA3G5P');
define('SECURE_AUTH_KEY',  'ta}po%C<rh}0Y0U`oyu5q|&dyuLYm^LUq@4ca,,-!rQ:)Y4i?W,9AAM!=}4@$=bU');
define('LOGGED_IN_KEY',    ':xI_7v?dph^Fda&3R+^Z?|r=X#o0zL=H#9B)a-Qc-}j;n+|*a8<8 aHuc>C[(v*V');
define('NONCE_KEY',        'L7#[zU9UVV9.BRZq}3vu-QgyP7JT(@] sS2w@u7T8*K^16A]4vu3bbA/4]yPe[B2');
define('AUTH_SALT',        'R[[uc:u?lK;W7+8aq)H [9)]S,Ow*}kK7+ZtGJs2:S]g%G8lH6f+*ZOD{LmKv|(%');
define('SECURE_AUTH_SALT', 'L|,L|M]CI<1&`V*xP$(^S:6js@&1H_Kw^N{l#@|G<SzHR-zr=yfsL2wcSJWCkB (');
define('LOGGED_IN_SALT',   'K-h+G!L/NbWe_OYLl&`[e/2aX,Nc* Kqc7vy2&D,zlvvN@YdQtrc.AV0L6[_c&t-');
define('NONCE_SALT',       'Tev(tQC+c+GX=<m(-9gs l?pP0fi3|HWkP/:|z4,=]1)*Z+[L1+]y]lLgLROWx*=');

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
