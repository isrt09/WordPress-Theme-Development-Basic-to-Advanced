<?php 	
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('custom-background');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');	
    add_theme_support('post-formats',['video','audio','gallery']);	

    register_nav_menus([
	  'first_menu'    => 'Main Menu',
	  'footer-menu'   => 'Footer Menu',	 
	])
 ?>