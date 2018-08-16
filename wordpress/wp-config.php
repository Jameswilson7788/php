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
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         '@}AV:zI%R.%+6b#pwG]O&NAv{8Ecpp;*}:#Bgo3$S6ab1F8Gs4b<q]4f^eh[CqVg');
define('SECURE_AUTH_KEY',  '$K77RA,!,Bc!1Bw:UCs>YBKb?t%|KKt!Pq,:ja28G*6/A[vG5qUV3ynjYRL%#qV^');
define('LOGGED_IN_KEY',    '*J9r>WGX$25lq75NoNU3!{|d{;wAn+RJO}{T0fzOTHFmg](,U_@_*=Oe$70ovP#k');
define('NONCE_KEY',        '#$E,CY+la]psTCE:YwS) }|eVw{F.i=h#>HIP!.)o1o[5arKb{IkGz29nzT%>?5[');
define('AUTH_SALT',        'K$;OqLKZxtiSY=*ou?wX9!c+?r708O{pmQTx?q5AaGB{C33|Z!m%3tpk3|$)n`=V');
define('SECURE_AUTH_SALT', 'F;AU4aJ%=Y,cm0a)= -hx.T1cRr4)$uZNqnytC~hOS<2:XuIc|X_aGRT:NI#na]~');
define('LOGGED_IN_SALT',   'kUjF82368P$PSeVRnTNONG^[wY}[~Ee3#0z|+kxO=rRV5rDv_f.HX>G9.zqTDGtt');
define('NONCE_SALT',       'LG;JRL5)}F(]~br1bi] NzQLRlw*wS g*,Y6uW-Ev2vcgj:)![LSON*GsZZ=Sbp[');

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
