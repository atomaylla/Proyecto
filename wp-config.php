<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'proyecto');

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
define('AUTH_KEY',         '42w^6aM}j`-h~LuvID:RgUl?J*~4Ph94|JVY(&vHbeXD) dhma]HY29*%i)3/d;_');
define('SECURE_AUTH_KEY',  '-e)K;8D>HW[n<{oztIYlv-P#^_FO MPT~[ew1E#6r[+{LDc]Bu98pmb@^TF+5@>I');
define('LOGGED_IN_KEY',    'OW9#{|AI{Q>)Ny1q]Q)Z(@SEHC8`#fIR]G_QOcB/^DZ3%HqJx_GpAE<_ThE+#O(:');
define('NONCE_KEY',        'm -DmMud3m+kJI_#]FqJi$,y45iy2&g_3U@%u6*%%#Vh1DciU(raOhUU4L_baTd]');
define('AUTH_SALT',        'AcnzFw|Ciil[aqV/Y(5gy83A|6+v{a_Y5UJ_Tl4C(=+b7`y+<of^Qrs&TCQDzggE');
define('SECURE_AUTH_SALT', ']X7Z{2y|^kS-O:{5a(Ys@|yEA[R0H?O*>R:?rCL=Q0-$}wdWxlE/hwPeLUo`K,+Z');
define('LOGGED_IN_SALT',   '/ocamiI>xMpd|.:.,OOHUnu|2M8DWu{?3ZOj$j]#IN+$q1eXl.xcGJ/E.PJf~:6b');
define('NONCE_SALT',       '+hM-=TZq!IO.#|S=%3Hi5qZ[K^E`jZ+Z~4ZzNN}|L 4CK]K1_@^seyE5+S&y{.U[');

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

