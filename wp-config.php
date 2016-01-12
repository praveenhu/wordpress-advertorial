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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'advertorial');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '7e`y:)1J4}wmQLIP:B-f]k:+[OifG9GqZa>*5V.Dvd~*MMn6/(])]mm]+B<+hE]{');
define('SECURE_AUTH_KEY',  '5c}Pb@+PX2u[@;bMRBNp;B!wb<p{QLN<6d%@t$jxyZiLApw,@4hY592a_v6Cv|j&');
define('LOGGED_IN_KEY',    '56B.v(XH}|!j_YVSgM{lQ$u/!8._?,*v60`0;*9&,|ZF!uHDVk.GA}th/Y4:P 3]');
define('NONCE_KEY',        '06d/+*Tdx!9|]l,E$;_>s>jZA=jopft{c=*vPg!D*d!9Q^Bi`/l5iSrBNdl!Q0GU');
define('AUTH_SALT',        'iog9I[x;~Yg_NV.eq@Yg%uU^R)_$n.10;{fHNSPp~OR2:W8_i+htv3Of>$`bq<45');
define('SECURE_AUTH_SALT', '1w6PmP;>9~3NocF(NX i(({cU*`& k&cH(uM6>L.c%%<tynpn7F7#OC]lQ$Ob7pb');
define('LOGGED_IN_SALT',   '@-e&h;)YIg)+9A1pQxo#C0BZ1R2TD1VSmL$Qy?%2Kngl-ty5~D@k9 _HH4&@m_qG');
define('NONCE_SALT',       'qC<UlmS~8(}h}b${=a~Bvv:O9Y=`S~La+9H+2JHGG,$/<ycC51NjH4&Sv~(w<dY!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
