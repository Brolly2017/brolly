<?php get_header(); ?>
<h1>This is index</h1>
<?php
   if(have_posts()){
       while(have_posts()){the_post();?>
         
         <h3><?php the_title();?></h3>
         <small>The category:<?php the_category();?></small>
         <i><?php the_content();?></i>  
<?php                    
       }
   }
     get_footer(); ?>