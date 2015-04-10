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