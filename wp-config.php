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
define( 'DB_NAME', 'medusa.local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'v<w25=5C$>JM2Lb]IZqHQ=Z0uuJ[}sgC:@82o+1*C^!ZQkQ{I>.F!hTl(MSD[^v|' );
define( 'SECURE_AUTH_KEY',  'LL:VBnu{FJ[ly,iYOGSg7)uJcJ+&Fz},6tq#{>:lO*&n8t4eb[(I3J/E.5uzwn5,' );
define( 'LOGGED_IN_KEY',    '[11.mm<7zam,yBm>>OLyKK?UnNYCJ,J0WQWuVNvu7Cg>4Zc=L!o&.msdc_63*[+i' );
define( 'NONCE_KEY',        'n!hRNe`NQoie:rWI&fN-!@)Uun2AyJOucyU5/nRIevs9yrGDI/IiY;jOD4h`okV4' );
define( 'AUTH_SALT',        '4,,|+p0zI2[DJLz#i2uO!Q+A6Ms$Mo=f,IEwbu<-~:B^cj(R{DX2Vk_`fm}-|UzK' );
define( 'SECURE_AUTH_SALT', 'Y&-bVjy_>~6BDG9X)1m(?q7sA6IdS.U{&S,#Bvv^% 2-6eZ/cWu(N<LhGDvKgj+q' );
define( 'LOGGED_IN_SALT',   'kJJ!!DQ$l^.;^9DF>Rd?t&l=+vHVd,TOg)tFr/{~oX!KsV#6$.Su#mz8CB;RL9BM' );
define( 'NONCE_SALT',       '}gDxkBSx<h/Z9|>>qMQ .~z)j$o{sqpJ6tiqEdTp_l(=RK|d^wH;[t^WJEH`3Mq@' );

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
