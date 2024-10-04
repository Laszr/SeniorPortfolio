<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{$vh>3zCQzkqvl{7bwyO4>B0HLaR%W*qI7q4%3W,2:A6/[(DM-/QV]2-b`eS#<U0' );
define( 'SECURE_AUTH_KEY',   'Eid0qBcPKB(9iAia_,kC|[>@6zs;1V}W(%wLr_,p-3Qd9z_qE+uay{r~I+sl:4Eg' );
define( 'LOGGED_IN_KEY',     '8]msum2x,,/0ZxegAjej0KXcisjDekPg=~q%ud6F&q-!Bcv3F_ qPf9A|v7TF3C+' );
define( 'NONCE_KEY',         '>AOCYyY,p%-+~Tz7jIbB>X)XOzP#Lq0wlUOadc:|9/~ VvQAQ]f~U~Ptf;]Lf~4w' );
define( 'AUTH_SALT',         'PX^h&/a0e<:7a#BxQ6n#o[S;d%DKR.N,SjD=[,dT`A5/Sv*,If&4zx%1%7LHtvEf' );
define( 'SECURE_AUTH_SALT',  'm{Kf26CS($GL-vO0nI-5xRHt^*`_3^]QwwE/Wce s2^6adSf+4tp]Z+>hw~){Oml' );
define( 'LOGGED_IN_SALT',    'j[><ie62_pWw)8LS>(:gFBPg}Dx+<6f2a6O-2Y;mKe^5^0hXXXKf31UU7N-y:gw<' );
define( 'NONCE_SALT',        '7a0r;+^,+!j~J8{CF`{p]WJkRM1bQ1L=n)[ye FwB|KOPU.J).ujLU/sccU]@)}v' );
define( 'WP_CACHE_KEY_SALT', 'ZXe>u`kpv}g5X)a$Gvq1v-AHJul$Xq6NumJ|vw}>j6B8[in&v,Ytn[/bX,+^Nv^ ' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
