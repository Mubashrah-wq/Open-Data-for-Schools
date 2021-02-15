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
define( 'DB_NAME', 'dk_aau_odw' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '');

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

define( 'WP_HOME', 'http://localhost/project');
define( 'WP_SITEURL', 'http://localhost/project');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&X^8:1Ju4-&VJ-s7c?5wD#I--!:uaN;>H= Q?|EK5tVB^`3Q6oR$-D,?7*76BuIS');
define('SECURE_AUTH_KEY',  'n4hT+P~--5$x^(q#%*$Tw{^#xG*f4)XGr14BTa^x+EQ|m6_c[/0w^kTM&nyh4.i_');
define('LOGGED_IN_KEY',    'W#hY0,Vg7;rX7l0s:UIgYJ7b`4C7qjR,<kj<eG<7=(pRGdY~m6=ZOukU;xBbcK<z');
define('NONCE_KEY',        'auW|fc2vpC8TUT{7?>idc*@+4l5Yz8D^tRT>AD/ff8#Xvu;+;8&zn?lS<@Lu)prl');
define('AUTH_SALT',        'H=4+bo=-e<m.g[m(.{B0Pn>m^+$^)#|Z/6Dc a|xqEUk1WC)z@J8<EQ$a[3)T1jI');
define('SECURE_AUTH_SALT', 'N*]SFa#oxY9Iog^] NMery6o54Jk$(|S5VWtc|p}CZ|~8I]=UWxVux>AC_qiH^Z|');
define('LOGGED_IN_SALT',   'dlE:mW:/p*M}^H%eqPWNC-a~-72kx8|nMzEA]F+1TGG]mkvI-/1,t2M/1i%L&xr ');
define('NONCE_SALT',       '_]uVtsWDyH-E#N<J5??od=3j|Ip]5A7ofa-BK@+{,uTY-L._3pm|+>c<8lqy4D*;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );
@ini_set('upload_max_size' , '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
