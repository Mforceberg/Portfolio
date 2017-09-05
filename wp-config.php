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
define('DB_NAME', 'wp1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Bmg-Rtg6(/zi&9lM>p{|Q9!|pufHM-|<1tQ`A/I8;@JWGM^pjb.-ZW=V4o[r8vr@');
define('SECURE_AUTH_KEY',  '=Qmg%:k8:uF)F4,wKrw>^p+,,-NKEg*3|3SNFs`6UV}vV)`3-yvDg0lt#*Rdx{9N');
define('LOGGED_IN_KEY',    '407x:F2C4$g&A9--zHVvO4}uRv$Hx3ha <hdN!Ir`O=r5$li?iPgvX],Yc8Tt9xf');
define('NONCE_KEY',        '?&uAjK*2qw{.3_qxR)Cp|Nbc_GtE|KWb2`++P4H&-E8cuLU{j*TuuwRvO/7_*r+W');
define('AUTH_SALT',        '1%3?a<$XFA2}/V/^r+&3_DV=RMhK|Z@!3svL+3uHBx>*HZjwtx$xyd,TsnXZ|{G5');
define('SECURE_AUTH_SALT', 'di,/+bZ2LPyT@TsA gciRHK3kxw<0)Qb-_Xv?$%{XLPN~LJ0LDUN)gBhr?qM]_<m');
define('LOGGED_IN_SALT',   '<1Q_=FEtC|=@MGD!ECQ.XC<G<- D[-@3 ~8egBJ;H9qiCK*7BJnPcUek4Bj+~P[g');
define('NONCE_SALT',       '5^7X::_+!v=Rv1#Ibsj0m/`sVaY8b2Xs-Gxu.mYQ(jJx.X)Xe)_LLt!TLnk-6>Oz');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
