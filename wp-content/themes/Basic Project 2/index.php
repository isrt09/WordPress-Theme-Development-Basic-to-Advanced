<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('title') ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.transitions.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" media="all" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="header"> 
		<div class="top-header"> 
			<div class="mid"> 
				<div class="top-left"> 
					<ul>
						<li><a href="#">Call : 019665554444</a></li>
						<li><a href="#">|</a></li>
						<li><a href="#">Email : arifzaman@gmail</a></li>
					</ul>
				</div>
				<div class="top-right"> 
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="mid"> 
			<div class="logo"> 
				<a href="#"><?php the_custom_logo();?></a>
			</div>
			<div class="menu"> 
				<?php 
					wp_nav_menu([
						'theme_location' => 'first_menu',
						'container_class'=> '',
						'container_id'=> '',
						'menu_class'=> '',
						'menu_id'=> ''
					]);
				 ?>
			</div>
		</div>
	</div>
	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 
				
				
				
					<div class="post-box-b"> 
						<div class="post-img-b"><img src="<?php echo get_template_directory_uri(); ?>/images/Crying-baby-013.jpg" alt=""></div>
						<div class="post-cont-b"> 
							<h2>Post Title</h2>
							<p class="au">By : Admin | 10.30 am</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, magni, consectetur. Ab perferendis assumenda, cum ratione ut sed quam animi.</p>
						</div>
					</div>

					<div class="post-box-b"> 
						<div class="post-img-b"><img src="<?php echo get_template_directory_uri(); ?>/images/Crying-baby-013.jpg" alt=""></div>
						<div class="post-cont-b"> 
							<h2>Post Title</h2>
							<p class="au">By : Admin | 10.30 am</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, magni, consectetur. Ab perferendis assumenda, cum ratione ut sed quam animi.</p>
						</div>
					</div>

					<div class="post-box-b"> 
						<div class="post-img-b"><img src="<?php echo get_template_directory_uri(); ?>/images/Crying-baby-013.jpg" alt=""></div>
						<div class="post-cont-b"> 
							<h2>Post Title</h2>
							<p class="au">By : Admin | 10.30 am</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, magni, consectetur. Ab perferendis assumenda, cum ratione ut sed quam animi.</p>
						</div>
					</div>
					
				
					
						
				</div>
			</div>
			<div class="right"> 
				
				<div class="notice-board"> 
					
					
					<div class="notice-box"> 
					<h2>Notice Board</h2>
					<hr />
						<ul>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
							<li><i class="fa fa-chevron-right"></i>
								<a href="#">All class start on</a></li>
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	<div class="footer"> 
		<p>Copyright 2020 arif | All Rights Reserved | Powered by Arif</p>
	</div>
	
	
	
	
	
	<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript"> 
		
		$('.slider').owlCarousel({
			items : 1,
			autoPlay: true,
			transitionStyle : 'fade'
		});
		
	</script>
	<?php wp_footer(); ?>
</body>
</html>