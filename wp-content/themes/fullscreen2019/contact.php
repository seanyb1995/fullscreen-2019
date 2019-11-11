<?php 
/**
 * Template Name: Contact
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
      
      <section class="page-section-1">

        <div class="page-section-1-stars">
          
          <div class="page-section-1-sun">
            
            <div class="page-section-1-mountains page-section-1-mountains-back" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');"></div>
            
            <div class="page-section-1-mountains page-section-1-mountains-front" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/mountain.svg');">
              <div class="page-section-1-blue-line"></div>
            </div>
            
          </div>

        </div>

      </section>
      
      <section class="main-content">
        
        <div class="section-2-stars" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/stars-bottom-final.svg');">
          
          <div class="section-2 page-section-2">
            
          </div>
          
          <!--contact section-->
          <div class="section-3-about">

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
                  
                  <h3 class="h3-about"><?php echo get_field('heading_1'); ?></h3>
                  
                  <?php contactform_box(); ?>
                  
                </div>

                <!--bottom left pixal-->
                <div class="bottom-left"></div>

                <!--bottom border-->
                <div class="bottom"></div>

                <!--bottom right pixal-->
                <div class="bottom-right"></div>
                
                
              </div>
              
            </div>
            
          </div>
          
        </div>
      
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
