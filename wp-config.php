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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'p2(|MFS5t.l`~f=I%qmWhdlYZ*]eZ6*dYFJ#T~GcT|hZ.6?_xP$a{eS$c;jTRpCh' );
define( 'SECURE_AUTH_KEY',  '<[%_+{JKsh0`f44p<g,2u.<UH/s(DGch>y)$6gpW?*=Bbbh$*B35?g)em4uH-s^|' );
define( 'LOGGED_IN_KEY',    '&X43&IRm&>#oHu!|p,-*U+U;20YUHCg;7}p7c/]mZ?:BX^M&NoAiUMTs^lGq/Q:-' );
define( 'NONCE_KEY',        'Vm4+~SC{pqPgD kJtb9 w%M+O*s7{OUK`s)t9qb..u]9M7UQ! e:rL=rj>QB;(B%' );
define( 'AUTH_SALT',        '!b<D?d7SicXhm_59)z?WkxD/LMCz[P/|cC/Byys2HCsPw2#B>YvKt%$SH29=adyd' );
define( 'SECURE_AUTH_SALT', '))[AUS_i$UlD-s,/c*Mzn2Ey0YhgXe!=DECAiBv&90AGFy|Cae}-*/*1p0F7wwCt' );
define( 'LOGGED_IN_SALT',   'Cqi^a8FpHVbC2y$/,;s*6{]|/p]|0vx8p$|-^*-W:+YMQQ?Nc$2/SI8o)6~N~iyg' );
define( 'NONCE_SALT',       'y:QA{UItj4TOG$k8m|m[^y:.sYYu1djc>:H0PO/AD_]|uAEGzOV/ik>1Jl1G;#Rk' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
