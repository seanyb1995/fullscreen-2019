<?php
/**
 * Template Name: Digital Design
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Activated_Almond_Digital
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
      <!--testing environment-->
      <section class="test-environment">
        
        <?php // graduates(); ?>
        
        <form action="<?php echo site_url() ?>/wp-admin/admin-ajax.php" method="POST" id="filter">
          <?php
            $field_key = "field_5dc0eb0bb0adb"; // <-- Find this by turning on Field Keys under Screen Options in admin interface
              $field = get_field_object($field_key);

              if( $field ) {
                echo '<select name="specialisation">';

                echo '<option>All</option>';

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
          <input type="hidden" name="action" value="ddgfilter">
        </form>
        
        <div id="graduates"></div>
        
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
