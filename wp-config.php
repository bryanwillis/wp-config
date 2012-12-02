<?php

/**
 * Set Database Name
 * @link http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Name
 */
define('DB_NAME', '');

/**
 * Set Database User
 * @link http://codex.wordpress.org/Editing_wp-config.php#Set_Database_User
 */
define('DB_USER', '');

/**
 * Set Database Password
 * @link http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Password
 */
define('DB_PASSWORD', '');

/**
 * Set Database Host
 * @link http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Host
 */
define('DB_HOST', 'localhost');

/**
 * Database character set
 * @link http://codex.wordpress.org/Editing_wp-config.php#Database_character_set
 */
define('DB_CHARSET', 'utf8');

/**
 * Database collation
 * @link http://codex.wordpress.org/Editing_wp-config.php#Database_collation
 */
define('DB_COLLATE', '');

/**
 * Database Table prefix
 * @link http://codex.wordpress.org/Editing_wp-config.php#table_prefix
 */
$table_prefix  = 'wp_';

/**
 * Security Keys
 * @link http://codex.wordpress.org/Editing_wp-config.php#Security_Keys
 * @link https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**
 * Language and Language Directory
 * @link http://codex.wordpress.org/Editing_wp-config.php#Language_and_Language_Directory
 */
define('WPLANG', 'fr_FR');
define('WP_LANG_DIR', dirname(__FILE__) . '/wp-content/languages');

/**
 * Debug
 * @link http://codex.wordpress.org/Editing_wp-config.php#Debug
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', false);

/**
 * Javascript Concatenation
 * @link http://codex.wordpress.org/Editing_wp-config.php#Disable_Javascript_Concatenation
 */
define('CONCATENATE_SCRIPTS', true);

/**
 * Increasing memory allocated to PHP
 * @link http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
 */
define('WP_MEMORY_LIMIT', '32M');

/**
 * Enable Multisite / Network Ability
 * @link http://codex.wordpress.org/Editing_wp-config.php#Enable_Multisite_.2F_Network_Ability
 */
define('WP_ALLOW_MULTISITE', false);

/** 
 * Define Site URL
 * @link http://codex.wordpress.org/Editing_wp-config.php#WordPress_address_.28URL.29
 */
define('WP_SITEURL', 'http://localhost');
define('WP_HOME', 'http://localhost');

/**
 * Moving wp-content 
 * @link http://codex.wordpress.org/Editing_wp-config.php#Moving_wp-content
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', WP_SITEURL . '/wp-content');
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');
define('WP_PLUGIN_URL', WP_SITEURL . '/wp-content/plugins');
define('PLUGINDIR', dirname(__FILE__) . '/wp-content/plugins');

/**
 * Modify AutoSave Interval
 * @link http://codex.wordpress.org/Editing_wp-config.php#Modify_AutoSave_Interval
 */
define('AUTOSAVE_INTERVAL', 60);

/**
 * Post Revisions
 * @link http://codex.wordpress.org/Editing_wp-config.php#Post_Revisions
 */
define('WP_POST_REVISIONS', true);
define('WP_POST_REVISIONS', 5);

/**
 * Set Cookie Domain
 * @link http://codex.wordpress.org/Editing_wp-config.php#Set_Cookie_Domain
 */
define('COOKIE_DOMAIN', 'localhost');

/**
 * Cache
 * @link http://codex.wordpress.org/Editing_wp-config.php#Cache
 */
define('WP_CACHE', false);

/**
 * Empty Trash
 * @link http://codex.wordpress.org/Editing_wp-config.php#Empty_Trash
 */
define('EMPTY_TRASH_DAYS', 30);

/**
 * Absolute path to the WordPress directory
 */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/**
 * Sets up WordPress vars and included files
 */
require_once ABSPATH . 'wp-settings.php';
