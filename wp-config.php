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
define('DB_NAME', 'michiboe_avalanche');

/** MySQL database username */
define('DB_USER', 'michiboe_avalan');

/** MySQL database password */
define('DB_PASSWORD', 'danielhetgerncock');

/** MySQL hostname */
define('DB_HOST', 'michiboe.mysql.db.hostpoint.ch');

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
define('AUTH_KEY',         '+Z; g^37IILJ+[lTwp%,kj7aO;jF?Th&0:e6>dr(aht<(.pcWw4o7xG)N/6z;+C4');
define('SECURE_AUTH_KEY',  'D$Qx]SeIV>2M+2)+iJ`F T+vUoZvry^<Ou/0;QP96by,7s-:[cg;zIyBw1 R[0|9');
define('LOGGED_IN_KEY',    '9ECO&Ny)H,3!U<cnK![2zG/ETHOQI>~x4#A8S(rm+p]40!KRMl%qYARAsb h|9mU');
define('NONCE_KEY',        '>0uJaeUi]AV?XG<Y){Z|YI5GE>bm`TY~/&T`8e=_}P-/Oi1yK9K&3T@Q4muBV738');
define('AUTH_SALT',        'AJ0gt+6o*`Il[OX;7UgYOFp>>1ci?MgWV-g#(shm]oyx,X{k%>,7NR1)e}.jc]qJ');
define('SECURE_AUTH_SALT', '~k}vh](WK_V5W&VJVZCy#{T N,Z5R5axLN9jM$QD6W{Y`sa;zR(I[85`@5P>kBq,');
define('LOGGED_IN_SALT',   ')6<I$Jyr2{A^qdQ4t$=zo+[0hBQtO1V4e~LjLrV[x=L0fAIyTEf?<?e5KE&&hc_:');
define('NONCE_SALT',       'Y(QQB]H!t9?Xy8l}j$(=SqdYd4Ebg%z6<nXq8xSQ5zAq_K}|1F7TGfj]gt1T$3k=');

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
