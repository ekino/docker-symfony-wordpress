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
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'dockersymfonywordpress_db_1');

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
define('AUTH_KEY',         'ueeew_EOeTL<)o8+|DfGLeZX2$)AXz-9Q$sdj*eF+do#C=/Ag+8XiU*QR=-d{vK>');
define('SECURE_AUTH_KEY',  '$|9;_6_*k2T<|:X>Ze9z/^W_-Kxvb]K(FejZ$U5l<V ,G2,9XRrt [[@#TA->^++');
define('LOGGED_IN_KEY',    '[>`>z,gsPFe[(tLjr`ub!>D~+T&SueIH1o4l#;@s|=V]fY4W(9Lkr>[9NqY5lQ>-');
define('NONCE_KEY',        ')Fo`6NCK{$0(g/hiO,>/c,~Ei~Z>$qD6ENf9D+0j%!_S#cTRP&`NS]3LOl)SUj8-');
define('AUTH_SALT',        'bs<g|q_|,h0?FfdzW+CD,YE||X![B60B-_l:qyZ<3$<N?x_-3CW;UP|`l$dg%89T');
define('SECURE_AUTH_SALT', 'IiFdK*R&G`+sFy<+7D})0%!>+dd+zMy|z+iqqn-%FN*^BA9EDc,X#3EMX8meT]Y9');
define('LOGGED_IN_SALT',   'gh~xyw`ik=NE|I^8lmn8dk &ii>pqD`@OLQt5;c.BF2@DSvPZyUbW4_j7aFDq/pF');
define('NONCE_SALT',       'f3qy#nly(X+|M?}~HKfWw)j$DW#e}?0KKeP~PaGVTGD.+EH-pIslU+lq*ia@r8fV');

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

# ekino-wordpress-symfony plugin
define('WP_SYMFONY_PATH', __DIR__.'/symfony/');
define('WP_SYMFONY_ENVIRONMENT', 'dev');
define('WP_SYMFONY_DEBUG', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');