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
define('DB_NAME', 'newcecs3DBnsgnk');

/** MySQL database username */
define('DB_USER', 'newcecs3DBnsgnk');

/** MySQL database password */
define('DB_PASSWORD', 'T5veywnk6Z');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'a#h;eCo9l1a8g:Z|R}Y,R@JwvBn4c}n7jU,UT.Q^M<T*IuA~Ht9m;a5h:a_S:Z|');
define('SECURE_AUTH_KEY',  'mtLxHtO-Gt90d[V|S~Y|V!N@Y,Q@JzUB.TP*LyEqLxAm2a5h]W_OxS-Ks5hCk0Z|R');
define('LOGGED_IN_KEY',    'C8s8zBr7k0r7jU^U{b<T^M<X.P+IuP+HxAml5e;a#l1Z#W_g:Z|R!O>Y|RzG,Q^U');
define('NONCE_KEY',        ':Z5zGsCo84g}d[V3g}c>VcQ2f{CsDY|V|R!^NzFvQ$IvBn3yEq6j{q6i;e<l2a#W.');
define('AUTH_SALT',        'cY}c}m6jU^a{X.P$I_P+HtA-Ht9h;e5l:d#WRzKwCkFvBk4g$Iv7jU{b<T^M.T');
define('SECURE_AUTH_SALT', 'njBrMyEuAnHuEm6i#W.T*L#W8rC|n4g}n3f{Y^b<T*MuAS*LxDmGp5h;a]h1Z#O~');
define('LOGGED_IN_SALT',   'HDO~O-KtR-Ks8l1vCo4g:^N$M$M$J.P^MyI*P+HyI~OxDm2e-Gs9h:o8g:Z|V}Y|R');
define('NONCE_SALT',       'VV}Z7j3g}Y7f+e;fT;a#W*L]W_O+DpK-Gp5h8k0g[Z|g>Y!RzY^MvFn4uAn3b><T*');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
