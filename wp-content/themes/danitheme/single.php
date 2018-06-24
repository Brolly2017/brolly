<div class="col-xs-4 col-sm-6">
		
		<?php 
		
		if( have_posts() ):
			
			while( have_posts() ): the_post(); ?>
				
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
							
			<?php endwhile;
			
		endif;
				
		?>
	
	</div>
   