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
define('DB_NAME', 'echoUA');

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
define('AUTH_KEY',         'Vtc- %l^,LPP;Fb{W,eEiQ}0vB`d(u60|JR@4=Sup{PxtdTu%I6r&AGuhWIB_*DZ');
define('SECURE_AUTH_KEY',  '`ZpsTERL>-RP:{i:&Ez> r{F{sUEG>BjwtP_1O67F5M76lvm)*-LE$eC#Vx#avG6');
define('LOGGED_IN_KEY',    'ioQ?<Ah9m$3tZ33ML0.3pZX|J~#-eSaqg%&LnnRA!%@}}7SvTM(ZOb4}>Zfoov8>');
define('NONCE_KEY',        '_T;~o)K(Jz[|fW.;g5=&EEnU5BRx|DiVDaJ3QAN-wPn![G<AI[ci%+!/nK[xrRv&');
define('AUTH_SALT',        '];j+BEF0I2fX8;F2HsQnQhn{q(h>Ga_?{Riv$-),3kk<iARS>u(&pDeV2w{Hca/]');
define('SECURE_AUTH_SALT', '3$`cY@vlB&zR}n}6lsTSFG;]+I>+2_pK;/UndYTY`9z?DuG)oD~W+ *]Ms:L:c_K');
define('LOGGED_IN_SALT',   'I?`9.Ax<-6fM1Fi9OpWp,VZG1wT`KUn0+WBGhfl2rz6V5kFJ +wa[tP+Npd8<2X!');
define('NONCE_SALT',       ':qmZG(4^CTK%&$Lok}Xhkvn}AR@B,*9A$3u2<skjb(9B+)XB9iil$wKw&)G4JXlV');

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
