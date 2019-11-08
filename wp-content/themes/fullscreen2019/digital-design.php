<?php 
/**
 * Template Name: Digital Design
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

// transfer session to digital design page

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        <h1>Some dank favourites</h1>
        <p><?php if(isset($_SESSION["favourite"])) { echo $_SESSION["favourite"]; } ?></p>
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc24f68cd814"; 
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="digital_design">';

                echo '<option value="">All</option>';

                foreach( $field['choices'] as $k => $v ) {
                  echo '<option value="' . $k . '"';

                  if ( $k == $specialisation ) {
                    echo ' selected';
                  }
                  echo '>' . $v . '</option>';
                }

                echo '</select>';
              }
          ?>
          <input type="hidden" name="favourite" id="favourite" value="">
          <input type="hidden" name="major" value="digital_design">
          <input type="hidden" name="action" value="myfilter">
          
          <input type="text" name="search" placeholder="search">
          <input type="submit" id="submit" value="submit">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
