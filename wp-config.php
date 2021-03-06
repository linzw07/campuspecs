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
define('DB_NAME', 'linzw07_campuspecs');

/** MySQL database username */
define('DB_USER', 'linzw07_campuspe');

/** MySQL database password */
define('DB_PASSWORD', 'nip6fill');

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
define('AUTH_KEY',         '$Uab^;J7TPrMszZy+][Px02nzySH1cLhiD|{Q9Od.c3kmuo{X:<M[~@JcI${c (X');
define('SECURE_AUTH_KEY',  '%TOQ(^I[zO4B<NgWq1-;YJ!-zR)%V:T1+D8ikv&>+0A}J>P@8YSy~vg>|r8@DOS.');
define('LOGGED_IN_KEY',    'qcbVk|w,fQgrye[p)^=qGY7h_<vb}S$^5g@UJD/6m3C/@%Aq.6;ci0^2t(3GRruB');
define('NONCE_KEY',        'OB=6Y-ruJMHhLO,s<k%.1m]f|).6;yU}!iR23X~)5M4|g/}( eAmI}(q$-?yn:0~');
define('AUTH_SALT',        '1UN:<sTmBLXg@_R2%gL:a?Z[VlIT|axE4[^*9c|%oobP=;0o8SQL77Y+ tzn3>1;');
define('SECURE_AUTH_SALT', '^t_@|.Y*kIe^eNW.d-@}?Tp.-V$(^}O3|QQij@<P1OOfZr;`rgc,mA 1L$OEm0`t');
define('LOGGED_IN_SALT',   'ch1%*)+,V;9AY9,1gjA G0EqYV-!v+D@m)}E{z<I;<tKK|27Vd8s45y-L<lY-|^6');
define('NONCE_SALT',       'xiNw~Y^DdYp;H&n++n <losX_9yq+*+a%S>`wF.R;g2 KsdaI%(8~%b<.cy/Do 9');

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
