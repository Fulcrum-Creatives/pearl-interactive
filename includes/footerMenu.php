<?php 
// Footer Menu variables
$footer_nav_list 	 = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
$footer_nav_wrapper = '<nav id="footer-nav" class="nav" role="navigation" aria-label="Main menu">' . "\n" . $footer_nav_list . '</nav>';
$footer_args = array(
	'theme_location' => 'footer', 
    'container'		 => '',
    'menu_class'     => 'nav__menu horizontal right',
    'menu_id'        => 'nav__menu-footer',
    'items_wrap'	 => $footer_nav_wrapper,
    'walker'		 => new fc_wp_walker_nav_menu
);
if( has_nav_menu( 'footer' ) ) : 
	wp_nav_menu( $footer_args ); 
endif; 