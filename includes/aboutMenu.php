<?php 
// About Menu variables
$about_nav_list 	 = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
$about_nav_wrapper = '<nav id="about-nav" class="nav__sub" role="navigation" aria-label="About menu">' . "\n" . $about_nav_list . '</nav>';
$about_args = array(
	'theme_location' => 'about', 
    'container'		 => '',
    'menu_class'     => 'nav__menu horizontal',
    'menu_id'        => 'nav__menu-about',
    'items_wrap'	 => $about_nav_wrapper,
    'walker'		 => new fc_wp_walker_nav_menu
);
if( has_nav_menu( 'about' ) ) : 
	wp_nav_menu( $about_args ); 
endif; 