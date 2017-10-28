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
define('DB_NAME', 'the_french_monkey');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'LMOUYwSg<x=uAxrrYg6~S^),`]%x}g=0f@NXAT; ]S u>26w$)|G*Pn$Chn3xWb<');
define('SECURE_AUTH_KEY',  '@Pd&H+:U7~jo*uZ=11XVAW=F]wq-#DGcTM9-%5~8>fE[ }Zooh(nRm$b-Z?uRMe%');
define('LOGGED_IN_KEY',    '-kPRIE? 3H5T3iXlQw iS}*^gPSv0,9=sDU#b7hB21hy|_C&Oh$4,)Ti<oe&+dC[');
define('NONCE_KEY',        '1ygsyDIf ]DF; Y!Pz/FpKMybXT`ZJFk.-D/u2]=Ikd4Rv3crcW_sdh@0!WfJa9{');
define('AUTH_SALT',        'T,]Z&J7?^YzFp9%=-oB5=wX`?8dqDA#o%d!AXkAQ&`#T/u=0^N5wjB8oT%@EHMIW');
define('SECURE_AUTH_SALT', 'EH*Lt4!i[+B4DPXoF/o|BGHr8/R*sSY :T#:gbrUK6-1_1sC-%DM(w;^)<SB`p_X');
define('LOGGED_IN_SALT',   '7Di-XYSurk2qo-27r$X^xiV}w@%o dtIl#fdjZI?jHTfZbNsk0t8|+q$yBJ!BU;!');
define('NONCE_SALT',       '&5%{<K&Q]6R,$n}g8A!UUo><KgtKV#YDuXaTZRcBHdJ6Vu2{ur4S&|d}J7Q`bkbB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'thefrnchmkeywp_';

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
