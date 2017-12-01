<?php /* Template Name: Services-single */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<div class="jumbo jumbo-2 flexx flexx-wrap serv__jumbo" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>') center no-repeat; -webkit-background-size: cover;	background-size: cover; ">


			<div class="jumbo-2__txt">

				<?php the_field( 'kd89_acf_txt1' ); ?>

			</div>
		</div>



		<div class="s content faqq-2 serv__txt1">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="blck faqq-2__blck txt-cent">

							<?php the_field( 'kd89_acf_txt2' ); ?>

						</div>
					</div>
				</div>
			</div>
		</div>




		<div id="gravityforms-block">
				<div class="row-forms">
					<?php //echo do_shortcode( '[gravityform id=27]' ); ?>
						<?php the_content( ); ?>
				</div>
			</div>






<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>