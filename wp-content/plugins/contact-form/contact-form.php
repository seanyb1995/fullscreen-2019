<?php
/*
 * Plugin Name: Contact Form
 * Plugin URI:
 * Description: A simple plugin that creates a contact form
 * Version: 1.0
 * Author: Sean Buchanan
 * Author URI:
 * License: GPL2
*/

/*
 * Create $plugin_root variable
 * This save your writing out plugin_dir_path(__FILE__) each time
 * We also create a $plugin_root_url, which is similar, but instead of
 * outputting the PHP file path, it outputs the URL path which is required for
 * any scripts or stylesheets we include in the head
*/

$contact_plugin_root = plugin_dir_path(__FILE__);
$contact_plugin_root_url = plugin_dir_url(__FILE__);

/* -----------------------------------------------------------------------------
 * 1. Add menu item
 * This function adds our plugin to the WP admin menu
*/
if(!function_exists('contactform_menu')){
    function contactform_menu(){
        /*
         * Use WordPress add_menu_page function
         * add_option_page ( $page_title, $menu_title, $capability, $menu-slug, $function )
        */
        add_menu_page(
            'Contact Form', //page title
            'Contact Form', //menu title
            'manage_options', //capabilities
            'mbcontactform', //menu slug
            'contactform_options_page', //function
            'dashicons-email' //icon
            );
    }
    // add_action hook - this hooks our function into WordPress
    add_action( 'admin_menu', 'contactform_menu' );
}

/* -----------------------------------------------------------------------------
 * 2. Admin settings page - display
 * function that controls how our admin page looks
*/

if ( !function_exists('contactform_options_page') ) {
    function contactform_options_page(){

        if ( !current_user_can( 'manage_options' ) ){
            wp_die('You do not have sufficient permission to access this page.');
        }

        // make our PLUGINROOT constant avaliable within
        // the options-page-wrapper.php so we can use it
        // for imag epaths etc.
        global $contact_plugin_root;

        // this file contains all the html for our admin settings page
        require_once( $contact_plugin_root . 'inc/options-page-wrapper.php' );
    }
}

/*
 * 3. Admin settings page - save data
 * function that saves our plugin settings (from inc/options-page-wrapper.php)
 * to the WordPress database inside the wp_options table
*/
if( !function_exists('contactform_update_settings') ) {
    function contactform_update_settings() {
        /* register each field
         * from our inc/options-page-wrapper.php page
        */
        register_setting( 'contactform_fields', 'contactform_email' );
        register_setting( 'contactform_fields', 'contactform_message' );
    }
    add_action( 'admin_init', 'contactform_update_settings' );
}

/*
 * 4. Template tags
 * Require our Template tags file which contains all the functions for our
 * template tags
*/
require_once( $contact_plugin_root . 'inc/template-tags.php' );

/*
 * 5. Template tags - incude for themes
 * Tell WordPress to include our template-tags.php file for our theme, so
 * our template tag functions can be used in our theme. This is achieved via the
 * WordPress action 'after_setup_theme'
*/
if( !function_exists('contactform_include_template_tags') ) {
    function contactform_include_template_tags() {
        global $contact_plugin_root;
        include_once( $contact_plugin_root . 'inc/template-tags.php' );
    }
    add_action( 'after_setup_theme', 'contactform_include_template_tags' );
}

/*
 * 6. Include custom CSS styles
 * Tell WordPress to include custom stylesheets 'assets/mb-contactform-styles.css'
 * in our theme so it's included in the document <head>
*/
if ( !function_exists('contactform_add_custom_styles') ) {
    function contactform_add_custom_styles() {
        global $contact_plugin_root_url;

        /* Enqueue each stylesheet */
        wp_enqueue_style( 'mb-contactform', $contact_plugin_root_url . 'assets/contactform-styles.css' );
    }
    add_action( 'wp_enqueue_scripts', 'contactform_add_custom_styles' );
}

/*
 * 7. Setup database table for contact us
 * This only needs to be executed once, so we add it to the
*/
if(!function_exists('contactform_dbsetup')){
    function contactform_dbsetup(){
        // Create db table 'vehicle_bookings'; using the $wpdb global variable
        global $wpdb;

        $table_name = $wpdb->prefix . "contact_form";
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE IF NOT EXISTS $table_name(
                id MEDIUMINT(9) NOT NULL AUTO_INCREMENT,
                name VARCHAR(320) NOT NULL,
                email VARCHAR(320) NOT NULL,
                message VARCHAR(320) NOT NULL, 
                PRIMARY KEY (id)
            ) $charset_collate; ";

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }

    // run the above dbsa_setup function upon plugin activation
    register_activation_hook(__FILE__, 'contactform_dbsetup');
}

/*
 * 8. Template tags
 * Require our Template tags file which contains all the functions for our
 * template tags
*/
require_once( $contact_plugin_root . 'inc/template-tags.php' );

/*
 * 5. Template tags - include for themes
 * Tell WordPress to include our template-tags.php file for our theme, so
 * our template tag functions can be used in our theme. This is achived via the
 * WordPress action 'after_setup_theme'
*/
if( !function_exists('contactform_include_template_tags') ) {
  function contactform_include_template_tags() {
    global $contact_plugin_root;
    include_once( $contact_plugin_root . 'inc/template-tags.php' );
  }
  add_action( 'after_setup_theme', 'contactform_include_template_tags' );
}

?>
