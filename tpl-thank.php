<?php /* Template Name: ThankYou */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbo jumbo-3 flexx flexx-wrap" style="background: url('<?php bloginfo("template_directory");?>/dist/img/jumbo-5.jpg') center no-repeat; background-attachment: fixed;">
			<div class="jumbo-3__txt">
				<h1>
					<em>
						Thank you for making the payment. <br>
						You’re all set!
					</em>
				</h1>
			</div>
		</div>

		

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>