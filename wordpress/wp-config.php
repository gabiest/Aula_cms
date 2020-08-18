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
define( 'DB_NAME', 'cms_wordpress' );

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

define('WP_ALLOW_REPAIR', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '/X>wT#aDxbtk*k.rAe p!$INDWL/M:yw]v8+e:d?N4k#$,F3CXPCW6W;|GaHa)2h' );
define( 'SECURE_AUTH_KEY',  ' l(m(QqriLkb) |{MdyvB)}D0f0:iA`RRuDP&H2+Qg}.6HGnHlhSsf6[O.!zSOK~' );
define( 'LOGGED_IN_KEY',    'JRf7fKT@8?`#S2Sf[1R/F`S-8Nl|F$Yg).8~N<dX.Z[!<XODh$CM*cs92{{w._6d' );
define( 'NONCE_KEY',        'LD^Hgo5rpae4aDW@mgG2}/e-IjzU44sL]>-~!%TI~!@>W}lN,IZ,Q6uaNJ9$Dkp5' );
define( 'AUTH_SALT',        'is#4%]m~Q9B2R(*$UqPbVXP-53FciO5${)V4qa$#5S8tGziRrT6zpmj:I+m@dO$6' );
define( 'SECURE_AUTH_SALT', 'M?x[F YOa-95MG@mMGA;*j2ZwAYL%9Op%-(Hh &z/17J@@S;S!34300|zuVf2g6O' );
define( 'LOGGED_IN_SALT',   ',N?{X]HWYS5 }) F6[EvG((J;tvkeKHicxF7.~@.__`}<,=hHsvJA7b=23ac&&Bo' );
define( 'NONCE_SALT',       '<z~JS(RgT?/YrmMF{mdqie(h)fZO-F8rwYuV_g#YVYvUr^SJ!t%G>?M-?FRF%y)h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gv_';

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
