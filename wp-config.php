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
define('DB_NAME', 'portfolioV2');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'tl|.UW%x]<)~r$5#ZDe,-mjB@qqng?%>P[65;(U^YLy?M2N/j|5gIqjFRQ:@=O*n' );
define( 'SECURE_AUTH_KEY',  '< |^Co~>ynk{#}aW*LlI<G_o*yw!98C;Q=VmxuIHpMbC&Qsp+?OuMTI+mt`SE*#E' );
define( 'LOGGED_IN_KEY',    '%cB1b7&KL G.(,:A]Em|7<hIdAI-_s+@B)fSzhsu$&AWV::=SmCb|5}%y%VHfb4<' );
define( 'NONCE_KEY',        'j`sIO&[u&48%nLg{Xc&P&J|5KF.uiMGbeaaG.[F~W[:a7A`-Zg9A@/jX]m _}xHM' );
define( 'AUTH_SALT',        'V3P7^Mh+eqhzxt^5FHaw6j3dNPk8b!ve dI/v|_SJI^GZW%#sJWY-8A~Mefx2Q]f' );
define( 'SECURE_AUTH_SALT', '9 ><]_,UI$K/Q@f1;=t=aO1jGLn1xrmCW<#nlVQ,IqZU49^0w^5F(.$n(59JOYH(' );
define( 'LOGGED_IN_SALT',   '{Q`XEV}aohc|Zp*0a|0=,V(xq$WRfn`S:F#oEJB,OywM.lk|4~Civ[Z<_9=lGE&}' );
define( 'NONCE_SALT',       'N-GB/&x6:Bo!e5(s V0T>lM!+DWv}$BlfF=?tK#m^Vt8m3.cL&^vD?6b.IOEr%5;' );

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
