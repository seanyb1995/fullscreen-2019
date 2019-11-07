<?php
/*
 * Plugin Name: Graduates
 * Plugin URI:
 * Description: A simple plugin that creates a post about graduates
 * Version: 1.0
 * Author: Sean Buchanan
 * Author URI:
 * License: GPL2
*/
/*
 * create $plugin_root variable
 * This saves us writing out plugin_dir_path(__FILE__) each time
 * We also create a $menu_plugin_root_url , which is similar, but insteead of 
 * outputting the PHP file path, it outputs the URL path chich is required for 
 * only scripts or stylesheets we include in the head
*/
$graduates_plugin_root = plugin_dir_path(__FILE__);
$graduates_plugin_root_url = plugin_dir_url(__FILE__);
/* --------------------------------------------------------------------------------
* 0. Setup product post type and product taxonomy
*/
require_once( $graduates_plugin_root . 'inc/cpt-graduates.php' );
require_once( $graduates_plugin_root . 'inc/tax-major.php' );
add_action('init', 'graduates_post_type');
add_action('init', 'graduates_major_taxonomy');
/*
 * 4. Template tags
 * Require our Template tags file which contains all the functions for our 
 * template tags
*/
require_once( $graduates_plugin_root . 'inc/template-tags.php' );
/*
 * 5. Template tags - include for themes
 * tell wordpress to include our template-tags.php file for our theme, so
 * our template tag functions can be used in our theme. this is achieved via the 
 * wordpress action 'after_setup_theme'
*/
if( !function_exists('menu_include_template_tags' ) ) {
    function menu_include_template_tags() {
        global $graduates_plugin_root;
        include_once( $graduates_plugin_root . 'inc/template-tags.php' );
    }
    add_action( 'after_setup_theme', 'menu_include_template_tags' );
} 

?>