<?php get_header(); ?>

	
	<?php get_template_part( 'kd89-parts/home-top' ); ?>

		
	<div class="mainn content s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
				
				<?php
				if ( have_posts() ) : ?>
					
					<div class="blog__list">

						<?php
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							get_template_part( 'kd89-parts/bl-post' );

						endwhile; ?>

					
					</div><!-- .blog__list -->

						
						<?php
						// the_posts_navigation();	
						
						kriesi_pagination();

						wp_reset_postdata(); ?>

					<?php

					else: 
						
						get_template_part( 'template-parts/content', 'none' );	

					endif; ?>


				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<?php get_footer( ); ?>
		
	













