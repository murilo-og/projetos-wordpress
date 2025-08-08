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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'psigiovana' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD','direct');

define( 'WP_CACHE', true ); // Added by WP Rocket


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
define( 'AUTH_KEY',         '>r3i}8wyOa6vFVA67LBI(mPUCU{G+L??o6tIhm zgh-a719fkhj/vi8KcfwXhlef' );
define( 'SECURE_AUTH_KEY',  '{`/u>U[Y.nqk=aur]gz(n/vuLv6hLK%eV=w*b}1#?qwZ9Xvxt?}n+#rP(.*f#=O]' );
define( 'LOGGED_IN_KEY',    'nF]wi_mcgzK(>} EW3NPJ1 X8jMM0?zUN5#^/fcXa1JxD[?@-y~A>6gvrvVAdEFj' );
define( 'NONCE_KEY',        'nCUaSarwQ0ivq:IG*gmGn&07]J|<FuQhAdb$ScS !4$qsUwSi;e)6J qg~=:Ud+P' );
define( 'AUTH_SALT',        'm(DmGEpdqHNDn,&-+AIlp__]Kwp-*H /a<Azxqt$4}I&rTffX>S+r&sIe5p5PuU8' );
define( 'SECURE_AUTH_SALT', '8=CWTjudt}tmMV9:yyB(yzmM1dO!o/1S{1]E_R)tg5N%XlRGH./X9 Oz;gyP!I,d' );
define( 'LOGGED_IN_SALT',   '3r}4jdktg{50kNl?zcv`H)n9|lWidv%]=^!-ur`etXnl0W;dtEcSBMT!a@0=nW1/' );
define( 'NONCE_SALT',       'Dx<toq$m_<n|n`;WA:{_S_UU` Qw2zk=mK0EE9[Xy[TH?D_1k_llGu>^!ih(2 gm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wps_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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

