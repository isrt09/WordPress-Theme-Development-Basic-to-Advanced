<!DOCTYPE html>
<html <?php language_attributes(); ?>>
   <head>
      <meta charset="<?php bloginfo('charset') ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">      
      <title>Basic Project 1</title>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/style.css">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
      <section class="menu_section">
         <div class="menu">
            <div class="mid">
               <div class="logo">
                  <?php the_custom_logo();?>
               </div>
               <!-- <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Info</a></li>
                  <li><a href="#">Contact</a></li>
               </ul> -->
               <?php wp_nav_menu([
               		'theme_location' => 'main_menu',
               		'container_class'=> '',
               		'container_id'   => '',
               ]); ?>
            </div>
         </div>
      </section>
      <section class="header_image">
         <img src="<?php header_image(); ?>" alt="">
      </section>
      <section class="posts">
      	<?php while(have_posts()): the_post(); ?>									
         <div class="post">
            <h2><?php the_title(); ?></h2>
            <hr>
            <div class="mid">
               <div class="post1">
                 <?php the_post_thumbnail();?>
                  <h3><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>
               </div>              
            </div>
             <?php endwhile; ?>
         </div>
      </section>
      <?php wp_footer(); ?>
   </body>
</html>