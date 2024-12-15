<?php
define( 'WP_CACHE', true ); // Added by WP Rocket

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'u799500030_srm' );

/** Database username */
define( 'DB_USER', 'u799500030_srm' );

/** Database password */
define( 'DB_PASSWORD', 'K=Q2Rn#m79~M5@8r6d)-' );

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
define( 'AUTH_KEY',         '>(`gr1qm[DmS>|{f^k{V738*jQf%6ceG5y;d1>NCrET7c2A+`JW?#7)XWlt0]0n*' );
define( 'SECURE_AUTH_KEY',  '-1l7K[H7#xbEbh!FX~[rZzs@<E$2SxO[ 2A).? 6w?kZfTb*;#LKc]=YRk+&Yxta' );
define( 'LOGGED_IN_KEY',    'T!n@D-]>p/:;Jyl,:!_?|RfyFlD^bizCs[;$6WGt+pl@2#3[TBJ2cTOG)D>+JMXo' );
define( 'NONCE_KEY',        'AY[h4bN~a5/D$Z~IYf1#GCRz<&R>5Gn`HsoB(!Op0<upB>yRE.n_=G:_CfIuk8%e' );
define( 'AUTH_SALT',        '6//_&,6bv g:zD$;~9PId@[T8;kO.IsxpTaT}/wb/UK+XFU}4oh(AOje}d4W T]i' );
define( 'SECURE_AUTH_SALT', 'sa ~{-m_Lb[y*[@M{X,mR/Mcs`isPsFM)A2_] :xJL={5 QJy_;LZUk;GFr^f_no' );
define( 'LOGGED_IN_SALT',   'm5HSohL$h,Qv-GhN e.l8~0&6=|ZVQ@Hk;{Xol3.6s MF@J1k9(OO/N<6a@d{s:J' );
define( 'NONCE_SALT',       '`}Ep]&{jtwu>5 zdnr#[Rk~GUY>8+ylL@!Xu Nm2%F]LFs`<S;W>|G;,$cN .RI6' );

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
