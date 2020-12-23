<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<h1><?php bloginfo('title') ?></h1>
	<h2>Welcome to Our Community <span><?php bloginfo('name') ?></span></h2>	
		<?php 
			wp_nav_menu([
				'theme_location' => 'first_menu',
				'container_class'=> 'myClass'
			]);
		 ?>
		<!-- <ul>
			<li><a href="">Home</a></li>
			<li><a href="">About</a></li>
			<li><a href="">Service</a></li>
			<li><a href="">Blog</a></li>
			<li><a href="">Contact</a></li>
	    </ul> -->	
	<div class="leftbar">
		<?php dynamic_sidebar('ls'); ?>
	</div>	
	<div class="rightbar">
		<?php dynamic_sidebar('rs'); ?>
	</div>
	<?php wp_footer(); ?>
</body>
</html>