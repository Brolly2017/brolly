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
define('AUTH_KEY',         '[*v50G[B6>W=wtNP6F:-62 !!h7a&G(NAhB9! i!P{L]xD{BrH.SAe*LrC4KQPT2');
define('SECURE_AUTH_KEY',  '3B: 9/h+WETYh5tWW[h7Kult!3/4L K.!ltPuw80_VU}wMWQCs<458vrmKl3{XQE');
define('LOGGED_IN_KEY',    'qZ4E?6.OqgloN9BrbKjWvF*hN__tz|M!b<}2|WW_?-B@wwfwrte)`,1iSB&Qtt=Y');
define('NONCE_KEY',        'cL2|>IdxbLi4]nQ?3fvTyv;o;|=g;Hd-4CI9CJGYB!-3Dv:A7v~8{*XZl;(Ya-Q1');
define('AUTH_SALT',        'ou78:_(k5x29*wp}M_)ut|5QYWX-_FzjUYvMNi52:>^x~}}3Lx{c+V:1AFt+65t]');
define('SECURE_AUTH_SALT', '_tN@xVh?2;Z09L)fw![h+_(Qe<f@)3QXTU|?l(PQ66,%&?(&KWdi1,t)oND%hh~}');
define('LOGGED_IN_SALT',   'bYjMTsA~5hi}lk{XwA8&Z&Nr496`-!.2FL8eLwi,2cuSrs2)0Ts_<^p(>ay1a3XY');
define('NONCE_SALT',       'qE2Do2wM;cNNeQGl~)F^.>Vh%z^d)zDgn!-]{=h[y-v{oIfy<I<:!cZSvg7r8C58');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
