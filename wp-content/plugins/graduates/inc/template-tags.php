<?php
/*
 * function that creates template tag function 'graduates'
 * this function queries WP database for the staff posts and uses the WP loop
 * to output some HTML for each product with a heading and link.
 * A dropdown appears allowing the front-end user to filter by the category taxonomy
*/
if ( ! function_exists( 'graduates' ) ) {
  function graduates() {
    
  $args = array(
    'post_type' => 'graduates',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  );
  
  $graduates = new WP_Query($args);
  if( $graduates->have_posts() ): ?>
    <?php while($graduates->have_posts()): $graduates->the_post(); ?>
      <div class="graduate">
        <h1><?php the_title(); ?></h1>
        <?php 

          $majors = get_field('major'); 

          foreach ( $majors as $major ) :
           
            echo '<h3>' . $major .'</h3>';

          endforeach;

        ?>
        <p>
          <?php 
                   
            $specialisation = get_field_object('digital_design_specialisation'); 
            echo $specialisation['value'];
    
          ?>
        </p>
      </div>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
