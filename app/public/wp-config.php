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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZX82SYvQaIm5BISbTIhl0iM7Q68RgX5E7JqFAwh8dJbD38ShOeDbLqeTDIAHZNIrjfeOgr7fCBd4HNc4Ynm26g==');
define('SECURE_AUTH_KEY',  '3L5mK9EB2pASe4mMtZDa+wYqVtl4iaHDwtJheJo7+fsdMhuErabqRIYE/6k+SPEtUb7kWZNDP8AJOIMObn4z3g==');
define('LOGGED_IN_KEY',    '54n4DfQ69dCzZeXmx4Q4NDn5hWrD1iDjSSdo2hLR+WkoYkPiLNVVeEayMMIQMcT2GKX9Ov2LYyehHZE/r8rQKQ==');
define('NONCE_KEY',        'T15rKwQksM4eV9nqS+Az81oWnwHqaD7P03J/2eGJQOJf7Hm9umPg9PBfIMzf98C3rWJKku9oQKwGPYmCbtE3pg==');
define('AUTH_SALT',        'oi7w+T8Mo2ibSR/1q+7Djipjjf7+MwBmTpl/F1x0vv+SzGCA7SI3nqr3tNgHGhcUfOPLDpkZYgdEOA+LGAYB9A==');
define('SECURE_AUTH_SALT', 'zO/UjwUZwL+EXN241SeMj3qPz9KiNk9+ah+kPIYot/GVCzDpZNcv80K/lpzRIStrTMe0eFjHYR7H9KdViPbyfA==');
define('LOGGED_IN_SALT',   'NSTIpgFNUlrRDDUe/IeXooT8yC/eg3dhk4dbs7LPAgstgqyi0Lz6KGbk94y43U1Cuc8gXhOPN/zbdMF03rKc2A==');
define('NONCE_SALT',       'gpYPtlvKQ72UVp8ItE8DkkO3xRGQbhg6QFyl5G+tTHacfjNAOLQnV6EIcSg2ZW0lIeehud/flNlHj9n6XKggjg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
