<?php get_header(); ?>


	<div class="jumbo jumbo-2 flexx flexx-wrap blog__jumbo">
		<div class="jumbo-2__txt">
			<h1>Blog</h1>
			<p>
				Get answers to the most popular questions.
			</p>
			<form class="kd89-search kd89-form">
				<input class="kd89-search__inp" name="s" placeholder="Lorem ipsum dolor sit amet, consectetur"/>
				<button class="kd89-search__butt" type="submit">SEARCH</button>
			</form>
			<br>
			<blockquote>Checkout important information related to Travel and Visa!</blockquote>
		</div>
	</div>

		
	<div class="mainn content">
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

						
						<div class="blog__jumbo-1" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>') center no-repeat; -webkit-background-size: cover;
						background-size: cover;">
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
											<a class="blog__jumbo-1-read" href="<?php the_permalink(); ?>">Read More ></a>
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

							
							<div data-id="<?php echo get_the_ID(); ?>" class="blog__item" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
								<div class="blog__img">
									<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>" alt="">	
								</div>				
								<div class="blog__content">
									<div class="blog__date"><?php the_time('M j, Y'); ?> | <?php echo get_comments_number(); ?> comments</div>
									<div class="blog__content-title">

										<?php the_title(); ?>
									
									</div>
									<div class="blog__content-txt">
										<p>
											<?php 
												echo excerpt(30);
											?>
										</p>
									</div>
									<p class="blog__content-read">
										<a href="<?php the_permalink(); ?>">Read More ></a>
									</p>
								</div>
							</div>	
							

						<?php 
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
		
	