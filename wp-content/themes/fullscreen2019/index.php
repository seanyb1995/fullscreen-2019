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
      
      <!--page banner-->
      <section class="section-1">

        <div class="section-1-stars">
          <!--sun svg-->
          <div class="section-1-sun" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/sun-assetv2.svg');">
            
            <!--forefront mountain svg-->
            <div class="section-1-mountains section-1-mountains-back" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');"></div>
            
            <!--background mountain svg-->
            <div class="section-1-mountains section-1-mountains-front" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');">
              
              <!--break line between banner and content-->
              <div class="section-1-blue-line"></div>
              
            </div>
            
          </div>

        </div>

      </section>
      
      <!--page content-->
      <section class="main-content">
        
        <!--star bottom svg-->
        <div class="section-2-stars" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/stars-bottom-final.svg');">
          
          <div class="section-2" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/bottom-path.svg');">
            
            <!--path svg-->
            <div class="section-2-road" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/path_new.svg');">
            
            </div>
            
          </div>
          
          <!--about section-->
          <section class="section-3-about">

            <div class="container section-3">

              <div class="section-3-content">

                <!--top left pixal-->
                <div class="top-left"></div>

                <!--top border-->
                <div class="top"></div>

                <!--top right pixal-->
                <div class="top-right"></div>
                
                <!--about content-->
                <div class="about-content">
                  <h3><?php the_field('heading_1'); ?></h3>
                  <p><?php the_field('paragraph_1'); ?></p>
                </div>

                <!--bottom left pixal-->
                <div class="bottom-left"></div>

                <!--bottom border-->
                <div class="bottom"></div>

                <!--bottom right pixal-->
                <div class="bottom-right"></div>
                
                
              </div>
              
            </div>
            
          </section>
          
        </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();