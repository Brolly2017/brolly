<?php get_header(); ?>

    <div class="row">
      
      <div class="col-xs-12 col-sm-8">

        <?php 
        
        if( have_posts() ):
          
          while( have_posts() ): the_post(); ?>
            
            <h3><a href="<?php get_permalink();?>"> <?php the_title(); ?></a></h3>
            <p><?php the_content(); ?></p>
          <?php endwhile;
          
        endif;
            
        ?>
      
      </div>
      
    </div>
    <div class="footer">
        <?php echo 'All right reserved &copy 2009 - '.date('Y');?>
        <?php get_footer(); ?>
    </div>

