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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'mysql');

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
define('AUTH_KEY',         'k,I!%xZNlYPLG`vL<CtF0;X_J5fa-<]{@lbT5G8QaK`G3$Ei<1*]**<k*t0%7maI');
define('SECURE_AUTH_KEY',  'UGkR_h9?^8Yac*Jnz|RjN@f4fgRR_1MzxNjx7qVmm)28<mJIQ}2GSk~ijyW)/Z4b');
define('LOGGED_IN_KEY',    '90o=:bHF*:W> |Urc.:|&}O{FkN0~)[6gl;?y<~$C+$Ihti~@9p2P3Zz9dW;XDDY');
define('NONCE_KEY',        '$G$L.Ot@PVN4DXMclv=v*3FEq.M=JUAu MHVekDB1~>R`/lQ)xK<0-cj-T-WcNtA');
define('AUTH_SALT',        'j=e7`BdG]Hqn__wz-^^Nsdct+HeBFY;O{3jGwTjDt8Q(eIiIg$M6+n&Y=]|` l6g');
define('SECURE_AUTH_SALT', '^v4$vRn~J,:F9abb{>*p_X73(Brf^&}*4pnfAoO>(D:G)NUX8xJ>]ciNg[GC>m{L');
define('LOGGED_IN_SALT',   '`|M4q*C1Ii/dp;7:=_Un4+-_<,OkZWJax=w5s/T&Wx&}Dz``3dJ&OW#fF#dld{]E');
define('NONCE_SALT',       'FQtW8*=WW.v>XTU?-Mc<b9YzM.xKv]DWk%b>2<idQG!xIQv]-[}U{hXn4.F(AsSB');

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
