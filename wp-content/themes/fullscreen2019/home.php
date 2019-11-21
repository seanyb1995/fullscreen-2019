<?php 
/**
 * Template Name: Home 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
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
          
          <!--bottom path svg-->
          <div class="section-2" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/bottom-path2.svg');">
            
            <!--path svg-->
            <div class="section-2-road" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/path_new2.svg');">
            
            </div>
            
          </div>
          
          <!--about section-->
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
                  
                  <p><?php echo get_field('paragraph_1'); ?></p>
                  
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
          
          <!--graduates section-->
          <div class="section-3-about">
            
            <div class="section-3-moon">
              <img src="<?php echo get_template_directory_uri() ?>/images/moon-new.svg" alt="Moon"/>
            </div>

            <div class="container section-3">

              <div class="section-3-content">

                <!--top left pixal-->
                <div class="top-left"></div>

                <!--top border-->
                <div class="top"></div>

                <!--top right pixal-->
                <div class="top-right"></div>
                
                
                
                <!--about content--><!-- !!!!! THE INNER CONTENT STARTS HERE !!!!! --><!-- !!!!! THE INNER CONTENT STARTS HERE !!!!! -->
                <div class="graduate-content">
                  
                  <h3><?php echo get_field('heading_2'); ?></h3>
                  
                  <div class="container-fluid">
                    <div class="row graduates-margin-outer">
                      <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2dot4 graduates-margin-bottom">
                        <a href="<?php echo home_url() ?>/digital-design">
                          <!--digital design-->
                          <div class="major"> 

                            <!--top left pixal-->
                            <div class="top-left"></div>

                            <!--top border-->
                            <div class="top"></div>

                            <!--top right pixal-->
                            <div class="top-right"></div>

                            <!--major icon-->
                            <div class="major-icon">

                              <?php 
                              $image = get_field('image_1');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?>

                            </div>

                            <!--major title-->
                            <h4>Digital Design</h4>

                             <!--bottom left pixal-->
                            <div class="bottom-left"></div>

                            <!--bottom border-->
                            <div class="bottom"></div>

                            <!--bottom right pixal-->
                            <div class="bottom-right"></div>

                          </div>
                        </a>
                      </div>
                      
                      <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2dot4 graduates-margin-bottom">
                        <a href="<?php echo home_url() ?>/games-animation-design">
                          <!--games and animation design-->
                          <div class="major"> 

                            <!--top left pixal-->
                            <div class="top-left"></div>

                            <!--top border-->
                            <div class="top"></div>

                            <!--top right pixal-->
                            <div class="top-right"></div>

                            <!--major icon-->
                            <div class="major-icon">

                               <?php 
                              $image = get_field('image_2');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?>

                            </div>

                            <!--major title-->
                            <h4>Games and Animation</h4>

                             <!--bottom left pixal-->
                            <div class="bottom-left"></div>

                            <!--bottom border-->
                            <div class="bottom"></div>

                            <!--bottom right pixal-->
                            <div class="bottom-right"></div>

                          </div>
                        </a>
                      </div>
                      
                      <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2dot4 graduates-margin-bottom">
                        <a href="<?php echo home_url() ?>/graphic-design">
                          <!--graphic design design-->
                          <div class="major"> 

                            <!--top left pixal-->
                            <div class="top-left"></div>

                            <!--top border-->
                            <div class="top"></div>

                            <!--top right pixal-->
                            <div class="top-right"></div>

                            <!--major icon-->
                            <div class="major-icon">

                              <?php 
                              $image = get_field('image_3');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?>

                            </div>

                            <!--major title-->
                            <h4>Graphic Design</h4>

                             <!--bottom left pixal-->
                            <div class="bottom-left"></div>

                            <!--bottom border-->
                            <div class="bottom"></div>

                            <!--bottom right pixal-->
                            <div class="bottom-right"></div>

                          </div>
                        </a>
                      </div>
                      
                      <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2dot4 graduates-margin-bottom">
                        <a href="<?php echo home_url() ?>/creative-advertising">
                          <!--creative advertising design-->
                          <div class="major"> 

                            <!--top left pixal-->
                            <div class="top-left"></div>

                            <!--top border-->
                            <div class="top"></div>

                            <!--top right pixal-->
                            <div class="top-right"></div>

                            <!--major icon-->
                            <div class="major-icon">

                              <?php 
                              $image = get_field('image_4');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?>

                            </div>

                            <!--major title-->
                            <h4>Creative Advertising</h4>

                             <!--bottom left pixal-->
                            <div class="bottom-left"></div>

                            <!--bottom border-->
                            <div class="bottom"></div>

                            <!--bottom right pixal-->
                            <div class="bottom-right"></div>

                          </div>
                        </a>
                      </div>
                      
                      <div class="col-12 col-xs-12 col-sm-6 col-md-4 col-lg-2dot4 graduates-margin-bottom">
                        <a href="<?php echo home_url() ?>/illustration">
                          <!--illustration design-->
                          <div class="major"> 

                            <!--top left pixal-->
                            <div class="top-left"></div>

                            <!--top border-->
                            <div class="top"></div>

                            <!--top right pixal-->
                            <div class="top-right"></div>

                            <!--major icon-->
                            <div class="major-icon">

                              <?php 
                              $image = get_field('image_5');
                              if( !empty( $image ) ): ?>
                                  <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                              <?php endif; ?>

                            </div>

                            <!--major title-->
                            <h4>Illustration</h4>

                             <!--bottom left pixal-->
                            <div class="bottom-left"></div>

                            <!--bottom border-->
                            <div class="bottom"></div>

                            <!--bottom right pixal-->
                            <div class="bottom-right"></div>

                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  
                </div>
                
                <!-- !!!!! THE INNER CONTENT ENDS HERE !!!!! --><!-- !!!!! THE INNER CONTENT ENDS HERE !!!!! -->

                <!--bottom left pixal-->
                <div class="bottom-left"></div>

                <!--bottom border-->
                <div class="bottom"></div>

                <!--bottom right pixal-->
                <div class="bottom-right"></div>
                
                
              </div>
              
            </div>
            
          </div>
          
          <!--grad show date section-->
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
                  
                  <h3 class="h3-date"><?php echo get_field('heading_3'); ?></h3>
                  
                  <h1><?php echo get_field('paragraph_3'); ?></h1>
                  
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
                  
                  <h3 class="h3-contact"><?php echo get_field('heading_4'); ?></h3>
                  
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

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();