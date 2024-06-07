<?php
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
define( 'DB_NAME', 'test-second' );

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
define( 'AUTH_KEY',         '8fL&~#@ky3geT!^G>ft@B]8Qwf%2LgXQiv$PFt(A14AC2k(0*U`0g}$k03q=({5Y' );
define( 'SECURE_AUTH_KEY',  '7mAE9%K5pbeTGoPGX]qJqR#^LxKu]E61x^o@Kja<L70I8GUi&E&cH9R}FMGQjy)I' );
define( 'LOGGED_IN_KEY',    '+ThEmz0vWy.>24fg0CJ[J#^&`|1$&@yy.zl{mQ+J2=T[K0!tv$n0:*oddpcfB+wz' );
define( 'NONCE_KEY',        'CqkG7%ehq:NlTdWzQ*w1-8C&o9AgM$8T~[=^0VKB#N4o]@VdXzcu@.g.IT`Run?+' );
define( 'AUTH_SALT',        '%a|y5] 6@B9ua, K<ra|Z8fQsng3iCgyy>L1z8k5p0Y)d}&m^kdciK )vd50]y+3' );
define( 'SECURE_AUTH_SALT', '2NazaIpP:vpt/sItcOCobjeOPq<^8w1!oKrV@J[zq?5|!?D#4=K{kYgYiFmz1YW;' );
define( 'LOGGED_IN_SALT',   '<(m[Y52ei^6^[iHFGQkTG-&y?gIzuF%8kf{kMOVW=_yb[#mn}euq#)9IFsJ.|u.q' );
define( 'NONCE_SALT',       'x1tj]WwSt{Z1;$L&M@4X>`_fg3<LLzcp;B@^Et-#7-.kObW1U43P(#XW`s*E%Fk ' );

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
