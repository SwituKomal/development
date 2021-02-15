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
define( 'DB_NAME', 'development' );

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
define( 'AUTH_KEY',         '@{vf_q?y9M|R~1[Er4IC}Jr@C$=e4`m:u hF/76>Yy`lG >m&2|[W&6FuL%QE[+`' );
define( 'SECURE_AUTH_KEY',  'd$Ye3cV?7Iw;RF@EH8,ljt[%2g}tQvKw<>@8YGKq1?wPNpK8`+V7]CCI0va4R|B2' );
define( 'LOGGED_IN_KEY',    'kD,pMlg6p;rmqg74VzzLjo&q^ewrOjAMxH.,S$14{r(5nfgO5WW5.=pF?i;1:fQC' );
define( 'NONCE_KEY',        'gfHNjd,=Ka Et!Fw#+,JoajR1J&f>*E5 07onG^R-^[L-]%K`U=2U0]MeCG!V%MQ' );
define( 'AUTH_SALT',        '=J:L>+T/6n(U_5~R`2tnZ$~J=Ebz8JnnzvkK765^yI>GQPQ+{M>.jFF/%Vku-Kh^' );
define( 'SECURE_AUTH_SALT', '{[-dg0hIW&UDAS{`>aaw:w^NhiWO:dHm8>y`FJ[Jo.>?.;6z[og33:O:c;6[i2:%' );
define( 'LOGGED_IN_SALT',   ',q{y#{bih{W:U!Zv1dWX(h>.=b;`J0+lja+bnW<:^D1sli=U~OT6hiG87fg]Mes-' );
define( 'NONCE_SALT',       '6ls!uy=V:M^KROncr/76J{h{Hxt;MJ?afd.{tB)WDQ947zsr8?u0k-<S/H;fIzaA' );

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
