<?php 
	add_theme_support('menus');
	add_theme_support('widgets');
	add_theme_support('custom-header');
	add_theme_support('custom-background');
	add_theme_support('post-thumbnails');
	add_theme_support('post-formats',['video','audio','gallery']);
	add_theme_support('custom-logo');

	register_sidebar([
		'name'        => 'LEFT SIDEBAR',
		'description' => 'This is for Left Sidebar Area Section',
		'id'          => 'left-sidebar'
	]);	
	register_sidebar([
		'name'        => 'RIGHT SIDEBAR',
		'description' => 'This is for Right Sidebar Area Section',
		'id'          => 'right-sidebar'
	]);	
	register_sidebar([
		'name'        => 'FOOTER SIDEBAR',
		'description' => 'This is for Footer Sidebar Area Section',
		'id'          => 'footer-sidebar'
	]);
   
    /* This is for newbie learner
	register_nav_menu('main-menu','Main Menu');
	register_nav_menu('footer-menu','Footer Menu');
	register_nav_menu('sidebar-menu','Sidebar Menu');
	register_nav_menu('mega-menu','Mega Menu');
	*/

	/* This is standard way to write down menu register ... */
	register_nav_menus([
		'first_menu'   => 'Main Menu',
		'footer-menu'  => 'Footer Menu',
		'sidebar-menu' => 'Sidebar Menu',
		'mega-menu'    => 'Mega Menu'
	])
 ?>