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
define('DB_NAME', 'phuongto_melosa');

/** MySQL database username */
define('DB_USER', 'phuongto_melosa');

/** MySQL database password */
define('DB_PASSWORD', '8fTFJ91rL}*6');

/** MySQL hostname */
define('DB_HOST', '112.213.89.40');

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
define('AUTH_KEY',         ':#ABxWbX$v[D|O Q1z0Mp6]F!<47bKFKfH[+v(l_B~2AtrSlLGtIS5CkGN5)8L3-');
define('SECURE_AUTH_KEY',  'YL_U(|iu#lKD(*7+Z|bPoA9}Z.YvLOflkq05yP%wI%OqENBxt|).8Dj->|G|G+aC');
define('LOGGED_IN_KEY',    'UW[CE+4j| @{}ZZ%xK3]Un?7ren~W;flE  [T{i _Rhu4d4;G1/%q3mciK4d-:w.');
define('NONCE_KEY',        'x|P81CbRR2W3T+g9R.1*+x(^JgFV?Z3*rfZ}<Ug^i-w|pfY `]>Xwh`~s8=5;c}u');
define('AUTH_SALT',        '7-,I3epsWDS/!laNXxdJR>>U*kUK}nb:9C~!&vO~<Yd<<0_X-cc~>WM-DPWax5N<');
define('SECURE_AUTH_SALT', '++51$|B*;m()/%(C0Ygkt9dZ#9K|g}Px^0S1h:rsu!o~@-|j>|oFhF -|H|<jkJl');
define('LOGGED_IN_SALT',   'ecIr_9sxBxL1nu78JA.SO|gZVO!KDhASRR$Psh#POTOLGlOk-&[rvX5|q9XvQI9Q');
define('NONCE_SALT',       '3?dguD+O;/.tWxD|uglw`c*ry2MRLR83DDAs=Gn&%7wE>Y?xW }zx|y#Q<N|vH m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mls_';

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
define('FS_METHOD','direct');