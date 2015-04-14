<?php
/* Nav Menu Args
================================================================================*/
$primary_mobile_icon = '<div id="menu__icon" class="menu__icon"><div class="inner"></div></div>' . "\n";
$primary_nav_list 	 = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
$primary_nav_wrapper = '<nav id="primary-nav" class="nav" role="navigation" aria-label="Main menu">' . "\n" . $primary_nav_list . '</nav>';
$primary_args = array(
	'theme_location' => 'primary', 
    'container'		 => '',
    'menu_class'     => 'nav__menu horizontal',
    'menu_id'        => 'nav__menu',
    'items_wrap'	 => $primary_nav_wrapper,
    'walker'		 => new fc_wp_walker_nav_menu
);
/* Hero Image
================================================================================*/
$pearl_hero_images        = ( get_field( 'pearl_hero_images' ) ? get_field( 'pearl_hero_images' ) : '' ); // get all the rows
$heroimage_rand_row       = $pearl_hero_images[ array_rand( $pearl_hero_images ) ]; // get a random row
$heroimage_rand_row_image = $heroimage_rand_row['pearl_hero_image' ]; // get the sub field value
$heroimage_caption        = $heroimage_rand_row['pearl_hero_caption' ];
$heroimage_url            = $heroimage_rand_row_image['sizes']['large'];
$heroimage_alt            = $heroimage_rand_row_image['alt'];
