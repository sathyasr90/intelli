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

define('DB_NAME', "intelli");


/** MySQL database username */

define('DB_USER', "root");


/** MySQL database password */

define('DB_PASSWORD', "mysql");


/** MySQL hostname */

define('DB_HOST', "localhost");


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

define('AUTH_KEY',         '#OyMe(92cYy9Pp#Jv$UR@S:>VnSh%ShV#EADt^vByAgK}pLSU8`J{@Tws)~;lo3d');

define('SECURE_AUTH_KEY',  '/JQa>-$q4sHsZWN9<.|%l=(#%x9is8Fx~sIze$%e0rc;N3)s2BOA97=(V<[h e4*');

define('LOGGED_IN_KEY',    'L}zB*bR7O`<#XdL(:M*u|#Ud)9[7)Z(bhK(5IC2cbK_+>D(I RIM9tWeR)+g1.;d');

define('NONCE_KEY',        'F@p.(6?Nt|mq>?IH{.P0nS+,AM;PvA4f;^0)nX6J?9QF1-PHZRY9oJO#<5nx~OCJ');

define('AUTH_SALT',        'N;GLNB]WQxP{ej/YU|`[;d#Qh/Yf3l^@/14;t:f|i]7Rc*V0M&14Q!B<HkE},~Zd');

define('SECURE_AUTH_SALT', 'mR#dN8aE^.0u3|]vg%15{e;%kz>e48<_T&oe!]lR{CnTj|5S1&_RS0m:g_W05idm');

define('LOGGED_IN_SALT',   '-?<Ph~~%PU2VU>Y:F+Vo+=4AS9B@Fs5H/fBwCh;!c?7e5#&!Vf0TF.`E-4#F.~{P');

define('NONCE_SALT',       'm4f^0W-?vI.srwk,u=u>ks~9(n&*(M-mX@5f_jR9nlMSTl}N_KKY_QJ)Dvvf>gsQ');


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

