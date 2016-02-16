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
define('DB_NAME', ( getenv('ProjectNami.DBName') ? getenv('ProjectNami.DBName') : 'weedseek_database'));

/** MySQL database username */
define('DB_USER', ( getenv('ProjectNami.DBUser') ? getenv('ProjectNami.DBUser') : 'sa'));

/** MySQL database password */
define('DB_PASSWORD', ( getenv('ProjectNami.DBPass') ? getenv('ProjectNami.DBPass') : 'Ab0ut2Cr4sh!'));

/** MySQL hostname */
define('DB_HOST', ( getenv('ProjectNami.DBHost') ? getenv('ProjectNami.DBHost') : 'localhost'));

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
define('AUTH_KEY',         'aCq([UMtS(Pt|xFP_E-yz;IGS+hBv8.5Jg8oZNGB_bq5@+$$5>:L^G]DOo8c-1^-');
define('SECURE_AUTH_KEY',  'Htll;Wq@hP=/ltKfg+ V3iaDxAdD6e[jQW!bUiloghcs=f*mXk|xKKY5T~{0:2`<');
define('LOGGED_IN_KEY',    '#SFeZnVUKEgN({E7C0vcc+d3JeL)~hG:CT[55|eQA L1< -aI>,GC3Ox/*5l?E|Y');
define('NONCE_KEY',        'O3;&U.A|sljbn-?Vi++*;6B+8pmu):}CPE,KHcJW:qn k/k|rg+>;#cM*3)x;(${');
define('AUTH_SALT',        'NlM4:;3IfyCbf ,]=}$d^7h;D#Y_1O81ZrVr6*;&dea@jUs;voGr)>xB)].HSoH*');
define('SECURE_AUTH_SALT', 'o2]f5ON ^dXDCo(;+31%WXF0IP5M{OS1}=%2}UG==Qu8sqjuz8-n,y8UN<I}#ogL');
define('LOGGED_IN_SALT',   '%P5hvs&gF|=$!*9T[$>wn8)N>g;%L)N9+V|_+X|Kwxq5Oh3>{v%0n/Qid:uI1L3U');
define('NONCE_SALT',       '/0I@K@zXuq}Yt{k8QX.yu)$DU*hS<%:gg2@=(*Qg[|FV3Z5K+CRaH++?;t?*9&O3');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('WP_CONTENT_DIR', ABSPATH . '../wp-content');
/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
