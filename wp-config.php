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
define('DB_PASSWORD', '59156254654');

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
define('AUTH_KEY',         ';LY:kTYq8_Bgx6%DyLinvyvB(&;)*+DJa.ThXJ|Uav`meDOUi9xi|y0%1F1Jl*<@');
define('SECURE_AUTH_KEY',  'xMlvh~8tf:bg6ejMW=q)P58.94Q;48K}PzakJFS.]=3wjGXbc~:apN `E3KCmDkJ');
define('LOGGED_IN_KEY',    '>u*O,L,&G4GmR:Mm.|{E~[{SUY=<z#^yZqJ! m5tf4s9O|($zBYSikV;K8*qS8-=');
define('NONCE_KEY',        '!?Vo{:10iXq00Ac#~Df;MR_t8dMUt*q^cr./0pa6mhqWuVJ%cc{8n3vh6<(6aMnY');
define('AUTH_SALT',        'f,hq+^59a?(fXm^M.npl;[LP:]4.pEaK)A`jJy-5[6>6kF?o,{pp]H)J?AW!&$,T');
define('SECURE_AUTH_SALT', 'i>uR(~g3&nZxo,*/`b0ENhH2s%}`d@q]2pu4c(i?Z?|K(By/{.DT[=3/v`@j$E@t');
define('LOGGED_IN_SALT',   '6wk R05WRgUeko1#V460hCeanKS)h#`F@0$qgzg>8+Y= Bt~^YuDp@co<RlE[L_u');
define('NONCE_SALT',       ']seRkbB6dtD:qm=v .IEs{r-1R?>zg:A4`X.VtJqmq,%K3aA2`l;@;u.1*HAkR1#');

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

