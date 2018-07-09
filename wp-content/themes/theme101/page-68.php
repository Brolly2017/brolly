<?php get_header(); 
/*
Template Name: Page about 
*/
?>
<div class="row">
   <div class="col-xs-12 col-sm-8">
      <h1>This is About page</h1>
   

<?php
   if(have_posts()){
       while(have_posts()){the_post();?>
        <small>Posted on:<?php the_time('j F Y '); ?>at <?php the_time('g:i a');?></small>
        <i><?php the_content();?></i>  
         <h3><?php the_title();?></h3>
<?php                    
       }
   }
?>   
</div>
   <div class="col-xs-12 col-sm-4">
       <?php 
           get_sidebar('sidebar-1');
       ?>
     
       <?php       
           get_sidebar('sidebar-2'); 
       ?>
    </div>  
    <?php  get_footer();  ?>
</div>