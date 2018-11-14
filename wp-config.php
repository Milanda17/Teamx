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
define('DB_NAME', 'TeamX');

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
 	
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Wfk?K*jb4YAs!2A/H+ye:dTg`>O|s0f2UOn2SjybZY-fM8t!+K,Y1 Z:*:[Nu%*W');
define('SECURE_AUTH_KEY',  'CG=6(lI!`e(vbO5<Hiw,gNv6,dj=AIP!PcELKm|jP~o1TCg?uSq/x|c; >^%Gp3l');
define('LOGGED_IN_KEY',    'bcf{6V<#s~o]BTM? U41}6H&XCCz3qfH{Z&FfZ9@+A@L.Kd],Z,P2;F+tio)B(-i');
define('NONCE_KEY',        '7k[HQ}[Ec)[*5HvT2s@T*95L?>K1Ah/{.)vw+Q$f,Z%kzP}pXNA[U^)^-/GW->/0');
define('AUTH_SALT',        'H:>lRvQM?1>zh6n_G-_&|VKwhm}H}Ss+]gF6#OZ%-{~yjU)%l,OGWmk?y,,~S;4m');
define('SECURE_AUTH_SALT', 'rN?zA7hCDWhqh~k<l dKAM]n[LMo9ZzuXU<n<_bmu5U,9xZ6K?UyV?0*;$|[OABZ');
define('LOGGED_IN_SALT',   '~WlZ5*f.:ICSUw_VP!FF$<]i5z4{da`<{z5cJ 8PPusQOL+(/aelz)rbub!|=A$-');
define('NONCE_SALT',       '*^)9phv Xpdvc?{4KUgOy/JE`j]]^VEr61BfQE%U8sF4Y0>!nVbG0OFL`UhNA-c]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'TX_';

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

