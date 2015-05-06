<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kolbetim_database');

/** MySQL database username */
define('DB_USER', 'kolbetim_root');

/** MySQL database password    */
define('DB_PASSWORD', 'FaithArts&Justice');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&yF{6$@6^])6-?qh3l+w5=&4G3D_#R&+$nkc#O`y+JU,f<s$8%3Q*JiP1W|Dy9bj');
define('SECURE_AUTH_KEY',  '$)|v Q-tLSzjvm%X|i|*rX2W|[ 3W3sx#{$`2M9?P~%Q7B#://iO%6I!{K[s|&QB');
define('LOGGED_IN_KEY',    'F2Oxr(0cPn}ss|wzXf6gNBgLWQTU:2owZ45iTYT7a2 +=Z}&ZMRTx7x>+Q<j2NWE');
define('NONCE_KEY',        'T{KN>+jzi,hUxUC_fd~ESzG|wBXbmu-*e=)t~E3w?uJ+Y^rh-lGt3QlN!IURL|W/');
define('AUTH_SALT',        'P^-+aCSa HyD$u*f#|?Fq;CXcLc6qhjsD&-/fo^ebq)@^ xci?;-o(/2]w?%)eC?');
define('SECURE_AUTH_SALT', 'Y?%=-9ZfoqO1X%;LbiQ*HY.h2I;ZmpB&hsv%3,Us|m?}&Fp)/%Yxr,Y#I.1s|A05');
define('LOGGED_IN_SALT',   '`+c>McQ^-n+E-X6{KmVkTM,6P7>$E!uEpoQtF5wJ&D{C[|6[2mx-?ZOZRkve4avC');
define('NONCE_SALT',       'Z+9N6m Y4_!8VRLdOiB] YkX`2o-|6)Ia-*?wi2xyX[&$m I)]4Fbm90_w}IZh,n');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
define('WP_CACHE', true);
$currenthost = $_SERVER['HTTP_HOST'];
$mypos = strpos($currenthost, 'localhost');
if ($mypos === false) {
define('WP_HOME','http://www.kolbetimes.com');
define('WP_SITEURL','http://www.kolbetimes.com');
} else {
define('WP_HOME','http://localhost/kolbetimes');
define('WP_SITEURL','http://localhost/kolbetimes');
}
require_once(ABSPATH . 'wp-settings.php');
