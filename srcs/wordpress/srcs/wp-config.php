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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '1C=-g+PA~w(`{1G,JXkc<Ul|E@[XjY{<*SlS`{VOtKK[e+jXv.lI4 i,<ti_h;LD' );
define( 'SECURE_AUTH_KEY',  '?}/Yqi2_>jsT1mcqe2{VJr#S&%M6Sw9-_LfnZc*V?9Eg^70t=[o@`RTy(6&OLIOD' );
define( 'LOGGED_IN_KEY',    'q!HEvE2N J/41UW.ju#}1v)x|({awP>H@3306I83&ixQ*d_HV3/?/23!J4[?%ZjS' );
define( 'NONCE_KEY',        '.-AZXqk{@|U=a).b&8/B-DSztj%]{WVrQ4KP^J{TC&e}F~!7rDFa T*FywV[,s`Y' );
define( 'AUTH_SALT',        'f{gIiwQQbV8gKGg{_=;)q9v<:;L@j/)Q?,bE8RT&01/3Fyv9J)@V[;ndNc)FV!4D' );
define( 'SECURE_AUTH_SALT', 'S2jV$C=02Hwn?U#cQaGO}e=QMsj}Qr`dDbBAt11I86lc9R]Pk8x(##Ac0AVT<tp<' );
define( 'LOGGED_IN_SALT',   '9sPo6LC|T-r2WcR-CUf:`<[$wJ&#GC4w`P6jINqV#!ObO!Y@3{#C BYU<M;`W=Hp' );
define( 'NONCE_SALT',       '^s~|7b|4(Q)?U`HO8elD6==CU%@u2!CFqGq$ap^%sIwri+3XpB^nf:enchwjk y/' );

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