<?php 
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('custom-logo');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',['audio','video','gallery']);

	register_nav_menus([
		'main_menu' => 'Main Menu',
		'id'		=> 'main_menu'
	]);
 ?>