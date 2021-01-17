<?php
/*****
* Fired during plugin deactivation
* This magic file is run automatically when the users deletes the plugin.
* */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

/*
//Delete option
$option_name = 'wporg_option';
delete_option($option_name);
 
// drop a custom database table
global $wpdb;
$wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}mytable");
*/