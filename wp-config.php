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
define('AUTH_KEY',         'l8gR+o/smLUzM:Ss~HxLKt@owM(!D6z_}pl;?c/XD%(V,j8awl%CsJyD0l>c.,kT');
define('SECURE_AUTH_KEY',  'HN0@4-SR! zi?H$]=v.lC(%AazZd_30-{wCiHd dIi+A24r3spVp9f_7fK0#,]f-');
define('LOGGED_IN_KEY',    'Z7MiN_w[!F)EbTe)WsRUvsx0h+iBbf]XOAS}F$EzJ2<:ZXKtXkD=i0|i*+[Uw2LJ');
define('NONCE_KEY',        'c}Y46&AqdPtO&-x(ItDW;33 YK3^2<wq#==<_w%g_Sof> haRZ@Ll d;*Q:Z7B&s');
define('AUTH_SALT',        ']iH(K!$yVGHxoiU+I6pB062,6&}:l=VH9u&iTwTUUmE90M.~{}7E{%H2{=`yr8V*');
define('SECURE_AUTH_SALT', 'EFj}%gz6gz|KyNt$b*`X5}cTI{;Aw(J_os!8Q+dui{W03v.=:pWJ kH5,b21,.ti');
define('LOGGED_IN_SALT',   '5Q0]0!CUa<d_^LJ~Jcrit67=cZJ(y[4}C;G(5<=QXdmM .`KS0Tco2L *`[.`yYH');
define('NONCE_SALT',       'MM:R;.<<5ja,pL`1YB.PiI)}[kl(alM#t`>Ot/_]QS&Bn4wb(U|F3lt0.,_9g%6Z');

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
