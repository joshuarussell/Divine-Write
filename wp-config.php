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
define('DB_NAME', 'wordpress_divinewrite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'heist89@gads');

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
define('AUTH_KEY',         'Y6hIayE6RSw}CiskpQag(Plgw1@+p~dOp!S8(b4+oHRpYCvA|R~a_?)]w0$}HC Q');
define('SECURE_AUTH_KEY',  'W7ir^~<~uQa%%J,:}qZ<6+/U;fd`{v586pd-F-dfC_>K(cL|o^0fW+n0i&E%1H8K');
define('LOGGED_IN_KEY',    'IWEj6dU<^lIZ1( <e-_!9ro3]mw)0T)ES|W0UuK) (PVFP#gU?%- $t6EkzdOZm6');
define('NONCE_KEY',        '[xL-l_%|+sE<B9Qzl-j%0WvV9|jJuL`A-NA2h2/D,]MO]6)MPp`>|cK!. =_Px=%');
define('AUTH_SALT',        'V{=D?{pNymB3,>|dJ=^L+XWO?ycMr /JNr|gqJ~4X3C+<<E!Vkl*5lU4(MS2(Ux[');
define('SECURE_AUTH_SALT', '-W|&o-[rjCW#E,|?L|DkwG:l*1m=K;X-z5&EC@/<y{`aXyX6|j`^H>W?aRM$aP|h');
define('LOGGED_IN_SALT',   'Sk q1=6YZAz0|Gpe1R[GiE4gnvA?q2MPM/pb<vZ)=Pv-yg}a+>13bGtr+*u+0_{$');
define('NONCE_SALT',       'OwiYT%[h*a=M(q9aSg+}t<#@qKfF1_D*RN|C_Kl_Ox7>12 GO@wenj*{(:*>!SIp');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
