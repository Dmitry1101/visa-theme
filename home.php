<?php get_header(); ?>


<?php get_template_part( 'kd89-parts/home-top' ); ?>
		
	<div class="mainn content s">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					
					
					<?php 	
					$args = array(
											
						// Type & Status Parameters
						'post_type'   => 'post',
						'post_status' => 'any',
				
						// Order & Orderby Parameters
						'order'               => 'DESC',
						'orderby'             => 'date',
				
						// Pagination Parameters
						'posts_per_page'         => 1,
						'offset'                 => 0,
					);
					
		
					// the query
					$kd1_query = new WP_Query( $args );  

					if ( $kd1_query->have_posts() ) : 

					 while ( $kd1_query->have_posts() ) : $kd1_query->the_post(); ?>

						
						<div class="blog__jumbo-1 block-click" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
							
								<div class="blog__overl"></div>
								<div class="blog__blck">
									<div class="blog__cont">
										<div class="blog__date">
											<?php the_time('M j, Y'); ?>	
											| <?php echo get_comments_number(); ?> comments
										</div>
										<div class="blog__jumbo-1-title">
											
											<?php the_title(); ?>
										
										</div>
										<div class="blog__jumbo-1-txt">
											<p>
												<?php 
													echo excerpt(40);
												?>
											</p>
											
											<p>
												<a class="blog__jumbo-1-read link-to-follow" href="<?php the_permalink(); ?>">Read More ></a>
											</p>
										</div>
									</div>
								</div>
							
						</div><!-- .col-md-12 -->

					<?php 
					endwhile; 

					wp_reset_postdata();  

					endif; ?>

					

				

					<?php 	
					$args = array(
											
						// Type & Status Parameters
						'post_type'   => 'post',
						'post_status' => 'any',
				
						// Order & Orderby Parameters
						'order'               => 'DESC',
						'orderby'             => 'date',
				
						// Pagination Parameters
						'posts_per_page'         => 9,
						'offset'                 => 1,
					);
					
		
					// the query
					$kd2_query = new WP_Query( $args );  

					if ( $kd2_query->have_posts() ) : ?>
					
					<div class="blog__list">

						<?php	
						 while ( $kd2_query->have_posts() ) : $kd2_query->the_post(); ?>

							
							
							

						<?php
							get_template_part( 'kd89-parts/bl-post' );

						endwhile; 

							
						wp_reset_postdata(); ?>
					
					</div><!-- .blog__list -->

					<?php
					endif; ?>

		
					<div class="txt-cent blog__foot">
						<button class="butt morre">Load more</button>
												
					</div>

				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<?php get_footer( ); ?>
		
	