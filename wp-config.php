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

// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'aconcagua');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', '');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', '127.0.0.1');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ':g|SU{}7>u]+QZoeHM!b<-@OWT(wVu9FUe:ST,e+&krniBq`e(w:IT>_Z `%]cW+');
define('SECURE_AUTH_KEY',  'ZFgV;#*/0l05HkWLvL9_,g@L%+Ge{A[#Qy(]6?]oTvboFR02841K|xx&@-TN}YwC');
define('LOGGED_IN_KEY',    '+LC;-;W7;T3.O-[=-jje<lQ[a[rD>>dT$Iq|b~g|OlZ|.2+?W@yW3ZH [.|A<R8N');
define('NONCE_KEY',        '7;vf2+i^|3YI1i`4mk4oW*--:poD_-H~i|eIuA~qzuxroVdk-=5LKQW<oRHF|-:O');
define('AUTH_SALT',        'm1r+|A+hz;4$u-|zmR %juiBI_y^]I0kjan3[hKgbGR?--#I5Q#+J}3Gr;~(K!,i');
define('SECURE_AUTH_SALT', 'GSy*//R%Jn,KB#8R]$hf+nVk!5:?6!3pEvZj4UohA-PEtac% 68efP+-xPzL]Cod');
define('LOGGED_IN_SALT',   '*bEJb24DCdD~|kQJvX]Cnj}sI}V5Mqs@nCc!OapPNbM#1s@8Xe>ggW(CbQ5[?FYy');
define('NONCE_SALT',       'U q&lmux-czgw)ODdZ4SEU%{/5v$ED*0~x!YcX$a*pJ d~d]Y3X,=#w+en`^S5AD');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ac';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
