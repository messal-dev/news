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

define( 'FS_METHOD', 'direct' );

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dep_news' );

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
define( 'AUTH_KEY',         'i;%j9 z3BQI2<S]j=n!B%99q@(2r7&qHZ&zAK4UXoIu>(Sfe5j%Ab3#D9~N/9(]p' );
define( 'SECURE_AUTH_KEY',  '|[C@$wT^3p(jN;^]u8pq28`(n.^)=~#W4Me.-%a9{&U;F[E`7ked*9?OlF^9!7JD' );
define( 'LOGGED_IN_KEY',    'f)bS6u*SG+Z3eJX I-PmWf$/{]@Ma,@PY&%;7ghOYFrTvG+1mVFEwZQeTIHp$%?I' );
define( 'NONCE_KEY',        'iZylU=N]6=9rke3R;fJW#S**HK~fJ[:X.@oX^[x+:<+54OUxE:TyhykbpHQ~9+g?' );
define( 'AUTH_SALT',        'fXjv^#5ynpY;#4;:/0r(p[6/u|lvqn>$3[ GZ<v(P5kiy0ENrC:-DK7OuLS4|v5@' );
define( 'SECURE_AUTH_SALT', 'o I<./Xe.*2roQ/rI!;r#^IR*]K1VXz?n!9?Xv9u<-~lUv_SOql&y.8;*v[juRH&' );
define( 'LOGGED_IN_SALT',   'K)j)/a6-h}$IpS<^D3%AEJa/xo$LHq*e3Agvt/[vJ`Ho0yRKMA.0@7L#y8~Q2$<P' );
define( 'NONCE_SALT',       'S>WSw]W6]~x<2X3u4iGi;_2j,sh5mq^k|Cfh5)^Rt;Z0+phSpwF{!)bmnWn&)-8O' );

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
define( 'UPLOADS', 'wp-content/uploads' );
require_once ABSPATH . 'wp-settings.php';
