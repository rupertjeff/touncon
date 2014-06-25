<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rupert3_touncon');

/** MySQL database username */
define('DB_USER', 'rupert3_touncon');

/** MySQL database password */
define('DB_PASSWORD', 'J&DGLxNSW.k!');

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
define('AUTH_KEY',         '}:3:j<c;SpdWrtD_@$/ #i&AAH| TI+:dlt~?$H?aYlw4D<EPl3;ujb2_P4o+f5Q');
define('SECURE_AUTH_KEY',  '([=wU,gS,N[sx_m)QN_@]0SL?rm9=Awwhx~UpAN?~4,Y|;^T6A6Pp8A|LdQU~BX1');
define('LOGGED_IN_KEY',    'jAFP_#}1PO%uC5|ezNO)K<1Qg!V11Y9!{.H>=Q^$U:0-eFY:?F-$f;/QuX>T)P7=');
define('NONCE_KEY',        'mA<f)!RP.6^?~?lEOMs|+v3z!|&IwL->3n,]t9*U<e1u+hlyV~jY6QQUD{Cr-&GM');
define('AUTH_SALT',        '!:l*$S>u5)bNw3|62Lz-o&BZMB5?!2?|go)12a_k+EYFNk%SjrfHt^CW+_tB@T~a');
define('SECURE_AUTH_SALT', '*HK|`,3l6`,zMK ~/))JTYXSG?zX(${4r]~E@mtuLJOQ+b8r5t% #{L;f+6|d~jF');
define('LOGGED_IN_SALT',   'W|+lz7:qOWSbnX3WR$+hX8.a~he61+b.q+xy5qIBF6;Ia]RpM_4)R|-j?>y1.sUB');
define('NONCE_SALT',       '1Yd2(px|0N^3}u<l]e:B-DFAXT!B#4cCQn@qVUq?/^Yj_z$aIH`(z6a[uowBpJ1F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
