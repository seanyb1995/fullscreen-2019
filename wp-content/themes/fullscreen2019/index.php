<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fullscreen2019
 */

$classes = get_body_class();

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      
      <?php if (in_array('fullscreen_mobile', $classes)) { 
      ?><section class="section-1 section-1-isMobile"><?php
      } else {
      ?><section class="section-1"><?php
      }?>

        <div class="section-1-stars">
          
          <div class="section-1-sun" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/sun-assetv2.svg');">
            
            <div class="section-1-mountains section-1-mountains-back" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');"></div>
            
            <div class="section-1-mountains section-1-mountains-front" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');">
              <div class="section-1-blue-line"></div>
            </div>
            
          </div>
          
<!--           <img src="<?php //echo get_template_directory_uri() ?>/images/mountain.svg" alt="Mountains"/> -->

        </div>

      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();