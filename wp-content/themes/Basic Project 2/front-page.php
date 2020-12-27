<?php get_header(); ?>
	
	<div class="slider">
		 <?php 
		    $slider = new WP_Query([
		        'post_type'     =>'slider'		        
		     ]);
		 while($slider->have_posts()): $slider->the_post(); ?> 
		   <div class="s-img" style="background-image:url(<?php echo wp_get_attachment_url(get_post_thumbnail_ID($post->ID)); ?>)"></div>
		<?php endwhile; ?>    	
	</div>
	<div class="services"> 
		<div class="mid"> 
			<h2>Our Services</h2>
			<p>See all the services of our own</p>
			
			<div class="services-area"> 
			
				<div class="services-box"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/color.jpg" alt="" />
					<h2>Graphic Design</h2>
					<p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
				</div>

				<div class="services-box"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/color.jpg" alt="" />
					<h2>Graphic Design</h2>
					<p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
				</div>

				<div class="services-box"> 
					<img src="<?php echo get_template_directory_uri(); ?>/images/color.jpg" alt="" />
					<h2>Graphic Design</h2>
					<p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
				</div>
				
				
				
			</div>
		</div>
	</div>
	<div class="body-area"> 
		<div class="mid"> 
			<div class="left"> 
				<div class="post-area"> 
				<h2>Recent Post </h2>
				<hr />



					<div class="post-box"> 
						<div class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/images/post.jpg" alt="" /></div>
						<div class="post-cont"> 
							<h2>This is post title</h2>
							<p>psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
						</div>
					</div>



					<div class="post-box"> 
						<div class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/images/post.jpg" alt="" /></div>
						<div class="post-cont"> 
							<h2>This is post title</h2>
							<p>psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
						</div>
					</div>


					<div class="post-box"> 
						<div class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/images/post.jpg" alt="" /></div>
						<div class="post-cont"> 
							<h2>This is post title</h2>
							<p>psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived psum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived </p>
						</div>
					</div>
					
					
					
					
				</div>
			</div>
			<div class="right"> 
				<?php get_sidebar(); ?>   								
			</div>
		</div>
	</div>
	<?php get_footer(); ?>