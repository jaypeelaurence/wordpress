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
define('DB_NAME', 'db_name');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '`})sacn3~GiHQV?|e!ix+L)bo9Wp`k?h1>3}u1o$v95B^zfx|7cQ[o(^D3=^2c_g');
define('SECURE_AUTH_KEY',  'Z~T!x>Y{#[)N:Xg@-6zcOk,<kb.lUsQ=.tDiE=$a;>i^u$g@Yg.Y@`f-}5{]i8tJ');
define('LOGGED_IN_KEY',    '^x<GsKR!l<<YFT8W>`@pv+<]S2|i|ovv?z@g*.OL$Ho>r<y9-7Vr6,kg&qKCz&/ ');
define('NONCE_KEY',        '9N>g)foesp_/]vQjm@#b~_kD OZ|)+6+((b$AxNvNw?CgDE?8~)jGhuE r)/q$hg');
define('AUTH_SALT',        '>>slq)8fwVxu1;|/*#38SDL~p^IRlGr{9?/8.5]*)xAs<U|:7W1SF5L_.~Q.!MJc');
define('SECURE_AUTH_SALT', '6^DV)o(ewHamkEVvmu]~d}IvE<.Y6GI$&fYD=YS-.>=19RAE6Ml|W!#8IrOj_~0)');
define('LOGGED_IN_SALT',   'q?$=-F:bz?Q3c|c+0Sd%6fg(=:x>hJ.|4=}V9#K:-+mW+-.XEqh(,Bon|`}[/+S|');
define('NONCE_SALT',       ':{%hxx=0x;Pn }~B/1K|(VjDTFxmq2oZ2VAR?-Sl!pqM#,#L:<*-De5?^BaL(b3c');

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
