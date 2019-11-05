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
        <?php graduates(); ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
