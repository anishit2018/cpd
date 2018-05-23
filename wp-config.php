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
define('DB_NAME', 'cpd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'secret');

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
define('AUTH_KEY',         'uiJP:d}p~VyFTkO)MS*KyyK(~3)?^#F72:DH+Fr^0^(M%f9{=6+`z,}&-W?Y1;>Z');
define('SECURE_AUTH_KEY',  '8/]/dJ`lhEuVT{t1Il{38;Z0:KH-|p?7J!Ep%9<<ZJ~K9|CSD)k*flK*%]R)~XCz');
define('LOGGED_IN_KEY',    '5/AUI<KOs-a<%h9lDe^JF}TF.E)[[>/~Hx,@Fm=/%cQYF] ~S+?ZNAaN6r+lq}ft');
define('NONCE_KEY',        ')~G*Vq<p)o;Mc7? nv~K$-2c!gQU$BaB<p_P]T.4(rW1$&/_^h<o4XvS!2L#L@c5');
define('AUTH_SALT',        'vD>=1a@`)#ouYtb:S~XGN;-j?;g#g|]M$um4$ew-2)eS=sD  w2g;];59:^Ut/W@');
define('SECURE_AUTH_SALT', '5b`P: NF C6YX,&dxy*u`n,p;WHV^pY&sx2{Z1z_n%eqF1t_][9S%T4M|N 8Mz/ ');
define('LOGGED_IN_SALT',   'utR@M<V@0B0bJnZ0+EKLf;#G#96$qEmsQ;BnGt?&%:Q9S7a-{A9{:uG5)UvBPjF&');
define('NONCE_SALT',       'ZUX1lKF&y946PRU(TOPNk41:F%_x9^hW GKdwDD27RFdI<Md_N<eBA)Frs))i$Uc');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'cpd_';

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

