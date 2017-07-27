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
define('DB_NAME', 'gohoa');

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
define('AUTH_KEY',         'dD}ov2x{)cRvBIW{S<%]LC)_@{zt1.o>2>3|>x.euIQ,wH56^I?}Ci}DT0GY6E7]');
define('SECURE_AUTH_KEY',  'FV;>jLo&?evwo(6<I(STuX[6eV--3y,}81`bXOy/$Fbi.fA|&8/RF(Du#,Q)fZ/q');
define('LOGGED_IN_KEY',    'ryHT~y>A1[7/IYY+q#PQw6 ca!)SV4f]adV}`6$KTdurn7K-nRBfSq51Xb#$`/9n');
define('NONCE_KEY',        ':V>7>2}|+P>lMh@:Lt{j3-sGj*R/{{7PiPOlv/0`/oyZ`4` =:M2<D&(}[Gb7>YO');
define('AUTH_SALT',        'FUQS[Y#&{T:2A|!G8Lv&m(,VQy>Q>w0oP/y6XuVPR?!TZmEG yT-%C2B9ehAXP`J');
define('SECURE_AUTH_SALT', 'cfA$SX~1i_+xs0 6i8W,)M<;M+:.k`ShkYsKr`-$1H!&xYf43;ET:f%9n+i7Rveg');
define('LOGGED_IN_SALT',   '#DASuQL:@UEP13nqE|]`o`FB$`%k0Q!g+$T!N;>^(W=kvg213O`lD+Q4^7f$f qj');
define('NONCE_SALT',       'O^5*~I5`DY56jTK/K$QA ;Vv1izhsdm,K|H|1a!lFFlN5;h6V;<5=w^xfK%xT@eF');

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
define('FS_METHOD', 'direct');