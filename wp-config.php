<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL

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
define( 'DB_NAME', 'wp_drhealthcare' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&x2x7&d#BpE5~n5)y4@@OAmJ~ZHAd5H%c<=u2ZlXd DGs;vm:V3w1/770Iczb-KJ' );
define( 'SECURE_AUTH_KEY',  'XNeF(/&tW,_yo};fP7{uo%2Ry!N;%%. }7~G}N:A`7NhA[&6$QdX5Nm*eD6BH)M}' );
define( 'LOGGED_IN_KEY',    'U`,W)uyzeoc|c<%}5x<qqF>h-J(,y~>.*e@GI{d!*-RFucY-4s`NNJ[8tTTs{g`l' );
define( 'NONCE_KEY',        'rt0] %c[ZEBp5<k9JlU{#t0##6OwL(N^^F6;Y+a.qMR$Y)=lkeGO`z_]Y-rB/hr|' );
define( 'AUTH_SALT',        '|jAk97tWvU~njd _HHMHt5EolN,Y~.Un0Rp*V(NxDKQ2,zilM4E(9Zfv.nC-=,,K' );
define( 'SECURE_AUTH_SALT', '3dlX&(`c?&|)X3I)aE1xXU<JF V#h1Zxv<iSKt |XUImN =jo8Zq r_^oj?T9.3S' );
define( 'LOGGED_IN_SALT',   'a{6dN(AF<Wb0v^!O-77Pdk6r%p!5SZleXL`Bl:Uf{avtxa7mF hb*H}*[95Po&ck' );
define( 'NONCE_SALT',       '.SzLC*LWmywoO$e*@Jfm!N8t;M_},6c .N.FzW#urF1a[~M[mw)+4[mnLO<Hz9:7' );

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
