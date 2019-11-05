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
        <p></p>
      </div>
    <?php endwhile ?>
  <?php endif ?>
  <?php
  }
}
