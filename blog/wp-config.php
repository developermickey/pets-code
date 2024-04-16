<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u102974783_Gg5Yh' );

/** Database username */
define( 'DB_USER', 'u102974783_Z6LVg' );

/** Database password */
define( 'DB_PASSWORD', 'NgjD2cQwb0' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'IMuvTUKe7q43ghay8%/8} +4TmogC|Cv*^z]#DiW#09|@o0O}!JY{L#4n7o^t~dS' );
define( 'SECURE_AUTH_KEY',   '-n]_L?gTIA/&1N?,RD/O]Sdhwq~(=OtS|[|{Aq)_[R@dVw%cH1H|/?EJ@+2y2`5t' );
define( 'LOGGED_IN_KEY',     '$(2iG~ qj*9*w3tj{KkN#?=~R}0/tp4)nx^13dXW&P<*wm,*~K]Qy>EY6|?y|VEJ' );
define( 'NONCE_KEY',         '+M2D]GK@+qIS.|e-NTZQ9o<WX6`F?DOSpot2 Ccytx!/!yG=[;]z|RO]5xigo+S.' );
define( 'AUTH_SALT',         'o/|KpyvwFk6A92u]eslTCW7<Q wz5*PX_FXb|F}j,8*/7_EIi)=7Mw=-r)DCx{/i' );
define( 'SECURE_AUTH_SALT',  'Up_`=m<kevjjk9>#SI1W0x|Zfa*yHkt|hbK=_tv!SLNC@(mu+$kVdYA3Lp.U!}!I' );
define( 'LOGGED_IN_SALT',    'iRt@+.M;w0K*%JakIXAgtAiE)8v>n#9hB7`NZ6Z,_ep2AbhJaZ,u{}SF}TCrdwm{' );
define( 'NONCE_SALT',        'J%b=1:Qddfme^m<3:I/.Lp)k&Y^]^T6n<}4:gL9rpp6_KSeh*ko{SFv/18;E-Q (' );
define( 'WP_CACHE_KEY_SALT', '%O[Wa{bhV ?#V`qm[pPbYoQRKnWd>((c<j0Ir{D0NrnvKiR|G`s4_3r:OL!)Z.}V' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
