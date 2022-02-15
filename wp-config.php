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
define( 'DB_NAME', 'prospect' );

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
define( 'AUTH_KEY',         '>3nm%/pUYcY9|1FC6%HpXJ_^,F/2+S*,6Ux]i+&sS?Q$w/-YC927f^+]_IX&OO.Y' );
define( 'SECURE_AUTH_KEY',  '#~uekO)<(m$ @JX<<emO[A}lb@;O:e{D5*9R#!Q&f~9D|n~7mPHZ7Xq.!_^Q~!T0' );
define( 'LOGGED_IN_KEY',    'f-ZN_%NWGB|Q=WEuSo9sVI>[b0w_f2BasMu^]ZIdCXWlb$81yIT9sX9Ov*CnVWZ)' );
define( 'NONCE_KEY',        '_29b~(AM5>PI=5#E{*jU`sJo+:I/<X&HHSntxGz0TwU9($koIl]cSU73mY!@Q{)y' );
define( 'AUTH_SALT',        'mIMR@KVD<(+L9tie$,lb^=jU036Cz,$SEJ>wsKbTp?i`n*dL(jjk$6Xpl,[r[cU1' );
define( 'SECURE_AUTH_SALT', '`$9T{A5>SE}qy:},O`0|l[HC= 2jLyfW*|kq_3hEsW7Hks[@aN_51VzK-{}Q)uIO' );
define( 'LOGGED_IN_SALT',   'J#]v~_5$lV4D=4Um0&L}TPBN#{<=,0Q:r$jdiahZF7X5x0?sz{,_Vtf3%);QnlxP' );
define( 'NONCE_SALT',       '4k=`5)7qP}7mM5}P9g?p!=y2Qp9|Z|r#oSU5PO-hh{R#)t/LkqWJDDh@O=pBcn]p' );

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
