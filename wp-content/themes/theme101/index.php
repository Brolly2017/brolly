<?php get_header(); ?>
<div class="row">
   <div class="col-xs-12 col-sm-8">
      <h1>This is index</h1>
      <?php
          if(have_posts()){
             while(have_posts()){the_post(); echo 'this is the format:'.get_post_format();?>
          <?php  get_template_part('content',get_post_format()); ?>
         
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