<?php 
/**
 * Template Name: Illustration
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

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

              <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                <?php
                  $field_key = "field_5dc25038ec2d9"; 
                    $field = get_field_object($field_key);

                    if( $field ) {
                      echo '<select name="specialisation">';

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
                <input type="hidden" name="major" value="Illustration">
                <input type="hidden" name="action" value="myfilter">
              </form>

              <div id="graduates"></div>
              
            </div>
            
          </div>
          
        </div>
      
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
