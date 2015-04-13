<?php
/* Nav Menu Args
================================================================================*/
/**
 * Mobile Icon element
 * @var string
 */
$primary_mobile_icon = '<div id="menu__icon" class="menu__icon"><div class="inner"></div></div>' . "\n";
/**
 * Menu list wrapper
 * @var string
 */
$primary_nav_list = '<ul id="%1$s" class="%2$s" role="menubar">%3$s</ul>';
/**
 * Menu wrapper
 * @var string
 */
$primary_nav_wrapper = '<nav id="primary-nav" class="nav" role="navigation" aria-label="Main menu">' . "\n" . $primary_nav_list . '</nav>';
/**
 * Primary Nav Args
 * add class 'horizontal' to menu_class for a horizontal menu
 * add class 'right', 'left', or 'center' to position horizontal menu
 * @var array
 */
$primary_args = array(
	'theme_location' => 'primary', 
    'container'		 => '',
    'menu_class'      => 'nav__menu horizontal',
    'menu_id'         => 'nav__menu',
    'items_wrap'	 => $primary_nav_wrapper,
    'walker'		 => new fc_wp_walker_nav_menu
);