<?php
/**
 * Plugin Name:       MSFC Woocommerce Frontend Manager
 * Plugin URI:        http://myshopfront.cloud/plugins/msfc-woocommerce-frontend-manager
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Aminur Islam Arnob
 * Author URI:        https://aminurislam.me/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       msfc-wfm
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MSFC_WFM_VERSION', '1.0.0' );


/**
* Load plugin textdomain.
*/
function msfc_wfm_load_textdomain() {
   load_plugin_textdomain( 'msfc-wfm', false, basename( dirname( __FILE__ ) ) . '/languages' ); 
}
add_action( 'init', 'msfc_wfm_load_textdomain' );


/***
* Plugin Directory
**/
define( 'MSFC_WFM_DIR',  plugin_dir_path( __FILE__ ) );
define( 'MSFC_WFM_ADMIN_ASSETS',  plugin_dir_path( __FILE__ ) . "admin/" );
define( 'MSFC_WFM_FRONT_ASSETS',  plugin_dir_path( __FILE__ ) . "public/");


/****
* Include Admin & Public Assets
***/
require MSFC_WFM_DIR . 'admin/msfc-wfm-admin.php';
require MSFC_WFM_DIR . 'public/msfc-wfm-public.php';


/****
* Include DB Tables
***/
require MSFC_WFM_DIR . 'includes/msfc-wfm-db-table.php';


/*****
* Fired during plugin activation
* */
require MSFC_WFM_DIR . 'includes/msfc-wfm-activator.php';


/*****
* Fired during plugin deactivation
* */
require MSFC_WFM_DIR . 'includes/msfc-wfm-deactivator.php';

