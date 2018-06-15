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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'wpuser');

/** MySQL database password */
define('DB_PASSWORD', '$martpw32');

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
define('AUTH_KEY',         'G6T=8h7ilA#? wJDTEa[kXVmFl*`:KI*.}On*K.h)s+<zx>L9Aa[pY62~4(>cJTT');
define('SECURE_AUTH_KEY',  '5=xW G@_((A$J%c&09N#X]B:upu{p7/ 43>KVmhw&fpw|1PO~Li}f~C0ViSo_$]F');
define('LOGGED_IN_KEY',    '09}w0yhA/(Xii3%w`Dzv=WSTmi,k0T#ld7A`1+4l]7L`r%c-<}8wuNa5,i G]zV%');
define('NONCE_KEY',        '{aMTIL4>[#IxuMnwEF,fy]<=SCMyNv+.PO,IZ +n3r@3Hn5;3:f>M#NT,m)4)FEp');
define('AUTH_SALT',        'La!- W`x6/&K@[$#ejJ8M-j+)rPdfZVw*QU! Dv q:v1NP]3_RIaf,9-=N1n/qSA');
define('SECURE_AUTH_SALT', '~&k#_iW;5GxH`Isz(,22mAN$L~/=|0iznq_cs6BeCJ(+cURVqQ.DZ%Q6e+7aHll#');
define('LOGGED_IN_SALT',   'tVM{L<{qOG=rQ$^5X:Eg`|3co9!u;aeCFD0oQnGkNsQj@-C 0AfrjvqTB`e094l2');
define('NONCE_SALT',       '=z(KJ{Di}?c,{8gqh3;$6|g^EPP}(_g:|K!1cl[uDSkF;AVy8{)SMw#^{96#I`8Y');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'localwp_';

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

define('ALLOW_UNFILTERED_UPLOADS', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
