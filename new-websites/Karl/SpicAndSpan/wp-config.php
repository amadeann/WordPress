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
define('DB_NAME', 'serwer16331_karlsas');

/** MySQL database username */
define('DB_USER', 'serwer16331_karl');

/** MySQL database password */
define('DB_PASSWORD', 'DonaldTrump2016$');

/** MySQL hostname */
define('DB_HOST', 'sql22.lh.pl');

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
define('AUTH_KEY',         ';.urqY5a*A?T)m8gH/9W*SDh!_.EDHkP+8%S3VVOJMZj})C D).e7xEVWn-mH1g{');
define('SECURE_AUTH_KEY',  'G,IORt0g}(.V)t}n]N5V:%r!8EE/k+CUEdl;W!t5/j8mPE/Q(O2W;P|Q;mSYNY^e');
define('LOGGED_IN_KEY',    ']}WnnD$kNReK2soo}x8Cs!_M4kSknXX|Vxl9{S}s(bN;s;n6#$gq||A?wvm$bL&6');
define('NONCE_KEY',        'P<^{NY@fyYAFf}{<4!@,jBYRNw28:x>{,X%TU[WPhO0`%@8f-;]VXudlTl;FI!D/');
define('AUTH_SALT',        'BsAbeZDU<y40]H1CI6<$~J, Y=B7x`vV_KVsA14KY(z/]iR^g|%@49^~tuoK7z#B');
define('SECURE_AUTH_SALT', '1n@@4>viY 2mIlM}GcIQ%phY~}SZd+3]%.0f6$(;{_n.Z1O(/z~N8RpNAfRW6mkN');
define('LOGGED_IN_SALT',   'SeH4ajen Z?k4Q7.@2^aenvSVF.JjrB=)&U}n*:@TzM1R.mN$Z|vRY<JFn*wwoa6');
define('NONCE_SALT',       'G3RYWw$]OXiS{^x?)/rMk%.*(seVOm~8~-kU`y4Wp*=>*/V{=6oP?bAa)FfYIA1n');

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

/** Prevent contact for 7 from adding extra paragraphs to the forms 
Solution from:
http://wpsnipp.com/index.php/wp-config-php/remove-and-from-contact-form-7/
*/

define('WPCF7_AUTOP', false );

/* Making sure that the setting is note on the next line */

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');