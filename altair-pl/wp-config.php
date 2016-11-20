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
define('DB_NAME', 'altair-pl2');

/** MySQL database username */
define('DB_USER', 'wp-admin');

/** MySQL database password */
define('DB_PASSWORD', 'DonaldTrump2016$');

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
define('AUTH_KEY',         '(Z|Ji0lFc#L+`N?%)@_]wgG85[})i==mpFV1&%Lg_o5TbCwzIyR0Jph5B ) AcxA');
define('SECURE_AUTH_KEY',  '>s@,qi#d`R+ezC6y=I-^P](0;s3vJ!,}OY>rzh!OuE<KIj^wk--=h;JWjoT~~OkQ');
define('LOGGED_IN_KEY',    'e3(=F!b^~hGE!@;hRR~tF+67}{43hx!&vc[!4Xmx:S`$Lq1pgy@9<jUyvmrmuv;)');
define('NONCE_KEY',        '?%u~VUtX,^Ge*lKkVZvD<SlqF|*Ob4yU(R]Z?)GXrTAsR[,3ND&h*b#kHnJ@R57t');
define('AUTH_SALT',        'Kp-#n.c%?!5{l;j-XU+r9]&PiPH8/dhINgnonfNFhn*5yL8UeXI?+YedAb]gYrfu');
define('SECURE_AUTH_SALT', 'EosKW,4[Nii_L[_Kmc7;A05N3-!HNoOjoWN?.+y-1Wq-S(%IGP`DDe[9(i^DeP}$');
define('LOGGED_IN_SALT',   '(Ht#we;-p~RDPi+N#2t]LY0zQusw+D$n74v6e[rDb2&;X3~JBC-J03|R~j T?WdB');
define('NONCE_SALT',       'nc9j`UP@Y=7.ywweE:$Z(#aMuOw!IQvv{rgw&[j<),LpimM(Lo!UL~?4Wu-EvJtD');

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
