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
        'taxonomy' => 'major',
        'field' => 'term_id',
        'terms' => $major
    )
    );
    }
    
    if( $major !=""){
    $args = array(
        'post_type' => 'showreels',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query_major
    );
      
    }else{
        
    // else, just query all posts as normal (no filtering)
      
    $tax_query_major = array(
    array(
        'taxonomy' => 'major',
        'field' => 'term_id',
        'terms' => 8
    )
    );
    
    $args = array(
        'post_type' => 'showreels',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'tax_query' => $tax_query_major
    );
      
    }
      
  
    
   // Check if filter is set if so query database by specialisation from POST
    
    
   
  
  $major = new WP_Query($args);
  if( $major->have_posts() ): ?>
    <?php while($major->have_posts()): $major->the_post(); ?>
      <div class="showreels">
        <h1><?php the_title(); ?></h1>
        <iframe width="560" height="315" src="<?php $video = get_field_object('video'); echo $video['value']; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }

 
