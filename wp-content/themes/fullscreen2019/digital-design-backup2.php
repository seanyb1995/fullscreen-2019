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
              
<!--               <div class="dropdown">
                <button type="button" id= "major-btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                  MAJOR
                </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">FRONT END DEVELOPMENT</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">BACK END DEVELOPMENT</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">UI/UX DESIGNER</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">FULL STACK DEVELOPER</a>
                </div>
              </div> -->
              
              <div class="row">
                <div class="col-12">
                  
                  <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    <div class="dropdown">
                      <button type="button" id= "major-btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Specialisation</button>

                      <div class="dropdrop-menu">
                      <?php
                        $field_key = "field_5dc24f68cd814"; 
                        $field = get_field_object($field_key);

                          if( $field ) {
                            echo '<div class="dropdown">';
                            echo '<input type="checkbox" value="" name="digital_design">';
                            echo '<label for="all" >All</label>';
                            echo '</div>';

                            foreach( $field['choices'] as $k => $v ) {
                              echo '<div class="dropdown">';
                              echo '<input type="checkbox" value="' . $k . '" name="digital_design"/>';
                              echo '<label for="' . $v . '" >' . $v . '</label>';
                              echo '</div>';
                            }

                            echo '</select>';

                          }
                      ?>

                      </div>

                    </div>
                    <input type="hidden" name="favourite" id="favourite" value="">
                    <input type="hidden" name="major" value="digital_design">
                    <input type="hidden" name="specialisation" value="dd_specialisation">
                    <input type="hidden" name="action" value="myfilter">

  <!--                   <input type="text" name="search" placeholder="search">
                    <input type="submit" id="submit" value="submit"> -->
                  </form>
                
                </div>
              </div>
              
              <div class="row">
                
                <div class="col-12">
              
                  <div id="graduates"></div>
                  
                </div>
              
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
