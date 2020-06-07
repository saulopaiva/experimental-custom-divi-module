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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'y;Jeu64-!=E!8xBHcn6lPBy=v;5#N2uun]3|Q@UP3uoH;UkRJbL7FKssa,[u iuy' );
define( 'SECURE_AUTH_KEY',   '<[[bM?prh6]KBVf<J^GbgiRr+m(}L`mR&^RGh)P5Wk61.smOP+&&~XshwS/s#$N$' );
define( 'LOGGED_IN_KEY',     'l.v`9US33l:CE>!ox]iZCa:C>@U;r[0D2?s>%#VWdB[fXwt/xjdbG<Om@})2h=-F' );
define( 'NONCE_KEY',         'kVz)RZ*81iV^H+X<uMp1A,|VBC?#]_;A_Z>Hz*df:ck+BkDM_BkcDUMDiL]Vc]I+' );
define( 'AUTH_SALT',         'q+,^Ujh_#sjJMdD4ehlE,]wGB!ire7C;IMs!Z}G7,i,B8@{=@;zC7<60j$US3P[<' );
define( 'SECURE_AUTH_SALT',  'lu]ps9^R>SF6H6#9-tZXIBIm^Z@R2x<XC0$Zq?~BYO=40~}En4,oQXuN/)*Y5#:%' );
define( 'LOGGED_IN_SALT',    '`TKZ}ZKUPILHM4btGsCMq>{!No|bd,F%EaCpsj#|>x4f vOi@g&xVO8V}dMjmozU' );
define( 'NONCE_SALT',        'HcZCEzGrYHxFQ)0[-a*EOPQ()=(`&O6.NO%5<eiSv)=J2N:!t{ ~nd 1Pu>BN~.f' );
define( 'WP_CACHE_KEY_SALT', '/x8`{K<=A,|=uFU8%Q-+b`x@jWsiUBw#!4QpxF3VPvC)!fxpkxwba6Uu0+o+h8.P' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

define( 'TOYOTACOMPS_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
