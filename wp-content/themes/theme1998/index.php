<?php get_header();

 if(have_posts()){
      while(have_posts()){
            the_post(); ?>

          <h2><?php  the_title(); ?></h3> 
           <p><?php the_content(); ?> </p>
    <?php       
      }
 }  
  
   
 get_footer(); ?>