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
define( 'DB_NAME', 'portfolio-lubara' );

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
define( 'AUTH_KEY',         'sg/HJG%hK&RU=>p#K2rF&RVD-vdS#E)57/%Jch1wK!EnZS!l]:?<@?(H?@l)H*_4' );
define( 'SECURE_AUTH_KEY',  '2(7~PsEJNA6fFKt$9JBGg>Ok-@MPdFig =b (Fq8inG6h,6^@`~xrwlDGkNa`9 Q' );
define( 'LOGGED_IN_KEY',    't+:>1[f;,&P*OiHy6Ls;?es$B`w(r6Z_^GZoH|Y{-|ytGz2[?zuAUU$Q.U!#4juP' );
define( 'NONCE_KEY',        'TUSPYwh(=B#/p56TrbSrD? SRq CcEh,G| /4Zarf#c2U?M#fs8b+szIrqxc_Kr<' );
define( 'AUTH_SALT',        '/<w)h:V._pV||~9p8~_&~F+ef3^g/ThwJBYcnV9HtrA<3ew`.|6keDS&Q)=Ev8.v' );
define( 'SECURE_AUTH_SALT', '^i8HA%:ya$hI[rb!69zc+]O8xGY)+qsd,&nv+<vBL@oJbd,XGl4YW4RVc*o>&/}z' );
define( 'LOGGED_IN_SALT',   '#mOr&soW%%I8?WL]?8L+4h2@VxhyW>!BD;~Ln;C_?Ua3JsXMj!hrC5cs#w?]Cumv' );
define( 'NONCE_SALT',       '|](=s[ggo!5cHvhHqAffF!7,H_0QG{:AgtfmM+#~:bf~s+MCgqVo=H,>QK&Z;Mo*' );

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
