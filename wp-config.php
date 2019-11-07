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
define( 'DB_NAME', 'become' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '+@pM=bQyxC5g)DpOF<h,a/eF$MI&PI{=0|nU$pCVy-9t^wv)*7l8.PJyx`DCql}[' );
define( 'SECURE_AUTH_KEY',  'Z~Z2g)K+Q+*~_P.6|D/%4f#X_n(e9<UP[i@[st~XVI10&Rg%39z|/f]K,{dnbg2A' );
define( 'LOGGED_IN_KEY',    'g Vn%75dll5J eNCX,{W8|K{4FEQ< }qQ`dqsk9:XVGXCgCGg4(-uiLN8q^o=T9(' );
define( 'NONCE_KEY',        '~E~^2P(?C*jHSD)qxDQnh(bv7SWa?CO06?}RXedx *:nS;K{AFf!S?2f?[;qdtUx' );
define( 'AUTH_SALT',        'Zu6eC.i{EIMIH!u(yEj2?xoj`N[1,7fnq^d$r@%2/Na,`+qb4MSzP_>5pWfqEfV4' );
define( 'SECURE_AUTH_SALT', '9.Ck2@D754c.x+c I96(PFnZ+L^^!F>{[,!E?Y3Y6u7Q.3KVr*-!.4n6kgb)r>2[' );
define( 'LOGGED_IN_SALT',   '._HT=ts%P Zhv/FSN`^{!6ico.BvP}Ufr-iy36$;J3)@1eCFB(|?%K0(!-YD0W4@' );
define( 'NONCE_SALT',       'ga?gM&3<nq{B{dB77^#s2YvrAPbp0bxRGJBMNdl^A5C6]ZIAsqLpE_^G(a?].B|t' );

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
