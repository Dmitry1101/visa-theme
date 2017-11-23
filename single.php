<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package visa_reservation
 */

get_header(); ?>


	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		
	<div class="mainn s content">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
						

					<?php 

					the_title( $before = '<h1>', $after = '</h1>', $echo = true );

					the_content( ); 



					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>


					


				</div>
				<div class="col-md-3">
					Related posts
				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<!-- post -->
<?php endwhile; endif; ?>











	

<?php

get_footer();
