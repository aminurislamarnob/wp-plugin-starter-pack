<?php
/**
 * DB Table Created 
 * **** Run on Plugin Activation
* */

/*
function msfc_wfm_user_education(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();

    $msfc_wfm_education_table_name = $wpdb->prefix . 'msfc_wfm_user_education';
    $msfc_wfm_user_education_sql = "CREATE TABLE $msfc_wfm_education_table_name (
        id int(9) NOT NULL AUTO_INCREMENT,
        user_degree varchar(255) NOT NULL,
        degree_major varchar(255) NOT NULL,
        institute_name varchar(255) NOT NULL,
        university_board varchar(255) NOT NULL,
        passing_year varchar(50) NOT NULL,
        class_division_grade varchar(20) NOT NULL,
        marks_cgpa varchar(20) NOT NULL,
        remarks text NOT NULL,
        achivement text NOT NULL,
        user_id int(9) NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $msfc_wfm_user_education_sql );
}
*/
