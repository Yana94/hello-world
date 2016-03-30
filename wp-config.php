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
define('DB_NAME', 'lntustud_pnkyan');

/** MySQL database username */
define('DB_USER', 'lntustud_pnkyan');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '>VEl}q-[qc-NYX8N|KI^1(8WX6)ZRLHd%&z9RR]i+R%zR1F@m#3ggb@0}a{I*#s[');
define('SECURE_AUTH_KEY',  '*{L[n<{1q^ QiQY^/4O3;E:<=85i+eb@J`-o!,}rtnE]%Vcuw@i2fXrh;SI2!AYS');
define('LOGGED_IN_KEY',    'lw9sD`Zt07FY92f%_ nJS5(QAcx~tmv-6$v4RS;jM(:T_O5D/b.I~CDgh=i`LOee');
define('NONCE_KEY',        '|q7M%!bgPXJmo}196n8wCRMB*J<?pi`qw-3P7P1uk=Ep.a.|~uvYwM_>sdc5!.lb');
define('AUTH_SALT',        'N#)}+g0?C]zEb5Chzhqn3J]?7gz!,<}cFBEYqvBqOnF #*.3TC]82jdC,~.)fi#h');
define('SECURE_AUTH_SALT', '^$rRafd2m1+:4c p.vgWmY?BVn||@vfE@bomVpOs7Fa%;/qxUM8t0QU(+~5<(?Is');
define('LOGGED_IN_SALT',   '|[nT,`~Vl|}CI$2o0YrP%6-[QA?up>aQ)|u#)fj22?1,~SrWgN|Y+^c$:.1+DJ/Q');
define('NONCE_SALT',       'UcP r.5$?j8zNx{v<R|ONNRGY;n1:z+~0{}4r0SG8.4jX5n58>i[e7h^s]^^RQT.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mysql';

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
