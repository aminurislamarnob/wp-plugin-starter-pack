<?php
/**
 * Register the "book" custom post type
 * Fired during plugin activation
 */

/*
function pluginprefix_setup_post_type() {
    register_post_type( 'book', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );
*/

/**
* Activate the plugin.
*/

/*
function pluginprefix_activate() { 
    // Trigger our function that registers the custom post type plugin.
    pluginprefix_setup_post_type(); 
    
    // Clear the permalinks after the post type has been registered.
    flush_rewrite_rules();
    
    //Create Table When Plugin Active
    msfc_wfm_user_education();
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );
*/