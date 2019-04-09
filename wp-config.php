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
define('DB_NAME', 'Shreecyberlink');

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
define('AUTH_KEY',         'Y[@ (=:a|hGmhWb6 .#U7ieBSHC;Z%2MCkj8QVpkJu4mI6u?qMGSF;OatdehqoH.');
define('SECURE_AUTH_KEY',  'V({(TUn/Pp=#U-&j]ZC,Z-,]4,c_X&m-.OH9+!?tX|1ZfgnpeINkYRoPIrlW/o~X');
define('LOGGED_IN_KEY',    'R<m5cVGG1Dw,qdYh},:a5#y$B-E<Ans)7%};{5BGwJmMy,(z?SW*=?td<!BKCP:L');
define('NONCE_KEY',        '`^.D=M$s!gU7+ %Q|e(aogAk!<2j6u4hA|=Ru$<gZOu-{T1(Q((BlP!~s7FY:B!e');
define('AUTH_SALT',        'Bg#TAZyDjM5(Fiiqr(!N8IJM~r{:&Dzq1wYk:BABMZ4*6H.tMB4QnN7B)2m_ni9G');
define('SECURE_AUTH_SALT', 'JdfdxW_!XGKvzVrlz,Qv985~J{>4T0R|y&OK)r a4SW>PBu-L|(J[}kr`9x%l^c8');
define('LOGGED_IN_SALT',   'v=CtU=;cE{P|AXr_*b]Jy,FlkNv`xeJRLksn@FQY%`g}`=Z:uSnyU6su{M:~IEe)');
define('NONCE_SALT',       'pZbz-=oOw=8zjEd3.#(M(.gyi~1}ZH[g;BiW9`&NC(Lk6e.,Sw}#`h-KRO[Dkzf4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ss_';

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
