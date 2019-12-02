<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fullscreen2019
 */

// transfer session across pages
session_start();
// session_unset();
// session_destroy();

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
    
    <?php create_bootstrap_menu("primary"); ?><!-- #site-navigation -->
    
    <!--wishlist-->
<!--     <div class="wrap">
      <li>
        <a class="wishlist"><i class="fa fa-star" aria-hidden="true"></i> Wishlist</a>
        <div class="wishlistDropdown">
        </div>
      </li>
    </div> -->
    
	</header><!-- #masthead -->

	<div id="content" class="site-content">
