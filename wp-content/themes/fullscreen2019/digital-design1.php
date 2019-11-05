<?php
/**
 * Template Name: Digital Design
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <?php // graduates(); ?>
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 

              echo '<select name="categoryfilter"><option value="">Select category...</option>';
              foreach ( $terms as $term ) :
                echo '<option value="' . $term->term_id . '">' . $term->name . '</option>'; // ID of the category as the value of an option
              endforeach;
              echo '</select>';
            endif;
          ?>
          <input type="hidden" name="action" value="ddgfilter">
        </form>
        
        <div id="response"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
