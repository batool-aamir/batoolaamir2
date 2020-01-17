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
define( 'DB_NAME', 'batoolaamir2' );

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
define( 'AUTH_KEY',         'N/?j~4}fWH_,yUEG#,7&sf1_T8-zFH-x/(9eam!nMC}tR*BLkq`JCvyMC+BLW7!c' );
define( 'SECURE_AUTH_KEY',  '?uD!]@-SYs+.4 YpN0aAo<>Yfv[ |%8JNq5GK)LfSmwPY9`)/.XWn,-)_cCEkhpR' );
define( 'LOGGED_IN_KEY',    'd]Tg5ENet8M-HU:GJH^4Ekcs?qG{AU_X]N7qY*Zv0WC(Q(OuM~[R!T2trC`P9JB$' );
define( 'NONCE_KEY',        'NzF>*JaEH3ud}aeiL;^fg|2fMM1y(1J/iXUgdSV^0g$:li,hxdMQ!$N*ibJ*#/ &' );
define( 'AUTH_SALT',        'DwMYcnV!,cYXj_kgeQ;Pbgc*@>lvdaa{_Wf1Y=*y3D PB?5@p1&EG%7$Z33?1(m6' );
define( 'SECURE_AUTH_SALT', 'VhXm5RT}t0q!?o~dfXtf([ Uj5yIM,e0yJd6QMIz<yt`sJRC@/BkJr};0g0lO#FX' );
define( 'LOGGED_IN_SALT',   '~L<#uD=XGF%df?r#7Iv8_,pd(V?9xAF$Qop.bjDWl hySGWAy|~:mOi#a;M11=?4' );
define( 'NONCE_SALT',       'l~&W9~)J6P=sP(nLJg|u)0*2QA(6gtp|4q^W8Jc|]IgfZ?BFrd)ipd+qIs=BS%Uh' );

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
