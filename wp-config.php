<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'motomoto' );

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
define( 'AUTH_KEY',         '!fXwC1+`f[x$g+@w 6|T, &OyQIHS?>aBq^M2!WKSskh~E[g44MTR[[VblZdHGEW' );
define( 'SECURE_AUTH_KEY',  'Cf1:gN?Fg(uc{uLE{@MWQB~AVq7p$g[qS{QkT##>z;(WT%6<2II6bl#Yn-)ZN~h)' );
define( 'LOGGED_IN_KEY',    '76^B#,<!]XYH|-@V?<C[:+OzpC!8she|}uN=JLG^!sBrwWhUp&UFc5Yi^d_qy^vG' );
define( 'NONCE_KEY',        '7qQzQ>qL%E&<,biG9daYv2`Eb&I;>t>&.bc}Y/E_Yuv_]Qqp1i{E,7p%XgpnH+M*' );
define( 'AUTH_SALT',        'YrS?E?z./?wpq#u$N{qrgcigODb)}26H+sJA<9{{Ia&7!<46[3sTrt0qm</#DyiK' );
define( 'SECURE_AUTH_SALT', 'dNreAQ|x5Sz/OiuqZ!m_oC0&*f.=Q0iS~Cd(@,<ciNFv7RUSfaw7/t/ous[5}~!]' );
define( 'LOGGED_IN_SALT',   'XX)~mi^DTr BMT|Q!r)gsI0p[S3c3;D2dVZG}<:W%s@HP?;4 }|K3}$VY$XJRW]L' );
define( 'NONCE_SALT',       '3)Xn`C2y(9jKzl1,rxp2TfJ*D%6xmu/=jD$]I]pu4{/{K9wJEvVWDSvkEH|v7{jK' );

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
