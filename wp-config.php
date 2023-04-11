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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         '/`?:.d$*G#g~e>#q8Y+fUvWNL([(vyN^o:thCVd@~9moFMeup{CNbFD=Ng=Gdvj_' );
define( 'SECURE_AUTH_KEY',  'honCucQL,6B!<0&hB9zT]/F.^}_7ILHsc,~:RF.:_rXITTZ2M|sccv./wtfUc2FW' );
define( 'LOGGED_IN_KEY',    '{%p{#jDbH98y[.R#FR8#^U4,mxpN,/G0pyy)_aF6(l^Cu,}iT=?SvCA}*Jyb@E}R' );
define( 'NONCE_KEY',        'FsQO{Y;,dLi5w-P0pllLF>5`F/!6!q@AJAAhi0L{C|sGFq5/[&4xukgBI)TMp<%*' );
define( 'AUTH_SALT',        'W?}c3nq262f6?j)y3m,+rMj4+68oLT,gGOu?_ru_<S_1B3]a2|t+u 2j;Lr(#a!<' );
define( 'SECURE_AUTH_SALT', 'WEbS <PDSb6zIT[Q?Ug+9N&U%&|:I3kD/]2v<n0nVO`CG~S,~:SU7I>g8YsTFq3h' );
define( 'LOGGED_IN_SALT',   '!/J+l=3$/@*ASb5Nh,3&Fi.qik&[0S|816BqP}4]8)Olj!VEYoS<B)+U5 Mp|Boy' );
define( 'NONCE_SALT',       'Ro=Nnj[7pzO9C<!xJN Sgk*4OcwadY2dbV2fP8;=@f^/Hv8a2gp3;U|iyH#3b3@E' );

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
