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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '@4.P=L/idVeH.UZV^^kcO:ch%^J.7vH[[|a~QF[l3Hcc|!b@kY4RECu.E$Un,2`!' );
define( 'SECURE_AUTH_KEY',  '-e5}$|}PwDh;xEWk_f7`S~e#@T[?8^L#GBD_7??v~d8M+56HdmB:D4:*>,Kb#Z5_' );
define( 'LOGGED_IN_KEY',    'P~J]9{k[8*EP2I4rNoXf1=667fB`F>_nvHbki5b|_PR :66y0K`^a1Nt@Cc+2w.>' );
define( 'NONCE_KEY',        'k!MbU`VYn|>VUaPKmM`F~HR73A0v ;BPI.jQvcavEEQ~dlS{v2`b^=dqLo*#aZ^C' );
define( 'AUTH_SALT',        '3mt;&7-jGyrn=4WD5?-N%dYAj?m->]JyDk~1JzraL~A/cnO|xN|D)9h_ ~S!PZ^%' );
define( 'SECURE_AUTH_SALT', 'H9fH!vY55rN2H;7W/{*$DU E(|}PdJB=x$u;5c(^6{x1Dha<yh<vZVc|e,csA*4`' );
define( 'LOGGED_IN_SALT',   '>E;b}-tiiPdTXD+iwZ{$D0N+69%_?w@B*53rqF)!nQN;hduH[ %!.y145Mh,K^K6' );
define( 'NONCE_SALT',       '4q]S?WWA)j|/Ne<1e1KM|-<Ss`7_|pU5/P(JGP=%<W0gw|7bU -x;/3RCvcB;_4/' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
