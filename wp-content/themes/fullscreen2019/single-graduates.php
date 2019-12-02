<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fullscreen2019
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
                
                  <div class="individual">
                    
                    <div class="container-fluid graduate"> <!--  -->
                      
                    <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="wishlist">
                      <input type="text" name="favourite" id="favourite" value="" hidden>
                      <input type="text" name="link" id="link" value="" hidden>
                      <input type="hidden" name="action" value="wishlist">
                    </form>
                      
                      <div class="row">
                      
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"> <!-- Image -->

                          <div class="image">
                              <img src="https://cdn0.tnwcdn.com/wp-content/blogs.dir/1/files/2018/08/bitconnect-1.png" alt="graduate">
                          </div>
                          
                            <div class="row individual_attributes">

                              <div class="col-12">

                                <div class="attribute_container container-fluid">
                                  <div class="row">
                                    <div class="col-6">
                                      <h5><?php echo get_field('attribute_1_name'); ?></h5>
                                    </div>
                                    <div class="col-6">
                                      <div class="row">
                                        <?php
                                        
                                        $skills = get_field("attribute_1_value");
                                        
                                        
                                        for ($k = 0 ; $k < $skills; $k++){ echo '<div class="col-2dot4"><div class="attribute-skill-level"></div></div>'; }
  
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="col-12">

                                <div class="attribute_container container-fluid">
                                  <div class="row">
                                    <div class="col-6">
                                      <h5><?php echo get_field('attribute_2_name'); ?></h5>
                                    </div>
                                    <div class="col-6">
                                      <div class="row">
                                        <?php
                                        
                                        $skills = get_field("attribute_2_value");
                                        
                                        
                                        for ($k = 0 ; $k < $skills; $k++){ echo '<div class="col-2dot4"><div class="attribute-skill-level"></div></div>'; }
  
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="col-12">

                                <div class="attribute_container container-fluid">
                                  <div class="row">
                                    <div class="col-6">
                                      <h5><?php echo get_field('attribute_3_name'); ?></h5>
                                    </div>
                                    <div class="col-6">
                                      <div class="row">
                                        <?php
                                        
                                        $skills = get_field("attribute_3_value");
                                        
                                        
                                        for ($k = 0 ; $k < $skills; $k++){ echo '<div class="col-2dot4"><div class="attribute-skill-level"></div></div>'; }
  
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="col-12">

                                <div class="attribute_container container-fluid">
                                  <div class="row">
                                    <div class="col-6">
                                      <h5><?php echo get_field('attribute_4_name'); ?></h5>
                                    </div>
                                    <div class="col-6">
                                      <div class="row">
                                         <?php
                                        
                                        $skills = get_field("attribute_4_value");
                                        
                                        
                                        for ($k = 0 ; $k < $skills; $k++){ echo '<div class="col-2dot4"><div class="attribute-skill-level"></div></div>'; }
  
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                              <div class="col-12">

                                <div class="attribute_container container-fluid">
                                  <div class="row">
                                    <div class="col-6">
                                      <h5><?php echo get_field('attribute_5_name'); ?></h5>
                                    </div>
                                    <div class="col-6">
                                      <div class="row">
                                        <?php
                                        
                                        $skills = get_field("attribute_5_value");
                                        
                                        
                                        for ($k = 0 ; $k < $skills; $k++){ echo '<div class="col-2dot4"><div class="attribute-skill-level"></div></div>'; }
  
                                        ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              </div>

                            </div>

                        </div>
                        
                        <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6"> <!-- Main Info -->

                          <div class="text">
                            
                            <div class="individual-majors">
                              
                              <!--majors-->
                              <?php   // Get terms for post
                               $terms = get_the_terms( $post->ID , 'major' );
                               // Loop over each item since it's an array
                               if ( $terms != null ){
                                 foreach( $terms as $term ) {
                                 // Print the name method from $term which is an OBJECT
                                  $words = explode(" ", $term->name);
                                  $acronym = "";

                                  foreach ($words as $w) {
                                    $acronym .= $w[0];
                                  }
                                  echo '<div id="' . $term->slug . '" class="name"><h3>' . $acronym . '</h3></div>';
                                 // Get rid of the other data stored in the object, since it's not needed
                                 unset($term);
                                 } 
                               } 
                              ?>
                              
                            </div>

                              <!--graduate name-->
                              <h3 class="h3-title"><?php the_title(); ?></h3>
                              <p><i>"<?php echo get_field('quote'); ?>"</i></p>
                              <p><?php  echo get_field('bio');  ?></p>
                              
                              <div class="links">
                                
                                <div class="social">
                                  
                                  <ul>
                                    <li><a href="<?php echo the_field('facebook_url'); ?>"><i class="fa fa-facebook-square"></i></a></li>
                                    <li><a href="<?php echo the_field('instagram_url'); ?>"><i class="fa fa-instagram"></i></a></li>
                                    <li><a href="<?php echo the_field('linkedin_url'); ?>"><i class="fa fa-linkedin"></i></a></li>
                                  </ul>
                                  
                                </div>
                                
                                <div class="portfolio">
                                  
                                  <a href="<?php echo the_field('portfolio_url'); ?>" target="_blank"><input type="button" id="button" name="button" value="View Portfolio"></input></a>
                                
                                </div>
                              
                              </div>
                            
                            </div>

                        </div>

                      </div>
                    
                      <div class="row projects">
                    
                        <div class="col-12">
                        
                          <?php 

                            $image = get_field('project_1_image');
                            if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                          <?php endif; ?>
                        
                        </div>
                        
                        <div class="col-12">
                        
                          <?php 

                            $image = get_field('project_2_image');
                            if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                          <?php endif; ?>
                        
                        </div>
                        
                        <div class="col-12">
                        
                          <?php 

                            $image = get_field('project_3_image');
                            if( !empty($image) ): ?>

                            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                          <?php endif; ?>
                        
                        </div>
                        
                      </div>

                    </div>   

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
