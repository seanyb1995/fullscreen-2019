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
              
              <div class="row">
                <div class="col-12">
                  <h1 class="graduate-header-title"><?php echo get_the_title(); ?></h1>
                </div>
              </div>
              
              <div class="row">
                <div class="col-12">
                  
                  <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
                    
                    <div class="searchfunction">
                      <input type="text" name="search" id="searchinput" placeholder="Search">
                      <input type="submit" id="searchbutton" value="Search" class="only-visible-desktop">
                      <input type="submit" id="searchbutton" class="search only-visible-mobile" value="&#xf002;" />
                    </div>
                    
                    <div class="dropdown">
                      <button type="button" id= "major-btn" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Specialisation</button>

                      <div class="dropdown-menu dropdown-menu-right graduates-dropdown">
                      <?php
                        $field_key = "field_5dc25038ec2d9"; 
                        $field = get_field_object($field_key);

                          if( $field ) {
                            echo '<a class="dropdown-item graduates-dropdown-label" href="#">';
                            echo '<input type="checkbox" value="" name="Illustration" hidden/>';
                            echo '<label for="all" >All</label>';
                            echo '</a>';

                            foreach( $field['choices'] as $k => $v ) {
                              echo '<a class="dropdown-item graduates-dropdown-label" href="#">';
                              echo '<input type="checkbox" value="' . $k . '" name="Illustration" hidden/>';
                              echo '<label for="' . $v . '" >' . $v . '</label>';
                              echo '</a>';
                            }

                            echo '</select>';

                          }
                      ?>

                      </div>

                    </div>
                    <!--hidden variables for taxonomy query-->
                    <input type="hidden" name="favourite" id="favourite" value="">
                    <input type="hidden" name="major" value="Illustration">
                    <input type="hidden" name="specialisation" value="i_specialisation">
                    <input type="hidden" name="action" value="myfilter">
                    
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
      
      </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
