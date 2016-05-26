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
define('DB_NAME', 'furniture');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'VXK#BhSm!ix#v4R:F&(Q=UWSa{rC:-]YJENp.:^|apLqtMdD9A2{GYKca|[,yR.s');
define('SECURE_AUTH_KEY',  'b<ce:6KirHvRkKmkcZyxI&NA8=Lbo~Oh&b>CfeR)V#iS/Yn_x-W8pCv.LhDH},F#');
define('LOGGED_IN_KEY',    'Jip|:ewGg7&rAEs)Y5<}zpL48W4n,T aUW b$|b{#GeS@n6qq2WX^IRl14ubv6KS');
define('NONCE_KEY',        'Y(I2M4i|DRi</Mg_3@)xsOH6x-qT|.Dnb5a`TNWYO.Uwxa }MH.9rwgi$zD#JB#J');
define('AUTH_SALT',        '(iC&eDgk|01tz[gt*SRM?3`.QYI%nP-Dxdb+ZuRo)flC> 7Y`VW%.k*g1nak@=!&');
define('SECURE_AUTH_SALT', '_>N4|VO];v138QzN6D8$+k|H+fAzWeTVK!mgM-xrefEA8RppL7~]^m2QEMDHG_Q1');
define('LOGGED_IN_SALT',   'Xg^X:pP5<U!}RKw$S[&wce_>X#=n{~6@iz@zCJ+:bO/j:}1<6^Qy],+Fguhd6r(Z');
define('NONCE_SALT',       'Q%+kx.;}NhIqXT#5`)XEs]XA&i?<X4_wmW([Novy,?Qr*)m&8m?|IupQ2J(yr2$&');

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
