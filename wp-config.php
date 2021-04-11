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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '-WfEeo3%%[Uvv@IJgL?BeI0 u(t3t1:ae]?te/|r%Q5t+r G=%;MaA>VC3a3pKJ_' );
define( 'SECURE_AUTH_KEY',   '(ayETa)zbx-*VymHA6/i@5tepHLa6J7o?Z.O69 ?=6(n_h?{](R?~?]0241GNj>8' );
define( 'LOGGED_IN_KEY',     '2)NKKM=?63ar~gOu^Y3cN:T,!4WFdeZX6C9!t~)Fn2{2{&02g&UPa_m<$sMK_^EH' );
define( 'NONCE_KEY',         'Se<+{{n{I]p;I]oG&13E&Vy?qk;>[CQ(%)}7@xDBV,kp}J3wJ.Li~bJcX_2 :E<o' );
define( 'AUTH_SALT',         'Wg5[ &,%NHxy0TJ4k;qZ3+=m{i (KPwHIH*-OJ ).tn$G%}y#oW&jC^xKWuEttce' );
define( 'SECURE_AUTH_SALT',  '`&b,,fuK%G6*Qw,Z[yD+rF`phRPOJVoT*>j,~V/G9:?h9PyUFWwZK*4BcW)N^N?#' );
define( 'LOGGED_IN_SALT',    '$b=@~ZR&nbT_cvV`#4=3.ZB%{)KqJ >&#s]1rmM%z{sU?k>r9CS}ti=NYA_8q6&2' );
define( 'NONCE_SALT',        'qgRLf3Q$k22nb:[yg_/<{k>[xw>r?8U5f ;Qf2wp*d&aq-OcO,fp+e2w]GG#$oZI' );
define( 'WP_CACHE_KEY_SALT', '(V[9#UiWs%<.yPl xD(0Hek%;%ygUNzw.vj#P;oCn2<JjDBa0z=tqD[.5NwD`mX ' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
