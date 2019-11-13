<?php
/*
 * function that creates template tag function 'graduates'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

add_action('wp_ajax_srfilter', 'showreel_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_srfilter', 'showreel_filter_function');

  function showreel_filter_function() {
  
    $major = $_POST['major'];
    
    // setup the parameters for the query
    $tax_query = "";
    
    /*
        if category is not empty, then filter must be active
        set var $tax_query to be used in out final WP query
        for the product post
    */
       
    if( $major != "" ){
    $tax_query_major = array(
    array(
        'taxonomy' => 'filter',
        'field' => 'term_id',
        'terms' => $major
    )
    );
    }
    
    if( $major !=""){
    $args = array(
        'post_type' => 'case_study',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query_major
    );
      
    }else{
        
    // else, just query all posts as normal (no filtering)
    $args = array(
        'post_type' => 'showreels',
        'orderby' => 'menu_order',
        'order' => 'ASC'
    );
    }
    
   // Check if filter is set if so query database by specialisation from POST
    
    
   
  
  $major = new WP_Query($args);
  if( $major->have_posts() ): ?>
    <?php while($major->have_posts()): $major->the_post(); ?>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }

 
