<div class="notice-board">
   <div class="notice-box">
      <h2>Notice Board</h2>
      <hr />
      <ul>
         <?php 
         $news = new WP_Query([
            'post_type' =>'notice'
         ]);
         while($news->have_posts()): $news->the_post(); ?> 
         <li><i class="fa fa-chevron-right"></i>
            <a href="#"><?php the_title(); ?></a>
         </li>
         <?php endwhile; ?>                        
      </ul>
   </div>
</div>