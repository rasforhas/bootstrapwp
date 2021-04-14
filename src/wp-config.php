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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SnR5/3k5VJ@1Chwa6`qIlLU#(26b>?~sFn%JU12d,8kBa,^SjjGsgm.Y6|q,T.VO' );
define( 'SECURE_AUTH_KEY',  's[5R!wE)8VX|,V,5`.K <23=L_`5r`oWYtMU#h7gD)enZsM<YI>y= 5?21W4D4/o' );
define( 'LOGGED_IN_KEY',    '=gAi@Sb_Qh{1Z*OYz07YbmRq76OGYcPHX/X3<4~#3R`ZD2K+! zZ}<VBGJ.%na2F' );
define( 'NONCE_KEY',        'VK%~o;{G/x^x4w%PW`oZqtfqOb%{T<)1q>2vt{1z?.&~|qPmYz@7oGsG{X&5r9<<' );
define( 'AUTH_SALT',        'Zot1E4q?H^7:ghLAfp?5P65exHwAf7[.hWk_Wym>O33AS=A}]{j_~t=tUWKEl-fS' );
define( 'SECURE_AUTH_SALT', 'h *(56lfFgF7|lu+n>Dv^`h(ggLf{O?=+;Xk=z53oW3w},ZM=oQ2w*Lh)&/2(yo?' );
define( 'LOGGED_IN_SALT',   'Mo~pv0cNwO)`G5tG-7S9Oz27R0K|P03:`h}w.<{]%~gVVU65e47 pS+Uq>7&Gwt^' );
define( 'NONCE_SALT',       '~5nqk`VjO{}~!6#hP[3M>%}i>OFVeS<At~[W#m*>Z&A[O5|3j%*VZhpxJv[Wg3uw' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpp_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
