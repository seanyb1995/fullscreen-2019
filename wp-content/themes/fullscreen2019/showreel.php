<?php 
/**
 * Template Name: Showereel
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fullscreen2019
 */

// transfer session to fullscreen2019 page

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

            <div class="container section-3 showreel-page">

              <!-- Filter DIV -->
              <div class="row">
                <div class="col showreel-filter">
                <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="form">
                  <?php
                    if( $terms = get_terms( array( 'taxonomy' => 'major', 'orderby' => 'name' ) ) ) : 

                      foreach ( $terms as $term ) :

                        echo '<input type="checkbox" value="' . $term->term_id .'" name="major" class="" id="' . $term->name .'" hidden/>';
                        echo '<label class="showreel-checkbox" for="' . $term->name .'">' . $term->name .'</label>';
                        echo '<div class="showreel-filter-divider"></div>';

                      endforeach;
                      echo '</select>';
                    endif;
                  ?>
                  <input type="hidden" name="action" value="srfilter">
                  </form>
                  <div id="showreels"></div>
                </div>
              </div>
              
              <!-- Video DIV -->
              <div class="row">
                <div class="col">
<!--                   <iframe src="https://www.youtube.com/embed/21kGmCsJ5ZM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                </div>
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
