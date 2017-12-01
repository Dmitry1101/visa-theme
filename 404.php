<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package visa_reservation
 */

get_header(); ?>
	

	<div class="mainn s content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wrr">
						

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title txt-cent"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'visa_reservation' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p class="txt-cent"><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'visa_reservation' ); ?></p>

								
								<?php
									get_search_form(); ?>
								

								<?php
									the_widget( 'WP_Widget_Recent_Posts' );
								?>

								

							</div><!-- .page-content -->
						</section><!-- .error-404 -->

						<?php 

						// the_content( ); ?>
						

					</div><!-- .wrr -->
				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
	

	

<?php
get_footer();
