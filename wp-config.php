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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chantal' );

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
define( 'AUTH_KEY',         'neI7:@cB^.91{:V@C//`Z`M.MUGc4v*3SM(&9RQ:m=4una*mwE,XfHp>G+$DZ8Ps' );
define( 'SECURE_AUTH_KEY',  'V&}N9&1j72t1ipv&fFzeWhAqW0p]p]Pf~5@IH;T%o#2Wm,iRqUOd4/d2I u[k5QV' );
define( 'LOGGED_IN_KEY',    ',R3-t,bqroyVcb*S+SI<i}t&?{b,6lOc^%V5CN7)HdCt,3-Mw-H/ ::6nD+nF~Q|' );
define( 'NONCE_KEY',        '^[]d7ADYr6O+GP!pzGXG`f_3+sySt0:n)hLdjP.6gNS~Z&:)nZcLpdKzW3(/pYX>' );
define( 'AUTH_SALT',        '%UNdpZ^13gKPAKqAb|U{/bzdVX_B830|y5@RYak[}x_8m-zFtCN)E{v$MT&dp&S`' );
define( 'SECURE_AUTH_SALT', 'jA&Mq(g%mN&:~.upSV,c/)9Z&_sB+pZXcH:@d+qIv)0,p2eh:$`W%S-NQIlIm~`>' );
define( 'LOGGED_IN_SALT',   'j)^4n9=Y;]bMNk/wWhzyY4loSRI#R<^@haBReU %f1B.Z#;YVMT<Xd?<@EQL7^qp' );
define( 'NONCE_SALT',       '~dJM@n!w4nLK)}DIx;-V;ek6P)?J^p?E*jni,,XWvy{ Pn9sPsf-F1x#FXPo6C9_' );

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
require_once ABSPATH . 'wp-settings.php';
