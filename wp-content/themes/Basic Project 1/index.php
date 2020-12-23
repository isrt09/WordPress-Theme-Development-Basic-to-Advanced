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
                  <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="">
               </div>
               <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Info</a></li>
                  <li><a href="#">Contact</a></li>
               </ul>
            </div>
         </div>
      </section>
      <section class="header_image">
         <img src="<?php echo get_template_directory_uri();?>/images/woman-in-white-t-shirt-holding-smartphone-in-front-of-laptop-914931.jpg" alt="">
      </section>
      <section class="posts">
         <div class="post">
            <h2>Our Latest Post</h2>
            <hr>
            <div class="mid">
               <div class="post1">
                  <img src="<?php echo get_template_directory_uri();?>/images/SmartBuilding.jpg" alt="">
                  <h3>Title Onee</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sit quo possimus, iure ducimus. Ea dolor, molestias ab unde enim maxime quasi iste iure tempora quis laudantium voluptatibus labore aperiam eos voluptate neque nobis, laborum suscipit optio ad? Assumenda quam consequuntur perspiciatis recusandae atque autem doloremque nulla necessitatibus dolorum eaque commodi cum repellendus placeat dignissimos reiciendis veniam aperiam minus, doloribus ipsam possimus expedita molestiae. Ex corrupti distinctio ratione quaerat, atque. Quia, veritatis, voluptatem rerum iure incidunt eaque ipsa laudantium qui, accusantium delectus dolore aliquam id perferendis accusamus consequuntur! Ex, sint minima consequatur nulla delectus numquam, a ad sapiente quos fugiat.</p>
               </div>
               <div class="post1">
                  <img src="<?php echo get_template_directory_uri();?>/images/SmartBuilding.jpg" alt="">
                  <h3>Title Onee</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sit quo possimus, iure ducimus. Ea dolor, molestias ab unde enim maxime quasi iste iure tempora quis laudantium voluptatibus labore aperiam eos voluptate neque nobis, laborum suscipit optio ad? Assumenda quam consequuntur perspiciatis recusandae atque autem doloremque nulla necessitatibus dolorum eaque commodi cum repellendus placeat dignissimos reiciendis veniam aperiam minus, doloribus ipsam possimus expedita molestiae. Ex corrupti distinctio ratione quaerat, atque. Quia, veritatis, voluptatem rerum iure incidunt eaque ipsa laudantium qui, accusantium delectus dolore aliquam id perferendis accusamus consequuntur! Ex, sint minima consequatur nulla delectus numquam, a ad sapiente quos fugiat.</p>
               </div>
               <div class="post1">
                  <img src="<?php echo get_template_directory_uri();?>/images/SmartBuilding.jpg" alt="">
                  <h3>Title Onee</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta sit quo possimus, iure ducimus. Ea dolor, molestias ab unde enim maxime quasi iste iure tempora quis laudantium voluptatibus labore aperiam eos voluptate neque nobis, laborum suscipit optio ad? Assumenda quam consequuntur perspiciatis recusandae atque autem doloremque nulla necessitatibus dolorum eaque commodi cum repellendus placeat dignissimos reiciendis veniam aperiam minus, doloribus ipsam possimus expedita molestiae. Ex corrupti distinctio ratione quaerat, atque. Quia, veritatis, voluptatem rerum iure incidunt eaque ipsa laudantium qui, accusantium delectus dolore aliquam id perferendis accusamus consequuntur! Ex, sint minima consequatur nulla delectus numquam, a ad sapiente quos fugiat.</p>
               </div>
            </div>
         </div>
      </section>
      <?php wp_footer(); ?>
   </body>
</html>