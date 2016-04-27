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
define('DB_NAME', 'wp_lifeafterpurchase');

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
define('AUTH_KEY',         'Nm!Ps<?j7S[gb#>[6*+0f?Lxpu{TVm| X#|,YQROw6Es92X TWu4]t:W;M*=+oo]');
define('SECURE_AUTH_KEY',  'QX$s2Fhzb%!FQa_e~Laier2#@jJyx-(@O/?ICT+cF;8(%KV>+(a^fW`bTMl>?vTx');
define('LOGGED_IN_KEY',    '+}{C4}(%LzRmlW*]/.H_YPPCia}cUvvK2qW|b>v%+Zcgh#L0M,>6kOfc*!04L0zJ');
define('NONCE_KEY',        '%#|e^*znY@B+z>84CM2/23p(l1xt]}j,9,gDH&[ZS Aiynm_Kn1%n;[O2C~qtm|b');
define('AUTH_SALT',        '+gi!wXhGAX0-*+$4R@O]^ hRP<!b>jAxp`!+Vp9i$1B~K@e`-G7<sw9Y<?+_TK79');
define('SECURE_AUTH_SALT', 'b1-=cz-?6e^r$SWQ$P#,TW&m>vn}v*@FVkgc7LCoky!gxkL9==f9ul`!mgc9*:p>');
define('LOGGED_IN_SALT',   '%75s@K=h4qo%3`u3Az!zNn60Eu8Aq(=tDR)ug2|;(hCs:DbroeF.uKy|ZZ7?3?:e');
define('NONCE_SALT',       'bz9-;|r|f7u8p&-A1m /88a{5K/Sa&PBvkgk*ytveR_mS<o*xOHtjiv$[4?apyc7');

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
