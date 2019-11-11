<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fullscreen2019
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
    <section class="fullscreen-footer" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/stars-bottom-final.svg');">
      
      <div class="container">
        <div class="row precision-row-block">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 bottom-pixels">
<!--             <div class="container-fluid"> -->
              <div class="row">
                <div class="col-12">
                  <a class="fullscreen-custom-logo-constraints" href="<?php echo home_url() ?>" rel="home"><?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ) ?></a>
                </div>
                <div class="col-12">
                  <a href="https://www.facebook.com/fullscreen2019/" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                  <a href="https://www.instagram.com/fullscreen_2019/?hl=en" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/digdesigncurtin?lang=en" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                </div>
              </div>
<!--             </div> -->
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-2 bottom-pixels">
            <?php get_footer_menu_items_main('primary'); ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 bottom-pixels">
            <?php get_footer_menu_items_sub('primary'); ?>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 bottom-pixels">
            <div class="row">
              <div class="col-12">
                <p>Search</p>
              </div>
              <div class="col-12">
                <img class="curtin-logo" src="<?php echo get_template_directory_uri() ?>/images/curtin-university.svg" alt="Curtin University"/>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </section>
    
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
