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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'mehan_db' );

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
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '&Ovjvq&tbLn7])xe}EYh_3|qiP9Ek6dB{s FbL-^ H_C4g%w6qw58s0V|uZLcK?y' );
define( 'SECURE_AUTH_KEY',  '!x}N@06P)HOdfO}!q}(29TV[wfQ}kwwmKe,K6.A}uIi-[TtY/HQT{T]3-K;8s@vm' );
define( 'LOGGED_IN_KEY',    '~1=9IHa95AL^;+he/DjLt`,>V)2kS9Is`!vGy$>RcS>e{stQ _Yz8%=?6[N)a2&B' );
define( 'NONCE_KEY',        'eq6WEJ=Z1-#ond3QOVRQ,4.Cm:!f,.aX(th^/kn5F2<T Lz2[U6NzR|2al}Fz[B*' );
define( 'AUTH_SALT',        'Q[}zWcIx)u$?aup<Ocvv_Tm;.NU94ByG]^bsPm_Y|N{:s$EN4mJE&a)=zZM1A![L' );
define( 'SECURE_AUTH_SALT', 'Pbt-!wZ/V#xPzHzHze6?_`uz;F;R^DQ<y2O2OKQfx>m!uhq[~40zzYcW{U.]YGHF' );
define( 'LOGGED_IN_SALT',   'zv(PMjZck`nH:nPWpP6@f1*cMq3.]}*NTLfNr4AA{lY2gf7n[|zi(3lQ-Q#}kH&J' );
define( 'NONCE_SALT',       'y<X7(Pn2Pnd1`7?+w8QCblsLn.+XPN9.;}wt`DDXmo5E:8}XbS!yxrgsc){gq-0C' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
