<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbo jumbo-1 flexx flexx-wrap" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>') center no-repeat; -webkit-background-size: cover;	background-size: cover;">
			<div class="jumbo__txt">
				<div class="jumbo__head1">

					<?php the_field('kd89_acf_txt1'); ?>

				</div> 
				<div class="jumbo__head2">

					<?php the_field('kd89_acf_txt2'); ?>

				</div>
				<div class="jumbo__descr">

					<?php the_field('kd89_acf_txt3'); ?>

				</div>
			</div>
		</div>

		
		<div class="offer flexx flexx-wrapp content">
			<div class="offer__blck blck-1" style="background: url('<?php echo wp_get_attachment_image_src( get_field('kd89_acf_bg1'), 'medium_large' )[0]; ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
				<div class="offer__head-1">
				
					<?php the_field('kd89_acf_txt4'); ?>
				
				</div>
			</div>
			
			<?php 	
			if( have_rows('kd89_acf_offer') ): ?>

				<div class="offer__blck blck-2">
					<div class="row">
						
						<?php
						$cc = 0;
						$arrr = [ 'airplane','002-building','003-insurance','001-money' ];
					  while ( have_rows('kd89_acf_offer') ) : the_row(); ?>
							
							<div class="col-md-6">
								<div class="offer__it blck">
									<div class="offer__head-2">
										<span>
											<i class="icon icon-<?php echo $arrr[$cc]; ?>"></i>										
										</span>
										<?php the_sub_field('titl'); ?>
									</div>
									<div class="offer__txt">
										<p><?php the_sub_field('txt'); ?></p>
									</div>
								</div>
							</div>
							
						<?php
							$cc++;
							if ( $cc % 2 == 0 ): ?>
								
								</div>
								<div class="row">

							<?php
							endif;		
					  endwhile; ?>

					</div>
				</div><!-- .offer__blck blck-2 -->

			<?php
			endif;
			 ?>	

			
		</div><!-- .offer -->
		

		


		<div class="easy s content" id="easy">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="sect-title">
							THREE EASY STEPS
						</div>
					</div>
				</div>

				<?php 	
				if( have_rows('steps') ): ?>
					
					<div class="row">

						<?php
						$c = 1;
					  while ( have_rows('steps') ) : the_row(); ?>
							
							<div class="col-md-4" >
								<div class="blck easy__blck easy__blck-<?php echo $c; ?>">
									<div class="easy__num">
										<?php the_sub_field( 'txt1' ); ?>
									</div>
									<div class="easy__head">
										<?php the_sub_field( 'txt2' ); ?>
									</div>
									<div class="easy__txt">
										<p><?php the_sub_field( 'txt3' ); ?></p>
									</div>
								</div>
							</div>

						<?php	
							$c++;			
					  endwhile; ?>
					
					</div>

				<?php				
				endif; ?>
				
			</div>
		</div><!-- .easy -->

		
		<div class="s deliv" id="delivery">
			
			<div class="deliv__butts">
				<button class="deliv__butt active" data-to=".deliv__blck.blck-1">24 Hr Email Delivery</button>
				<button class="deliv__butt" data-to=".deliv__blck.blck-2">6 Hr Email Delivery</button>
			</div><!-- .deliv__butts -->

			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						

						<?php 

						if( have_rows('kd_acf_prices') ): 

							$cc = 1;

							while( have_rows('kd_acf_prices') ): the_row(); ?>
								
								<div class="deliv__blck blck-<?php echo $cc; ?>">
									<div class="deliv__lisst flexx flexx-wrapp">	
									
										<?php 
										if( have_rows('pricce_item') ): ?>
												
											<?php 
												$count = 1;
											while( have_rows('pricce_item') ): the_row(); ?>

												<div class="deliv__it <?php echo( $count == 3 ) ? 'actt' : ''; ?>">
														
													<?php 
													if ( $count == 3 ): ?>
														
														<div class="deliv__sale">
															<span>30% Off</span>
														</div>

													<?php 
													endif ?>	
														

													<div class="deliv__it-titl">
														
														<?php the_sub_field('titl'); ?>
													
													</div>
													<div class="deliv__it-price">
														
														<h5>
															<?php the_sub_field('pricce'); ?>
														</h5>
														<p>
															Per Person
														</p>
														
													</div>
													<div class="deliv__it-opt">
														
														<?php the_sub_field('txt'); ?>

													</div>
													<div class="deliv__it-order">
														<a class="butt" href="<?php the_sub_field('page_link'); ?>">order now</a>
													</div>
												</div>

											<?php 
												$count++;
											endwhile; ?>
											

										<?php 
										endif; //if( get_sub_field('pricce_item') ): ?>
								
									</div>
								</div><!-- .blck-1 -->

							<?php 

								$cc++;

							endwhile; // while( has_sub_field('kd_acf_prices') ): 

						 endif; // if( get_field('kd_acf_prices') ): ?>

					
					</div>
				</div>
			</div>			
		</div><!-- deliv -->


		<div class="insure flexx flexx-wrap content">
			<div class="insure__blck insure__blck-1">
				<img src="<?php bloginfo('template_directory');?>/dist/img/skier.png" alt="">
			</div>
			<div class="insure__blck insure__blck-2">
				<div class="insure__cont">
					<div class="insure__title">
						<!-- Need Travel <br>
						Health Insurance? -->
						<?php the_field('kd_acf_ins'); ?>
					</div>
					<div class="insure__txt">
						
						<?php the_content(); ?>

						<p>
							<a href="<?php echo get_page_link( 239 ); ?>" class="to-mod butt insure__butt">
								Order Insurance
							</a>
						</p>
					</div>
				</div>
			</div>
		</div><!-- .insure -->
		

		<div class="inffo flexx flexx-wrap content">
			<div class="inffo__blck inffo__blck-1 vidd-cont" style="background: url('<?php bloginfo("template_directory");?>/dist/img/inffo1.jpg') center no-repeat; -webkit-background-size: cover; background-size: cover;">

				<div class="inffo__yw">
					<div class="inffo__tbl">
						<div class="tbl-cell cell-1 mdl">
							WE’RE HERE TO HELP
						</div>
						<div class="tbl-cell cell-2 mdl">
							<a class="inffo__play play__trigger" href="#" data-hreff='<iframe width="640" height="480" src="https://www.youtube.com/embed/9HPOyGMLHy4?autoplay=1&rel=0&autohide=1&modestbranding=1&showinfo=0" frameborder="0" allowfullscreen></iframe>'>

									<i class="icon icon-play"></i>
								</a>
						</div>
						<div class="tbl-cell cell-3 mdl">
							YOU WITH YOUR VISA
						</div>
					</div>
				</div>
			</div>
			



			<div class="inffo__blck inffo__blck-2">
				
				
				<?php
				if( have_rows('kd_acf_info') ): 

					while ( have_rows('kd_acf_info') ) : the_row(); 	?>
					
						<div class="inffo__subb">
							<div class="inffo__cell" style="background: url('<?php echo wp_get_attachment_image_src( get_sub_field("image_1"), "medium_large" )[0]; ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
								<div class="inffo__cell-cont">
									<?php the_sub_field('text_1'); ?>
								</div>
							</div>
							<div class="inffo__cell" style="background: url('<?php echo wp_get_attachment_image_src( get_sub_field("image_2"), "medium_large" )[0]; ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
								<div class="inffo__cell-cont">
									<?php the_sub_field('text_2'); ?>
								</div>
							</div>
						</div>
						
					<?php
			    endwhile; 

				endif; ?>	

				

				




			</div>
		</div><!-- .inffo -->	
	
		
		<div class="testim s content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="sect-title testim__title">
							Testimonials
						</div>
					</div>
				</div>
				
				<?php 	
				if( have_rows('kd89_acf_testim') ): ?>
					
					<div class="testim__list flexx flexx-wrap">

						<?php					
					  while ( have_rows('kd89_acf_testim') ) : the_row(); ?>
							
							<div class="testim__cont testim__cont-1">
								<img src="<?php echo wp_get_attachment_image_src( get_sub_field( 'imgg' ) )[0]; ?>" alt="" class="testim__cont-img">
								<div class="testim__txt">

									<?php the_sub_field('txtt'); ?>
									
								</div>
								<div class="testim__author">
									
									<?php the_sub_field('txtt2'); ?>
										
								</div>
							</div>

						<?php							
					  endwhile; ?>
				
					</div>

				<?php
				endif; ?>


			</div>
		</div>
		
		<div class="why s">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="blck why__blck clearfix">
							<div class="sect-title under under-1">
								Why Choose Us
							</div>
							
							<?php the_field('kd89_why_choose_us'); ?>
								
							<?php the_field('kd89_why_choose_us2'); ?>

						</div>
					</div>
					<div class="col-md-6">
						<div class="blck why__blck why__blck-2">
							<div class="sect-title under under-2">
								Check visa requirements
							</div>
							
							
							<?php

							if( have_rows('kd_acf_countries') ): ?>
								
								<div class="row">

									<?php
									$i = 0;
							    
							    while ( have_rows('kd_acf_countries') ) : the_row(); 

							    	$countrry = get_sub_field('countryy');
							    	$countrry = trim($countrry);
							    	$countrry = str_replace(' ', '-', $countrry);
							    	?>
									
										<div class="col-lg-3 col-sm-6">
											<div class="tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-flag_<?php echo $countrry; ?>"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													<a href="<?php echo ( get_sub_field('post_link') ) ? get_sub_field('post_link') : get_page_link( 36 ); ?>"><?php the_sub_field('countryy'); ?></a>
												</div>
											</div>
										</div>
										
									<?php
									$i++;
							    
							    	if ( $i % 4 == 0 ) :
						    			
						    			echo '</div><div class="row">';

						    		endif;	

							    endwhile; ?>

								</div><!-- .row -->

								
								<div class="row">
									<div class="col-md-12">
										<div class="why__view-all">
											<a href="<?php echo get_page_link( 36 ); ?>">View All </a>
											<span>&raquo;</span>
										</div>
									</div>
								</div>	

						  <?php  
							endif; ?>


							

						</div>
					</div>
				</div>
			</div>
		</div>

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>