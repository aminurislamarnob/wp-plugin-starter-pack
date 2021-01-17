<?php
/**
 * Enqueue Styles & Scripts of this plugin
 */
function msfc_wfm_assets() {
    //Plugin Styles
    wp_enqueue_style('msfc-wfm', MSFC_WFM_FRONT_ASSETS . 'css/msfc-wfm.css', array(), MSFC_WFM_VERSION);

    //Plugin Scripts
    wp_enqueue_script( 'msfc-wfm', MSFC_WFM_FRONT_ASSETS . 'js/msfc-wfm.js', array('jquery'), MSFC_WFM_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'msfc_wfm_assets' );