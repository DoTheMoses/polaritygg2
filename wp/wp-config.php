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
define('DB_NAME', 'polarity_wp548');

/** MySQL database username */
define('DB_USER', 'polarity_wp548');

/** MySQL database password */
define('DB_PASSWORD', 'P470-PR7S(');

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
define('AUTH_KEY',         'oldxmaczxbb6ns3zuy9touph4ejffdjtywzwe7a1ucjns0cqzyapnh2ilxwwwpbo');
define('SECURE_AUTH_KEY',  '2txgaw4awjlcn6fzqw7sblon8eqos0g8s0keu4jeq3h6pa3wcnq2v14h2dh4qah1');
define('LOGGED_IN_KEY',    'vmajalmyjb5ytrdkhggic1uynp3nfwhgtfagxp7kea6nsu26hlq98dnmzvd2kjob');
define('NONCE_KEY',        'euqeicelt4td3c5c29vtategmhkvyvsprqv4qglhurbelfajf97xpugxkdpztby7');
define('AUTH_SALT',        'aakhux6jlqf95cpjs4yuiwwlgxjighjdphp0bzggdwptm6fj50snwnvvgloqq11z');
define('SECURE_AUTH_SALT', 'uapbkxtvstoycai1nzhiugqi9dmfwidafzjlyoutovridcgynybtwuntuehywjci');
define('LOGGED_IN_SALT',   '0lpzkllfwhjyrdxyukaqgcdkiyiu8dht9sjlw4ihtxi2ajrhihbs88evevkahivv');
define('NONCE_SALT',       'sihfdjxutfrj7hmqh8elpbwprbhgeegba7gyy3gevggvh0yy1j7bmullvnojekcv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpya_';

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
