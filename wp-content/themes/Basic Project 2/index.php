<?php get_header(); ?>
      <div class="body-area">
         <div class="mid">
            <div class="left">
               <div class="post-area">
                  <?php while(have_posts()): the_post(); ?>
                  <div class="post-box-b">
                     <div class="post-img-b"><?php the_post_thumbnail();?></div>
                     <div class="post-cont-b">
                        <h2><?php the_title(); ?></h2>
                        <p class="au">By : <?php the_author(); ?> | <?php the_time('g:i A'); ?></p>
                        <p><?php echo wp_trim_words(get_the_content(),10,true); ?></p><span><a href="<?php the_permalink(); ?>" class="read_more">Read More</a></span>

                     </div>
                  </div>
                  <?php endwhile; ?>                  
               </div>
            </div>            
            <div class="right">
               <?php get_sidebar(); ?>   
            </div>
         </div>
      </div>
      <?php 
          echo do_action('arif');
       ?>
       <h1><?php do_action('mazed') ?></h1>
       <h1><?php echo apply_filters('the_title','') ?></h1>
<?php get_footer(); ?>      