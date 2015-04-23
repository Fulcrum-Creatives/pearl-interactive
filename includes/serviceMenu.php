<?php 
// Service Menu variables
$service_nav_list 	 = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
$service_nav_wrapper = '<nav id="service-nav" class="nav__sub" role="navigation" aria-label="Service menu">' . "\n" . $service_nav_list . '</nav>';
$service_args = array(
	'theme_location' => 'service', 
    'container'		 => '',
    'menu_class'     => 'nav__menu horizontal',
    'menu_id'        => 'nav__menu-service',
    'items_wrap'	 => $service_nav_wrapper,
    'walker'		 => new fc_wp_walker_nav_menu
);
if( has_nav_menu( 'service' ) ) : 
	wp_nav_menu( $service_args ); 
endif; 