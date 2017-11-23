<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="jumbo jumbo-2 flexx flexx-wrap" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), "full" ); ?>') top center no-repeat; background-attachment: fixed;">
		<div class="jumbo-2__txt">
			<h1><?php the_title( ); ?></h1>
			<p>
				Visa Reservation’s Refund Policy
			</p>
		</div>
	</div>

		
	
	<div class="mainn s content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wrr">
						

						<?php 

							the_content( ); ?>


					</div><!-- .wrr -->
				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>



