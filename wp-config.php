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
define('DB_NAME', 'wp-test');

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
define('AUTH_KEY',         'jxX%]RtKc*oIn&j<]87QWQGy#H9%SCRQ/tp,Yv?2AFD[rU#DBW-z8_s+ cmX,DkQ');
define('SECURE_AUTH_KEY',  'EsAFamHigbTp.S(s?!H4D#*-6pnC><#j9K_|{6O%x}r&b !hDxKMEplp-feOYxcy');
define('LOGGED_IN_KEY',    '[t4Lq6K*IBgTL$)=9)x:jwR6}HW=_K.Tg%xM$xz{>NkL7Tn26Py|_(,lHi=`;pS.');
define('NONCE_KEY',        ']5+qE|<F{:T:cYwWOvb]dwlP*}Jz2^^b)^}6km%:O.g9WT|2Erb=UELQw:|ut}Yn');
define('AUTH_SALT',        '|h#9QB847l}:>gr_zxp:M4)@9`,ryiiL5XqyHG~mqX,MS7o$KtMB*fnNmI/x6%/G');
define('SECURE_AUTH_SALT', 'p,l_y]Q[%Ie[cj5LV_YV<Sf7mPjRygt|##S5jro~WtD 8O?iTzt$MSKGgOTMyB&,');
define('LOGGED_IN_SALT',   '0c|aG[O/.)*9y%?Ugg^@7}j[[Gz)3-FeBNJtr(h MEs)[$j=j7#Zt45OYia0YHoi');
define('NONCE_SALT',       'q6WVYd0nm7|p!L}/sWLD^JE Ttw?^Q?Wy{%rH4h%f8lu[vDu4}@SXs<guL$8IwK.');

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
