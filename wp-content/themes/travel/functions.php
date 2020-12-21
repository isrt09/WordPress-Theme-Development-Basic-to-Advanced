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
	]);

	register_post_type('gallery',[
		'public' => true,
		'labels' => [
			'name' 				 => 'Gallery',
			'all_items' 		 => 'All Galleries',
			'add_new'   		 => 'Add New Gallery',
			'add_new_item'	 	 => 'Add New Gallery',
			'featured_image' 	 => 'Gallery Image',
			'set_featured_image' => 'Set Gallery Image',				
		],
		'supports' => ['title','editor','thumbnail'],
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-format-image'	
	]);

	register_post_type('news',[
		'public' => true,
		'labels' =>[
			'name' 		   => 'News',
			'all_items'    => 'All News',
			'add_new'      => 'Add New News',
			'add_new_item' => 'Add News',
		  'featured_image' => 'News Image',
	   'set_featured_image'=> 'Set News Image'		
		],
		'supports'         => ['title','editor','thumbnail'],
		'menu_position'    => 5,
		'menu_icon'        => 'dashicons-format-aside'
	]);
	
 ?>