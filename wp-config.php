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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-github' );

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
define( 'AUTH_KEY',         '?S*=/e%vJ<82|b,x4o5_3t@N|m678/7hQR0&0hX#7xquPz2c!3)uF,<Q()NfEZb;' );
define( 'SECURE_AUTH_KEY',  'q!ja[vNE]nDgN>/,moHXO+.XoAA~WIS~NskL47:%9c=<UU&@(}d-g)x^_cEurI1H' );
define( 'LOGGED_IN_KEY',    '2h+8(JW`-%e-|m*.E%HzZK70SuPfcRIA$s4cilS]+W3++k9R3%4v2x,5H=;L>,Ph' );
define( 'NONCE_KEY',        '8o#p7%w&>$|1U`_cq{/DMKkx wv[K&bHI.sEVx5v]NGFLFrPh@y1X{=}$Ko;LX]%' );
define( 'AUTH_SALT',        'W#sIkT52:jW* P&=q<E)ynlVO1TD(1T0.8Zwiq`Q`P2?m[S!__Z[[naE+-UZrSL^' );
define( 'SECURE_AUTH_SALT', '*xaQtJZ9):bppRRyIn!eY?$fzvi*EUSu-m)ORh`OPNN,8!TL>h78DTxoC_u.]%8A' );
define( 'LOGGED_IN_SALT',   'URrT{r2$Gr&aN#fh~6o@W)}mq^J8<cCU,.L_x>EEr9kvnOa%!#TE_(#q9ba]Keio' );
define( 'NONCE_SALT',       'FbZ/~C,?s!ag>_-mvw};qo~,#}R-Zn/N=[#`Q@(Cm@F6QHi{E2>dcEZPk$WLvoNn' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
