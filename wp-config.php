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
define( 'DB_NAME', 'vdq' );

/** Database username */
define( 'DB_USER', 'vuongdq' );

/** Database password */
define( 'DB_PASSWORD', 'Linh123@' );

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
define( 'AUTH_KEY',         'gp36nr:S=FYB(n^r7;2/MYjJ~L?ku-w8wQz1^87}MZWZ6=XZM;rI(=Uv$7=a|6l)' );
define( 'SECURE_AUTH_KEY',  'Zy|gwfBYtEkfFE.u-*5PH#14:$|IWs+B{>-D.z$.*@|]q=6&M_p#mg3geNaDrgXm' );
define( 'LOGGED_IN_KEY',    '}#Jd^Q)x)^Ma{rxZ1m&8F{ukGSHq&lIo0Vnc*5jSfe::~Vw1Uyyc[f0NjtE(<=[N' );
define( 'NONCE_KEY',        '{MQM;SO^vL17[W>G2a2]_u#V(7,D>vmY++zPVce)=s/Bo5})@B-,nW#{,-Ln=mp{' );
define( 'AUTH_SALT',        'PuYI|GosQx-aJPzwl-T$]To3c|AcfY-?lU QQ|R@S*l+4*&*$y&F#zK_mY>%3HuN' );
define( 'SECURE_AUTH_SALT', 'd|?yY!^6-;WE)Z5156a^TAYIXp91A<#k;&,Ws#K3t&E;i]dkkC4lR1XmuT)A)u7_' );
define( 'LOGGED_IN_SALT',   'wml)w^j]}[5`mQ^qDOKP`A]f^r?K&{{voM?o;]0h$A8bm?itrK.-*o,],{q,!:vC' );
define( 'NONCE_SALT',       'cxayZPUW}GF1}LaGR[G7rOKlfix_*NMq,wS>fvzgzm:WO%0^J_U;jlYE6s)UFcQz' );

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
