<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fullscreen2019
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      
      <section class="page-section-1">

        <div class="page-section-1-stars">
          
          <div class="page-section-1-sun" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/sun-assetv2.svg');">
            
            <div class="page-section-1-mountains section-1-mountains-back" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');"></div>
            
            <div class="page-section-1-mountains section-1-mountains-front" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');">
              <div class="page-section-1-blue-line"></div>
            </div>
            
          </div>

        </div>

      </section>
      
      <section class="main-content">
        
        <div class="section-2-stars" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/stars-bottom-final.svg');">
          
          <div class="section-2">
            
            <section class="section section-page-header">
              <div class="section-page-header-title">
                <h3><?php single_post_title(); ?></h3>
              </div>
            </section>
            
          </div>
          
        </div>
      
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
