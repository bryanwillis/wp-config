<?php

/**
 * Set Database Name
 * @see http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Name
 */
define('DB_NAME', '');

/**
 * Set Database User
 * @see http://codex.wordpress.org/Editing_wp-config.php#Set_Database_User
 */
define('DB_USER', '');

/**
 * Set Database Password
 * @see http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Password
 */
define('DB_PASSWORD', '');

/**
 * Set Database Host
 * @see http://codex.wordpress.org/Editing_wp-config.php#Set_Database_Host
 */
define('DB_HOST', 'localhost');

/**
 * Database character set
 * @see http://codex.wordpress.org/Editing_wp-config.php#Database_character_set
 */
define('DB_CHARSET', 'utf8');

/**
 * Database collation
 * @see http://codex.wordpress.org/Editing_wp-config.php#Database_collation
 */
define('DB_COLLATE', '');

/**
 * Database Table prefix
 * @see http://codex.wordpress.org/Editing_wp-config.php#table_prefix
 */
$table_prefix  = 'wp_';

/**
 * Security Keys
 * @see http://codex.wordpress.org/Editing_wp-config.php#Security_Keys
 * @see https://api.wordpress.org/secret-key/1.1/salt/
 */
define('AUTH_KEY',         '%X<ID!jELTqb5,N$8EZq;_UkV6OuZ@$/pxQ0mc_t?+B.H_Pz-Xv3W1*`Om4<JKAD');
define('SECURE_AUTH_KEY',  '#@ejJ;s@Z9^qgi]sz+e.m@koF,utxQCqo7@,fona7}i_n:alsZH~SR=2o=@{9(7a');
define('LOGGED_IN_KEY',    '-DulA0v+p*<[~vUiV`+!d!=,BY)yqEO-T<~l|;5$=yCv}_:TZc; Dc_;Z||eY]&(');
define('NONCE_KEY',        'm%tiTrp!ra/,I?:i5!RkHMjzSo^{=+.o$D_ky/S2y=z#Hyv20/nYA5{^9!Nqs Dp');
define('AUTH_SALT',        '{-!>Fg|}kKz-7qM+kx|IO-MDAP0Y+V^_`ZAyb -I-HKP44g0Ubb;V{|&ZfWTuHd*');
define('SECURE_AUTH_SALT', 'Tc-|G!VHFY@.>q-`;eh$(/k+;;ZnvUr:.`?*[FK$}}wb{Rmgz~]Eq>Yf}/d}]mGI');
define('LOGGED_IN_SALT',   '58o8EradlB!;1P[/`F&`<K:MX<PlKzE`Ca6N|W+~-|%dt+,^^1I5k+Uj#(5sLNbF');
define('NONCE_SALT',       'C.9J_S<6A-FE~H F(^~pxp(DEv`m1G<X-,h:+s?I58yZ>z0iW_x t*77;B8txtbR');

/**
 * Language and Language Directory 
 * @see http://codex.wordpress.org/Editing_wp-config.php#Language_and_Language_Directory
 */
define('WPLANG', 'fr_FR');
define('WP_LANG_DIR', dirname(__FILE__) . '/wp-content/languages');

/**
 * Debug
 * @see http://codex.wordpress.org/Editing_wp-config.php#Debug
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', false);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
define('SAVEQUERIES', false);

/**
 * Disable Javascript Concatenation
 * @see http://codex.wordpress.org/Editing_wp-config.php#Disable_Javascript_Concatenation
 */
define('CONCATENATE_SCRIPTS', false);

/**
 * Increasing memory allocated to PHP
 * @see http://codex.wordpress.org/Editing_wp-config.php#Increasing_memory_allocated_to_PHP
 */
define('WP_MEMORY_LIMIT', '32M');

/**
 * Enable Multisite / Network Ability
 * @see http://codex.wordpress.org/Editing_wp-config.php#Enable_Multisite_.2F_Network_Ability
 */
define('WP_ALLOW_MULTISITE', true);

/** 
 * Define Site URL
 * @see http://codex.wordpress.org/Editing_wp-config.php#WordPress_address_.28URL.29
 */
define('WP_HOME', $_SERVER['HTTP_HOST']);
define('WP_SITEURL', $_SERVER['HTTP_HOST']);

/**
 * Moving wp-content 
 * @see http://codex.wordpress.org/Editing_wp-config.php#Moving_wp-content
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');
define('WP_CONTENT_URL', $_SERVER['HTTP_HOST'] . '/wp-content');
define('WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins');
define('WP_PLUGIN_URL', $_SERVER['HTTP_HOST'] . '/wp-content/plugins');
define('PLUGINDIR', dirname(__FILE__) . '/wp-content/plugins');

/**
 * Modify AutoSave Interval
 * @see http://codex.wordpress.org/Editing_wp-config.php#Modify_AutoSave_Interval
 */
define('AUTOSAVE_INTERVAL', 60);

/**
 * Post Revisions
 * @see http://codex.wordpress.org/Editing_wp-config.php#Post_Revisions
 */
define('WP_POST_REVISIONS', true);
define('WP_POST_REVISIONS', 5);

/**
 * Set Cookie Domain
 * @see http://codex.wordpress.org/Editing_wp-config.php#Set_Cookie_Domain
 */
define('COOKIE_DOMAIN', $_SERVER['HTTP_HOST']);

/**
 * Cache
 * @see http://codex.wordpress.org/Editing_wp-config.php#Cache
 */
define('WP_CACHE', true);

/**
 * Empty Trash
 * @see http://codex.wordpress.org/Editing_wp-config.php#Empty_Trash
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
