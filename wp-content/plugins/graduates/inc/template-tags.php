<?php
/*
 * function that creates template tag function 'graduates'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/

add_action('wp_ajax_myfilter', 'digital_design_filter_function'); // wp_ajax_{ACTION HERE}
add_action('wp_ajax_nopriv_myfilter', 'digital_design_filter_function');

  function digital_design_filter_function() {
    session_start();
//     session_destroy();
    // if any filters are set 
  
    $digital_design = $_POST['digital_design'];
    $animation_and_game_design = $_POST['animation_and_game_design'];
    $graphic_design = $_POST['graphic_design'];
    $illustration = $_Post['Illustration'];
    $creative_advertising = $_POST['creative_advertising'];
    $major = $_POST['major'];
    $search = $_POST['search'];
    
    $favourite = $_POST['favourite'];
    
    if  ( ! isset($_SESSION['favourite'])) {
      $_SESSION['favourite'] = array();
    }
    
    $_SESSION['single_graduate'] = array();
    
    if(isset($favourite)){
      array_push($_SESSION['single_graduate'], $favourite);
      array_push($_SESSION['favourite'], $_SESSION['single_graduate']);
      print_r($_SESSION['favourite']);
    }
    
    // setup the parameters for the query
    $tax_query = "";
    
    /*
        if category is not empty, then filter must be active
        set var $tax_query to be used in out final WP query
        for the product post
    */
       
   // Check if filter is set if so query database by specialisation from POST
    
    
    // Check digital design page for form submission
    if( $digital_design !=""){
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> 'specialisation',
      'meta_value'	=> $digital_design
    );
      
    // Check animation and game design page for form submission
    }elseif( $animation_and_game_design !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> 'specialisation',
      'meta_value'	=> $animation_and_game_design
    );    
      
    // Check graphic design page for form submission  
    }elseif( $graphic_design !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> 'specialisation',
      'meta_value'	=> $graphic_design
    );    
      
    // Check illustration page for form submission  
    }elseif( $illustration !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> 'specialisation',
      'meta_value'	=> $illustration
    );  
      
    // Check creative advertising page for form submission    
    }elseif( $creative_advertising !=""){
     
    $args = array(
      'post_type'		=> 'graduates',
      'meta_key'		=> 'specialisation',
      'meta_value'	=> $creative_advertising
    );   
      
    }elseif( $search !=""){ 
      
    $args = array(
        'post_type' => 'graduates',
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'specialisation',
                'value' => $major,
                'compare' => '='
            ),

            array(
                'key' => 'name',
                'value' => $search,
                'compare' => 'LIKE'
            ),
          
            array(
                'key' => 'project_1_name',
                'value' => $search,
                'compare' => 'LIKE'
            ),
          
            array(
                'key' => 'project_2_name',
                'value' => $search,
                'compare' => 'LIKE'
            ),
          
            array(
                'key' => 'project_3_name',
                'value' => $search,
                'compare' => 'LIKE'
            )
          
        )
    );
 
    }else{
      // If no select is made show graduates specific to major
      $args = array(
          'post_type' => 'graduates',
          'orderby' => 'menu_order',
          'order' => 'ASC',
          'tax_query' => array(
            array(
              'taxonomy' => 'major',
              'field' => 'slug',
              'terms' => $major
            )
          )
        );
    }     
   
  
  $graduates = new WP_Query($args);
  if( $graduates->have_posts() ): ?>
    <?php while($graduates->have_posts()): $graduates->the_post(); ?>
      <div class="graduate">
        <input type="checkbox" name="checkbox" id="checkbox" value="<?php the_title(); ?>"/>
        <h1><?php the_title(); ?></h1>
          <?php   // Get terms for post
           $terms = get_the_terms( $post->ID , 'major' );
           // Loop over each item since it's an array
           if ( $terms != null ){
           foreach( $terms as $term ) {
           // Print the name method from $term which is an OBJECT
           echo '<h3>' . $term->name .'</h3>';
           // Get rid of the other data stored in the object, since it's not needed
           unset($term);
          } } ?>
        <p>
          <?php 
                   
            $specialisation = get_field_object('specialisation'); 
            echo $specialisation['value'];
    
          ?>
        </p>
      </div>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }

 
