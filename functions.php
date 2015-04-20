<?php
/* Constants
================================================================================*/
$wp_theme = wp_get_theme();
// Theme Version
if ( ! defined( 'FCWPF_VERSION' ) ) {
	define( 'FCWPF_VERSION', $wp_theme->get( 'Version' ) );
}
// Theme Taxdomain
if ( !defined( 'FCWPF_TAXDOMAIN' ) ) {
  define( 'FCWPF_TAXDOMAIN', strtolower( preg_replace('~\b(\w)|.~', '$1', $wp_theme->get( 'Name' ) ) ) );
}
// Theme Prefix
if ( ! defined( 'FCWPF_PREFIX' ) ) {
	define( 'FCWPF_PREFIX', FCWPF_TAXDOMAIN );
}
// Theme Name
if ( !defined( 'FCWPF_NAME' ) ) {
  define( 'FCWPF_NAME', $wp_theme->get( 'Name' ) );
}
// Theme URI
if ( !defined( 'FCWPF_URI' ) ) {
  define( 'FCWPF_URI', esc_url( get_template_directory_uri() ) );
}
// Theme Stylesheet URI
if ( !defined( 'FCWPF_STYLESHEETURI' ) ) {
  define( 'FCWPF_STYLESHEETURI', esc_url( get_stylesheet_uri() ) );
}
// Theme Directory
if ( !defined( 'FCWPF_DIR' ) ) {
  define( 'FCWPF_DIR', get_template_directory() );
}

/* Theme Setup
================================================================================*/
if( !function_exists( 'fcwpf_theme_support' ) ) :
	function fcwpf_theme_support() {
		// Load taxdomain
		load_theme_textdomain( FCWPF_TAXDOMAIN, get_template_directory() . '/languages' );
	    // Title Tage Support
	    add_theme_support( 'title-tag' );
	    // Post Thumbnails
	    add_theme_support( 'post-thumbnails' );
	    // Register Nav Menus*/
	    register_nav_menus( array(
	        'primary' => __( 'Primary', FCWPF_TAXDOMAIN ),
	    ) );
	}
	add_action( 'after_setup_theme', 'fcwpf_theme_support' );
endif;

/* Load Stylesheets
================================================================================*/
if( !function_exists( 'fcwpf_load_stylesheets' ) ) :
	function fcwpf_load_stylesheets() {
		// Load the main stylesheet.
		wp_enqueue_style( 'fc-wp-style', FCWPF_STYLESHEETURI, array(), '1.0.0' );
		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'fc-wp-ie8-style', FCWPF_URI . '/css/ie8.style.css', array( 'fc-wp-style' ), '1.0.0' );
		wp_style_add_data( 'fc-wp-ie8-style', 'conditional', 'if IE 8' );
		// Load the Internet Explorer 7 specific stylesheet.
		wp_enqueue_style( 'fc-wp-ie9-style', FCWPF_URI . '/css/ie9.style.css', array( 'fc-wp-style' ), '1.0.0' );
		wp_style_add_data( 'fc-wp-ie9-style', 'conditional', 'if IE 9' );
		// Google Fonts
		wp_enqueue_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Roboto:400,700,500|Roboto+Slab:400,7…' );
		// Font Awesome
		wp_enqueue_style( 'fonts-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' ); 
	}
	add_action( 'wp_enqueue_scripts', 'fcwpf_load_stylesheets' );
endif;

/* Load JavaScript
================================================================================*/
if( !function_exists( 'fcwpf_load_javascript' ) ) :
	function fcwpf_load_javascript() {
		// jQuery
	    wp_enqueue_script('jquery');
	    // scripts.min.js
	    wp_register_script( 'scripts.min.js', FCWPF_URI . '/js/scripts.min.js', false, '1.0.0', true );
	    wp_enqueue_script( 'scripts.min.js' );
	}
	add_action( 'wp_enqueue_scripts', 'fcwpf_load_javascript' );
endif;

/* Custom Nav Walker
================================================================================*/
class fc_wp_walker_nav_menu extends Walker_Nav_Menu {
	  
	// add classes to ul sub-menus
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
	    // depth dependent classes
	    $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
	    $display_depth = ( $depth + 1); // because it counts the first submenu as 0
	    $classes = array(
		        'sub-menu',
		        'menu-depth-' . $display_depth
	        );
	    $class_names = implode( ' ', $classes );
	  
	    // build html
	    $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
	}
	  
	// add main/sub classes to li's and links
	public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' );
	  	$display_depth = ( $depth + 1);
	    // depth dependent classes
	    $depth_classes = array(
	        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
	        'menu-item-depth-' . $depth,
	        'menu-item-' . strtolower( str_replace( ' ', '-', $item->title ) )
	    );
	    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	 
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	  
	    // build html
	    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '" role="menuitem">';
	  
	    // link attributes
	    $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
	    $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
	    $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
	    $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
	    $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';
	  
	    
	   	$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
	  
	    // build html
	    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
}

/* Extend Body Class
================================================================================*/
if( !function_exists( 'extend_body_class' ) ) :
	function extend_body_class( $classes ) {
		if( is_home() || is_front_page() ) {
			$classes[] = "is-homepage";
		} else {
			$classes[] = 'not-homepage';
		}
		return $classes;
	}
	add_action( 'body_class', 'extend_body_class' );
endif;

/* Sidebar Widget Area
===============================================================================*/
function register_custom_sidebars() {
    if( ! function_exists( register_sidebar() ) ) {
        register_sidebar( array(
            'name'          => __( 'Sidebar', FCWPF_TAXDOMAIN ),
            'id'            => 'sidebar',
            'description'   => '',
            'class'         => '',
            'before_widget' => '<li id="%1$s" class="widget %2$s">',
            'after_widget'  => '</li>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>'
        ));
        unregister_sidebar( 'sidebar-1' );
    }
}
add_action( 'widgets_init', 'register_custom_sidebars' );

/* Custom Excerpt Length and More Link
================================================================================*/
// custom length
function custom_excerpt_length( $length ) {
  $pearl_excerpt_length = ( get_field( 'pearl_excerpt_length', 'option' ) ? get_field( 'pearl_excerpt_length', 'option' ) : '' );
  $length = $pearl_excerpt_length;
  
  return $length;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
    $pearl_excerpt_ellipse = ( get_field( 'pearl_excerpt_ellipse', 'option' ) ? get_field( 'pearl_excerpt_ellipse', 'option' ) : '' );
    $ellipse = $pearl_excerpt_ellipse;
    return ' ' . $ellipse;
    
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

/* Print Queries
================================================================================*/
function printQueries() { 
  global $wpdb; 

  if (defined('SAVEQUERIES') && SAVEQUERIES===true) { 
  	echo '<hr />';
    echo 'SAVEQUERIES was set properly so we can get the queries.<br>';
    echo 'We found ' . $wpdb->num_queries . ' query(-ies)!<br>';
    echo '<pre>'; print_r($wpdb->queries); echo '</pre>';
  } 
  else 
    echo 'SAVEQUERIES was not set. Please update your wp-config.php!';
}

//add_action('wp_footer','printQueries',99999);