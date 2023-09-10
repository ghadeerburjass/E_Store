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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '(d?guK%RE9ncw4+u&`}Z<N:pP-^4!}oP`^KuijD>pdp!`/,1Ln&]5}_W/ro!RGB1' );
define( 'SECURE_AUTH_KEY',  'PoEfKDuxvZLAOE}6S~OHq?1Z~n<mF|l+MIccTic=gl+g!wEO/]|_W_uKs+Ee&H`b' );
define( 'LOGGED_IN_KEY',    '9=k:0{Y,VPI{&HJ>~to7V1XZ!3H80w#]Q|:1KN`&~Au{]sS4}2f$.}Go%ceZJ$Q$' );
define( 'NONCE_KEY',        '54fGU$%Ya>.S18^B*`G5:}2T:bnK^taFc=x|2B]v$,(`CP(H1TS!`?sqcqFg?#bs' );
define( 'AUTH_SALT',        'wL[j;fl>!1~AQe,PfzZuC340_0(sgth2B+8ZD:VT1R5Pr#vKf`r=3(NaX@wR@aYI' );
define( 'SECURE_AUTH_SALT', '/h#Nv6S6+ekp}Z`iEY>T._sxML)+~(Md?V[ 40h?L j41xetKS/j^3xcc~wr,CL0' );
define( 'LOGGED_IN_SALT',   'eY$EKt5Uv;.lRS_]e4Q]/,_.6,3z @Jj+^ZnAU{lo6D8gyS ,y=Ov`(-=FIgzHDN' );
define( 'NONCE_SALT',       ']=!qa)(J(r%eizFQaQL5):r|Pi3oEPw)]3/KW0>LC2sNC:!GOcQ=`27Z|o98?fHh' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_wtxs';

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
