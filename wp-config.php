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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpressuser');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'nC+,;^j.o/l:-6TI%7=Jdk-jV)>VjR$V%L!^N&k=+*4.>[4;-mZ5[ApX^Hsfb!M;');
define('SECURE_AUTH_KEY',  'uQqS&J^9.A1xB3A:mN5ldSVSL{J2vKOFQIz2|{DG^vf7&~0/@D:; cO;+E<,^[6i');
define('LOGGED_IN_KEY',    '+-*$0E3|)g3#gR|<h%] |PZA-1NX/wxIxo%shL9+Y G(asL3ycyJ+/OKX1K!DPQ!');
define('NONCE_KEY',        'Z~E9:@FUyP4t}Bv)$A:o@j&_mJOPXa:ntk!}U$[3r5;_YZTv59cJ=>4e?LLv!te}');
define('AUTH_SALT',        'Z|(E&Z{$eFN.3T<&76<==sI]VF.oN{`K=4@)=J-W|0*JfIdr*Iw{ZF>X!S1{VDe*');
define('SECURE_AUTH_SALT', '7N%[.SpgnQ#KE>Y^D?rQSe*|D>%t]V::bj;w{NN>hUw-TPi9AD@~*)YvKWdp|~wc');
define('LOGGED_IN_SALT',   '{T-xJ<Y}O|E6PNQyvW:[?3wk0s9*IlNizWwU7*9zOe InWIIYFs)gikdP8`!+~%*');
define('NONCE_SALT',       'K~N(L,-dR6XY5)KiC2-NV*@-tC6KAl|mgl(e#A7<s%Y&/]:_$Z}k-:Xn0]9<=ld(');

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
