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
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'd2dd03c8eb3e6465c6e67fe70de11442b3771ead1c34c406' );

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
define( 'AUTH_KEY',         'T*O6Z(4_r:9vd&ZX?ln*ZYD7Gig+xHI}?9z)#6`A-lZJ8YXj,]_iOAi[<pTtpc$V' );
define( 'SECURE_AUTH_KEY',  'Ym,uD@;qfXAT:DgRQ^.Gak>!=y#2W&r(:9HHRg!Oap<N[jB@A$KQT&aU`<:&U^D,' );
define( 'LOGGED_IN_KEY',    'P(H^aXvM61T*9*q)D3=^q3p=YtY}*Sl4>&uLu5ZPg,oDNBVLoJ@ak_m)Sa+w5Z_P' );
define( 'NONCE_KEY',        '+mlhdYL@cDR3nYp1rg^F.?h@CO3]g{Wj#@R[ISh4k0!36a6;>KD.Uc-R{VVP|Ry8' );
define( 'AUTH_SALT',        '1xIi~w6 {{.dxIQePsNTP|%I9n=*m-+I}xh5JVx1sh&VKa>)_>TBtq4Dv37 @R:B' );
define( 'SECURE_AUTH_SALT', '1i?aw0.GUuc7i#3!g06l6o4Oor2TCT~_ag2nOm@Q8)I1{gyqemFi(p![ COJ(^l8' );
define( 'LOGGED_IN_SALT',   'ty$Aw/G3A:)KS4;lGCs6.22Y HdfpN[x;)TM9?j5~Y}O/{1G?~6~L7!X~<j`cg/{' );
define( 'NONCE_SALT',       '~?A:AC5{n~ 1T.!K.{wj^&eze.[`|4K*iW6e$^.HvkpluUL7[q]{d{r&Le_/^0Mr' );

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

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
