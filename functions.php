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

/* Custom Nav Walker
================================================================================*/
class fc_wp_walker_nav_menu extends Walker_Nav_Menu {
	  
	// add classes to ul sub-menus
	function start_lvl( &$output, $depth ) {
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
	function start_el( &$output, $item, $depth, $args ) {
	    $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
	  	$display_depth = ( $depth + 1); // because it counts the first submenu as 0
	    // depth dependent classes
	    $depth_classes = array(
	        ( $depth == 0 ? 'main-menu-item' : 'sub-menu-item' ),
	        'menu-item-depth-' . $depth,
	        'menu-item-' . strtolower( str_replace( ' ', '-', $item->title ) )
	    );
	    $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );
	  
	    // passed classes
	    $classes = empty( $item->classes ) ? array() : (array) $item->classes;
	    $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );
	  
	    // build html
	    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="' . $depth_class_names . ' ' . $class_names . '">';
	  
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