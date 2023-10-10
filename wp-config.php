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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'student' );

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
define( 'AUTH_KEY',         'z|y#3OtD[AVuH%X<fLQ~Y=1=gbxfx&tCLC1VJV!k5J3tk?A5Lr{~<@1jVZmQcN1L' );
define( 'SECURE_AUTH_KEY',  ']`3?j]gS]*5KjM?CW}pK-B]u!m2^+?.OwG:6Y}%Hwj^E`%]Y-:J0w7S,%:NiK~!{' );
define( 'LOGGED_IN_KEY',    'Dauda*T  ]V2(9VF$-%+~_;Rq1kXC:2K#[MwqOG!Ny[vo-+Rj&S;z@G?p-h%k{<W' );
define( 'NONCE_KEY',        '&0:|kiYk#IfN(bUj{cjf*jv-e)pQ_0NxY&YWn6=6SqkYF@j,$CH~ ?y9e9aulZZU' );
define( 'AUTH_SALT',        '%3J3 aU)OmuVl<CH6 ]Lu=~z9ew8]0.~Vz7P1AkQs-w`/MBW`6m5zop,wu: P+z[' );
define( 'SECURE_AUTH_SALT', ',G]pL80B<Opwm3- 8y!H3Yy7Z9CGS0c[r=Z[Lq9}J8r?aZMJJajLU.gVLuid2KuJ' );
define( 'LOGGED_IN_SALT',   'Jqx5_;$7}P>$ov~6S8H2+hu1$TBr~$fZw*JMxI5y+BFZCd$bEvB)@v%%Tg9j_1q6' );
define( 'NONCE_SALT',       'r^ufVCH`F`e^63R4CDo(|4e 1 LCe`8kb~H/#K:@UJXFnz|&g6X.>yN1^5<D6W/I' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
