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
define('DB_NAME', 'wp_obpc');

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
define('AUTH_KEY',         'eluxFAD}oP4~]m<w]Hk>g(J+N^g r &%OES/Rmo~GWf9gPt+c=abq<TI?Y~*1CRk');
define('SECURE_AUTH_KEY',  'QwF((l{*oZZea>e4n? lJ*bkW;@JZX+XQdo/xJ@egwJ>1w!$U-5nDm+#*_Lh!_VK');
define('LOGGED_IN_KEY',    'e]-0GsQkW@^BZM# ,CW;Ic|vXU_q_vp6q1_JqL$Ks|<Ikz)7/}(V|A*ls*qqUv9!');
define('NONCE_KEY',        '@?Q{#yHaft{w<(F`Kd;{kgRW|( R(n?,ZrR|*(z[vZrqJOH,V.fuVk;;XR?8gq>~');
define('AUTH_SALT',        'I4RE0bew&U::FilJgLjasq$ )(=G W8u5*!_N7OGE]6t:EPjO#mIwV,Btrg/*FR)');
define('SECURE_AUTH_SALT', ';PO#Q E1Qpv)(x9=3JX13#-0wgL!KxV1NQ;%sdUCO3@h{Cnm%D/`Au*#Dp3;:%58');
define('LOGGED_IN_SALT',   'o:76K-39qw7G0?^sGgZ?h;E6ygd-]+PVWIlJhHJ6q.# ee3:_9fUogMG<Ceg(b4&');
define('NONCE_SALT',       'p&/>OLiG(Q>LZbA)v2&Ws|@s,YfuY@+gVQzjHYikK`#]djIz.F?3S5?^_$[0`*3r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_obpc_';

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
