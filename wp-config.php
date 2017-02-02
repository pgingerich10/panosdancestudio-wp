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
define('DB_NAME', 'panos_dance_studio');

/** MySQL database username */
define('DB_USER', 'Philip');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'u$Kob~_I Q_<krJ<{;5s$8/bQfjddV}uX# VN){HzxWf*`<abK1;MMp3]%umpi0~');
define('SECURE_AUTH_KEY',  't>IwF7+EW@8SgF&iUT<@QFM$6#9-5^XKwBpz4QeyyX%Yc*7:=CZom~E2xj|XXTE&');
define('LOGGED_IN_KEY',    '$p#]LR`/;?+>qoh c*0cq/OMxLFLSJi|3f3>8@^?<TuBIc+@r=apJ$j8C@:O(Q$<');
define('NONCE_KEY',        '|ixr|FLPiWMuBNnv^P1#9o58i(d[ILR~D&XtjO7NT;&l?#>ix=gSf*XBxi%-Xyb&');
define('AUTH_SALT',        'T=6;VbnKZG{K7:;`)a]!J3!$N!^2?)WvVO|1Gj<dSGv<C~A@!k<XOE{Ict@?c~$m');
define('SECURE_AUTH_SALT', 'ngBe7=X)wB21bnGc0B/d;YY_c__qzMVMLu`k~jwQhqqk#B[>x}Nm45xVj<v=C$et');
define('LOGGED_IN_SALT',   '_#_7Rs%6Qy1t`U[sPS2JQw{o$i#OM`=1O~u2B]U*fD{TG{1Jw6rkpr{uDr/G`#tj');
define('NONCE_SALT',       'i/%Xl{J7fY[99ksCt]HH=f?LM=f:tXXQzCA+I(.aXa&]; P8CP`2;B_8~nJ[W%$g');

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
