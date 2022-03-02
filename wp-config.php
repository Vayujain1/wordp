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
define( 'DB_NAME', 'wordp' );

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
define( 'AUTH_KEY',         'Mdc<jAN^b#1g)Mm@iWQaOB9WfP$fX}JE3u0zc&M}z.}?T(3`>qMC68lGW6aQhN7{' );
define( 'SECURE_AUTH_KEY',  'n*9}krO:g3D i&FOf%K9u#bxV^1qS`nZ!4{MA?KJ^hq>*ksMfs(na)2,S7qPof7n' );
define( 'LOGGED_IN_KEY',    '*m>?Q]z ra]t-7Xg4i;|Z&]=UL1X68xn`kLK]7~ZM.=|4n>N`OPXYa1FL?U~QJEo' );
define( 'NONCE_KEY',        '(?_:Q;Q_Z[W?Mo:==EtAD*#{^yMwW-30x?UpDTR`bG,myr`0b&P1jwXS[gR?E#iW' );
define( 'AUTH_SALT',        'qJE6yNfJ~MG9i>:W6=KKIM|tDX[j FlkWdfOcHxeV3#0cWWB!auXJj^fQ*VPCT)@' );
define( 'SECURE_AUTH_SALT', 'ba<T-nD{wEy_43xGu<l2GEvA^w2yv*&E>R!@~?W:{`>%1zThf ~^C`.3sB_unP)1' );
define( 'LOGGED_IN_SALT',   '8cPI<Q8aoBs.tc&zs!=(lEEDX(FjNW~0 ~Vf,/P!-+?j ~!<-wF$B?+g5w6MFx A' );
define( 'NONCE_SALT',       'ne/OkW{RBmU7.*OkPY)nc2!jal-&Qy+weugzwM>A8YN<3Xkqk|`2rNc_fW]fCoZL' );

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
