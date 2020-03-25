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

 $local = false;
 $useRemoteDb = true;

 define('WP_HOME', 'http://duluthdiner.com');
 define('WP_SITEURL', 'http://duluthdiner.com');


if($local){
	// ** MySQL settings - You can get this info from your web host ** //
	define( 'DB_NAME', 'duluthdiner-com' );
	define( 'DB_USER', 'wordpress' );
	define( 'DB_PASSWORD', 'password' );
	define( 'DB_HOST', 'mysql' );
} else {
	define('WP_HOME', 'http://duluthdiner.com');
	define('WP_SITEURL', 'http://duluthdiner.com');
   
   // ** MySQL settings - You can get this info from your web host ** //
   define( 'DB_NAME', 'duluthdiner2020' );
   define( 'DB_USER', 'dd_wp' );
   define( 'DB_PASSWORD', 'PzPsr19J0XSIig' );

   if($useRemoteDb){
      define('DB_HOST', '160.153.41.136');
   } else {
      define( 'DB_HOST', 'localhost' );
   }
   
   /** Database Charset to use in creating database tables. */
   define( 'DB_CHARSET', 'utf8' );
   
   /** The Database Collate type. Don't change this if in doubt. */
   define( 'DB_COLLATE', '' );
}

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
define( 'AUTH_KEY',          'yAZL-aoL5t9!MOE-6(gnHhjQWw>bmJC77?Iro(Tg0m8lFM&PIQke)T{$mk?lnN}$' );
define( 'SECURE_AUTH_KEY',   'a1=(>}TK{SObjP8GG>JPH~m>msB`VZ7*5:TcV_hxtf9?F2QCc:~L:`AI(e<-p),k' );
define( 'LOGGED_IN_KEY',     'ICn(1_v8uRw.s|3tF^3B&0>)*s+8zp[tiD5%WVHmej!~4|s1Db@Y0>vmri#e5Ew0' );
define( 'NONCE_KEY',         ']m7%4C|4CT|O]pm_-6BUd_N[@6@L|<tFDb=tfSQq|Vob@1U6Oy5JsR0~M?Uti!x-' );
define( 'AUTH_SALT',         'n0FyQcC}^3c)u4t$fB(.bWotf5duW#zx{/)o+(.F!QWOJX>/NBtZ-<Yi?i`r]lw@' );
define( 'SECURE_AUTH_SALT',  'QTQ^+lR9)r_NXTX^V);Q|M[v%Bik92m>Ves#FDf|^+mf^=c>Fo.:#go7YWpZhu^u' );
define( 'LOGGED_IN_SALT',    'HHl?mXI+NdrAR^WJ?pRFKeKb.dxqGW@G;tB{gy0lz?Gy[SR}V{EEF|RXhk5=TQ1j' );
define( 'NONCE_SALT',        '~F([D0&_+27p{=5gR/O!8!1-M[Be/V~-`3ES4Y$D&CD%SJW,xbsU5>ou{^^qD[`-' );
define( 'WP_CACHE_KEY_SALT', 'V1:]d.(-X7;_#/D6eNR}XBVkLvl@(c(o;X^)UyWiUU2Xv&!9~wDD*1FP)C6G)9uA' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'DISALLOW_FILE_EDIT', true );
define( 'WP_DEBUG', true );
define( 'SAVEQUERIES', true );
define( 'EP_HOST', 'http://elasticsearch:9200' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
