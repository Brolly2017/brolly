<?php get_header(); 
/*
Template Name: Page about 
*/

?>
<h1>This is index</h1>
<?php
   if(have_posts()){
       while(have_posts()){the_post();?>
        
        <i><?php the_content();?></i>  
         <h3><?php the_title();?></h3>
<?php                    
       }
   }
     get_footer(); ?>

