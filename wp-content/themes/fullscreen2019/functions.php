<?php
/**
 * Fullscreen2019 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fullscreen2019
 */

if ( ! function_exists( 'fullscreen2019_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fullscreen2019_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Fullscreen2019, use a find and replace
		 * to change 'fullscreen2019' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'fullscreen2019', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'fullscreen2019' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'fullscreen2019_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'fullscreen2019_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fullscreen2019_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'fullscreen2019_content_width', 640 );
}
add_action( 'after_setup_theme', 'fullscreen2019_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fullscreen2019_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'fullscreen2019' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'fullscreen2019' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'fullscreen2019_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fullscreen2019_scripts() {
// 	wp_enqueue_style( 'fullscreen2019-style', get_stylesheet_uri() );
  
  wp_enqueue_style( 'fullscreen2019-style', get_template_directory_uri() . '/css/stylesheet.min.css' );
  
  wp_enqueue_style( 'fullscreen2019-fontawesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' ); //FONTAWESOME STYLESHEET
  
  wp_enqueue_style( 'bootstrap4', get_template_directory_uri() . '/css/Bootstrap/bootstrap.min.css' ); //BOOTSTRAP
  
  wp_enqueue_style( 'bootstrap-custom-grid-5', get_template_directory_uri() . '/css/Bootstrap/custom-bootstrap-grid-5.css' ); //Custom 5 Grid
  
  wp_enqueue_script('jquery', false, array(), false, false);

	wp_enqueue_script( 'fullscreen2019-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'fullscreen2019-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
  
  wp_enqueue_script( 'ajax', get_template_directory_uri() . '/js/ajax.js', array(), '20191105', true );
  
  wp_register_script('fullscreen2019-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js','','20191118', true);
  wp_enqueue_script('fullscreen2019-popper'); //POPPER

  wp_enqueue_script('fullscreen2019-bootstrap', get_template_directory_uri() . '/js/Bootstrap/bootstrap.min.js', array(), '20191105', true); //BOOTSTRAP
  
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fullscreen2019_scripts' );

/**
 * Bootstrap nav menu.
 */
function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
      if( $theme_location == 'primary' ) {
        
        $menu_list  = '<nav class="navbar navbar-dark navbar-expand-lg fullscreen-site-navigation">' ."\n";
        $menu_list .= '<div class="container">' ."\n";
      
          $menu_list .= '<a class="navbar-brand fullscreen-custom-logo-constraints" href="' . home_url() . '" rel="home">' . wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ) . '</a>';
          $menu_list .= '<button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">' ."\n";
          $menu_list .= '<span class="sr-only">Toggle navigation</span>' ."\n";
          $menu_list .= '<span class="icon-bar"></span>' ."\n";
          $menu_list .= '<span class="icon-bar"></span>' ."\n";
          $menu_list .= '<span class="icon-bar"></span>' ."\n";
          $menu_list .= '</button>' ."\n";
          $menu = get_term( $locations[$theme_location], 'nav_menu' );
          $menu_items = wp_get_nav_menu_items($menu->term_id);
          $menu_list .= '<div class="collapse navbar-collapse mobile-navbar-collapse" id="navbarSupportedContent">' ."\n";
          $menu_list .= '<ul class="navbar-nav ml-auto precision-mr-auto">' ."\n";
          foreach( $menu_items as $menu_item ) {
              if( $menu_item->menu_item_parent == 0 ) {
                  $parent = $menu_item->ID;
                
                  $bool = false;
                  $menu_array = array();
                  foreach( $menu_items as $submenu ) {
                      if( $submenu->menu_item_parent == $parent ) {
                          $bool = true;
                          $menu_array[] = '<a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a>' ."\n";
                      }
                  }
                  if( $bool == true && count( $menu_array ) > 0 ) {
                      $menu_list .= '<li class="nav-item dropdown">' ."\n";
                      $menu_list .= '<a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";
                      $menu_list .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">' ."\n";
                      $menu_list .= implode( "\n", $menu_array );
                      $menu_list .= '</div>' ."\n";
                  } else {
                      $menu_list .= '<li class="nav-item">' ."\n";
                      $menu_list .= '<a href="' . $menu_item->url . '" class="nav-link text-white">' . $menu_item->title . '</a>' ."\n";
                  }
              }
              // end <li>
              $menu_list .= '</li>' ."\n";
          }
          $menu_list .= '</ul>' ."\n";
          $menu_list .= '</div>' ."\n";
          $menu_list .= '</div><!-- /.container -->' ."\n";
          $menu_list .= '</nav>' ."\n";
        } else {
            $menu_list = '<!-- no menu (1) defined in location "'.$theme_location.'" -->';
        }
      
      } else {
          $menu_list = '<!-- no menu (2) defined in location "'.$theme_location.'" -->';
      }
      echo $menu_list;
}

/**
 * Footer Nav Items MAIN
 */
function get_footer_menu_items_main( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
      if( $theme_location == 'primary' ) {
        

          $menu = get_term( $locations[$theme_location], 'nav_menu' );
          $menu_items = wp_get_nav_menu_items($menu->term_id);

          foreach( $menu_items as $menu_item ) {
          
            if( $menu_item->menu_item_parent == 0 ) {

                  $parent = $menu_item->ID;
                
                  $bool = false;

                  $menu_array = array();
                  foreach( $menu_items as $submenu ) {
                      if( $submenu->menu_item_parent == $parent ) {
                          $bool = true;
                          $menu_array[] = '<a class="fullscreen-footer-link-underline" href="' . $submenu->url . '">' . $submenu->title . '</a>' ."\n";
                      }
                  }
                  if( $bool == true && count( $menu_array ) > 0 ) {                     

                      //$menu_list .= implode( "\n", $menu_array );

                  } else {
                      $menu_list .= '<a href="' . $menu_item->url . '" class="fullscreen-footer-link-underline">' . $menu_item->title . '</a>' ."\n";
                  }

              }
          }

        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
      
      } else {
          $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
      }

      echo $menu_list;
}
  
  /**
 * Footer Nav Items SUB
 */
function get_footer_menu_items_sub( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {
         
      if( $theme_location == 'primary' ) {
        

          $menu = get_term( $locations[$theme_location], 'nav_menu' );
          $menu_items = wp_get_nav_menu_items($menu->term_id);

          foreach( $menu_items as $menu_item ) {
              if( $menu_item->menu_item_parent == 0 ) {
                  $parent = $menu_item->ID;
                
                  $bool = false;
                  $menu_array = array();
                  foreach( $menu_items as $submenu ) {
                      if( $submenu->menu_item_parent == $parent ) {
                          $bool = true;
                          $menu_array[] = '<a class="fullscreen-footer-link-underline" href="' . $submenu->url . '">' . $submenu->title . '</a>' ."\n";
                      }
                  }
                  if( $bool == true && count( $menu_array ) > 0 ) {
                      $menu_list .= implode( "\n", $menu_array );
                  } else {
                      //$menu_list .= '<a href="' . $menu_item->url . '" class="nav-link text-white">' . $menu_item->title . '</a>' ."\n";
                  }
              }
          }

        } else {
            $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
        }
      
      } else {
          $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
      }

      echo $menu_list;
}

/**
 * Test for mobile
 */

require_once get_template_directory() . '/libs/Mobile_Detect.php';

function device_body_class ( $classes ) 
{
   $detect = new Mobile_Detect;
   $mobile = $detect->isMobile();
   $tablet = $detect->isTablet();
   if ( $mobile ) {
        $classes[] = 'fullscreen_mobile';
        if ( $tablet ) {
            $classes[] = 'fullscreen_tablet';
        } else {
            $classes[] = 'fullscreen_phone';
        }
    } else {
        $classes[] = 'fullscreen_desktop';
    }
    return $classes;
}
add_filter( 'body_class', 'device_body_class' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}