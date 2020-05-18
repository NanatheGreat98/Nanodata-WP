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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ann_art_dk' );

/** MySQL database username */
define( 'DB_USER', 'ann_art_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p8LjCB8nJwJEPPiaputCBLay' );

/** MySQL hostname */
define( 'DB_HOST', 'ann-art.dk.mysql' );

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
define( 'AUTH_KEY',         'L<YpQK;)h.V,,k?$^<b?C`pq?{Gi|;|<(PKidL[I$YyziVku()G`C_qjBjQ7xUM,' );
define( 'SECURE_AUTH_KEY',  'x+[Gtif3n}Z8oO$1H7dM15m<A)!9}l$+My!bE`-B#v>CSrX.581~bGJ(c5Etj(<q' );
define( 'LOGGED_IN_KEY',    'gi>6k`V&jR87eSGH`x|in|brH^6gyVYaO?o7CVJ8 IAxVcYtX]V0#={bK=;s3^pL' );
define( 'NONCE_KEY',        'CJAe@$[OT %cN=k-7!?8$rB~gQ#=Z=M$TbMvXt00%$#nU2k4-vH=I0(Kl21q|+iL' );
define( 'AUTH_SALT',        'dK9G2-#WF;)[d};K)Pb#YV!)bj]-)=in,Zy0!eTZN1pOg,d~yQxGA!HPu,B5W#Gv' );
define( 'SECURE_AUTH_SALT', 'lV1X#2B/GDKf/kUky`*#X4-xrt>y_Q{DUN/{!lyyo^[EM20[a},m$$hCvh-YA#46' );
define( 'LOGGED_IN_SALT',   'PAeX68~rO<soj|%.ZZW,J7Yo_LE)d]84VIfS50Hj4.HWZ:K+nRfmFduV7Uo[w|07' );
define( 'NONCE_SALT',       'e60/:zZS~v%X16{6f ,QDa$|=i`U+|cxH.OOE[-[:ZIx}bOL|8qC)+ rB,*v7p0x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nanodatawp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
