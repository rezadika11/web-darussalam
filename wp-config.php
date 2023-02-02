<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL



//Begin Really Simple SSL Load balancing fix
if ((isset($_ENV["HTTPS"]) && ("on" == $_ENV["HTTPS"]))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "1") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_SSL"]) && (strpos($_SERVER["HTTP_X_FORWARDED_SSL"], "on") !== false))
|| (isset($_SERVER["HTTP_CF_VISITOR"]) && (strpos($_SERVER["HTTP_CF_VISITOR"], "https") !== false))
|| (isset($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_CLOUDFRONT_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && (strpos($_SERVER["HTTP_X_FORWARDED_PROTO"], "https") !== false))
|| (isset($_SERVER["HTTP_X_PROTO"]) && (strpos($_SERVER["HTTP_X_PROTO"], "SSL") !== false))
) {
$_SERVER["HTTPS"] = "on";
}
//END Really Simple SSL
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
define( 'DB_NAME', 'httpdaru_darus' );
/** MySQL database username */
define( 'DB_USER', 'httpdaru_darussalam' );
/** MySQL database password */
define( 'DB_PASSWORD', 'darussalam123' );
/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('DISABLE_WP_CRON', true);
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'f7:aD@vb$@GJK/qJG|FJ+2^=pm-fW~-t@1w#*GkEQ*baCS@{EU-%x SvlCy_>t`D' );
define( 'SECURE_AUTH_KEY',  'aZwen$d1`[e94,BEw8+^Vzpks :[B&`oVZuS#?E2 %})ykLhO:r+xL6I*cv5TT>=' );
define( 'LOGGED_IN_KEY',    '$TNinzu5^_PQ.0i&$`.@tcP$&oeR[`MlU![=}o`uOCWtUV#4p]%TZGh++REYd2|,' );
define( 'NONCE_KEY',        '49{ |^&M^#$`~*JZ:gz;2NVCRf9&F.@I@33MEmA5;]R~dAG[LF]QXl3WP/fl^sf!' );
define( 'AUTH_SALT',        'xeq),KFGaZYzRlr^I^~#|9XK@Tq]8(Pm^Y ]QfWp|DM{#]2gvXt)K1cu=4gO~p|9' );
define( 'SECURE_AUTH_SALT', ':nk5)$%E;@yTusz1|h^ZG5/|K#nsN9Sf;#C1jtx&f:$MbKN&VkH?wu`*Ckg](UX>' );
define( 'LOGGED_IN_SALT',   '/&#s+>#17_M9bmcyY-BUF$udMHeuGuZyt`Wuu?si,,H`yN;6ZPm|D2yx{]R?`m/s' );
define( 'NONCE_SALT',       'r{Z9ynRZk6kGlZZM?D%2pe6o0_zi_9$o8vh2Ni sZ:YE4:6hLp+[W1[[bs7Z~6^c' );
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
define( 'WP_DEBUG', false );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') $_SERVER['HTTPS']='on';
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );