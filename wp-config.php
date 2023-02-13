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
define( 'DB_NAME', 'okb_landingpage' );

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
define( 'AUTH_KEY',         '@k@58+m4x3l3gf{cVi1rk@yO7JdxTVr6}jE-z)y-5 G@WP^SrIM~_MPEd]F8XY;i' );
define( 'SECURE_AUTH_KEY',  'UP5f6lj_aC!AT+j+DzP#7nA:+an&)gNezPk^#$DrFWKXgOxKNO$`twV^u)X_+B}y' );
define( 'LOGGED_IN_KEY',    'Qhm/L~ a-v!E;T-f;thLf)a6hscbk5H@^QQUC8PVe>}~{6JDf?KO4d(Uc8>o0f3$' );
define( 'NONCE_KEY',        'z=7sU5OWihW1ci0pe0(`ag0*4]Y>|T<igB7tqGT;+.)zL,[o?A31LJS- BXbe?uz' );
define( 'AUTH_SALT',        'G/hKD|)&fT?~m$h$c<!=AK+GUXR`n,k`%&)XIJ=Xi%xNPu?K[|]rE3./JdI{:JTp' );
define( 'SECURE_AUTH_SALT', '%LSdR;WfbHEoNrht,t S1S;hJbM[b(Z4AD&fFS<DX8o@cRYm&hq`P,s.3Z/UA4=M' );
define( 'LOGGED_IN_SALT',   '3,@tSF{U$`}8E*3hbp@,oh:]t9!AEhCkIbTQBl %WR0M`v+O^N]P?7=C6)4/y*.7' );
define( 'NONCE_SALT',       'G4.3!qT1iu iVW9`t.=|JoYOAzv$!7%B!?,Qg:rRCNs`jbdIewVEj9dC7bUD6Eau' );

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
