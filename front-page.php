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
			<div class="offer__blck blck-2">
				<div class="row">
					<div class="col-md-6">
						<div class="offer__it blck">
							<div class="offer__head-2">
								<span>
									<i class="icon icon-airplane"></i>										
								</span>
								Flight itinerary
							</div>
							<div class="offer__txt">
								<p>We provide verifiable one way, round trip, and multi-city flight bookings for any country visa within minutes at an affordable price without you having to pay for actual tickets.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="offer__it blck">
							<div class="offer__head-2">
								<span>
									<i class="icon icon-002-building"></i>										
								</span>
								Hotel booking
							</div>
							<div class="offer__txt">
								<p>We provide verifiable one way, round trip, and multi-city flight bookings for any country visa within minutes at an affordable price without you having to pay for actual tickets.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-6">
						<div class="offer__it blck">
							<div class="offer__head-2">
								<span>
									<i class="icon icon-003-insurance"></i>										
								</span>
								Travel insurance
							</div>
							<div class="offer__txt">
								<p>We provide verifiable one way, round trip, and multi-city flight bookings for any country visa within minutes at an affordable price without you having to pay for actual tickets.</p>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="offer__it blck">
							<div class="offer__head-2">
								<span>
									<i class="icon icon-001-money"></i>										
								</span>
								Buyer protection
							</div>
							<div class="offer__txt">
								<p>We provide verifiable one way, round trip, and multi-city flight bookings for any country visa within minutes at an affordable price without you having to pay for actual tickets.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
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
				<div class="row">
					<div class="col-md-4" >
						<div class="blck easy__blck easy__blck-1">
							<div class="easy__num">
								1
							</div>
							<div class="easy__head">
								Select Plan
							</div>
							<div class="easy__txt">
								<p>Choose a plan that suits your needs. We offer normal and priority deliveries.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blck easy__blck easy__blck-2">
							<div class="easy__num">
								2
							</div>
							<div class="easy__head">
								Submit Travel Details & Pay
							</div>
							<div class="easy__txt">
								<p>Provide trip details for you and your family. Make payment through paypal, debit or credit card.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="blck easy__blck easy__blck-3">
							<div class="easy__num">
								3
							</div>
							<div class="easy__head">
								Receive Itinerary in Email
							</div>
							<div class="easy__txt">
								<p>Hassle free online delivery of documents directly to your email within minutes.</p>
							</div>
						</div>
					</div>
				</div>
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
														
														<?php the_sub_field('pricce'); ?>
														
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
						Need Travel <br>
						Health Insurance?
					</div>
					<div class="insure__txt">
						<p>
							Applying for a travel visa? Embassy doesn’t recommend you to buy actual <br> 
							tickets until visa is approved. So why risk money and time?
						</p>
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
							<a class="inffo__play play__trigger" href="#" data-hreff='<iframe width="854" height="480" src="https://www.youtube.com/embed/9HPOyGMLHy4?autoplay=1" frameborder="0" gesture="media" allowfullscreen></iframe>'>

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
				



				<div class="testim__list flexx flexx-wrap">
					
					
					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim1.png" alt="" class="testim__cont-img">
						<div class="testim__txt"><p>
								«Fast and Reliable service! I got my flight itinerary for visa within the requested time. I was able to verify the reservation directly on the airlines website as well. Highly Recommend!!»
							</p>
						</div>
						<div class="testim__author">
							<p>
								<b>SATIAGO LOPEZ,</b> Colombia
							</p>	
						</div>
					</div>


					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim2.png" alt="" class="testim__cont-img">
						<div class="testim__txt"><p>
								To apply for Schengen visa, we came across this website to buy travel insurance for visa. The insurance service these guys provide is terrific. No hassle and we got our visa approved
							</p>
						</div>
						<div class="testim__author">
							<p>
								<b>KUNAL SINGH,</b> India
							</p>
						</div>	
					</div>

					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim3.png" alt="" class="testim__cont-img">
						<div class="testim__txt">
							<p>
								I placed an order for hotel booking for visa. I received my hotel itinerary for visa on time without any issues. Moreover the team didn’t charge any additional dollars for corrections to my itinerary!
							</p>
						</div>
						<div class="testim__author">	
							<p>
								<b>ANIMESH GUPTA,</b> UAE
							</p>
						</div>
					</div>

					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim4.png" alt="" class="testim__cont-img">
						<div class="testim__txt">
							<p>
								Great Job Visa Reservation Team! My visa got approved. I highly recommend using this service to folks looking for flight reservations for visa, hotel bookings for visa and travel medical insurance for visa!! Hassle free.
							</p>
						</div>
						<div class="testim__author">	
							<p>
								<b>BENJAMIN ADAMS,</b> United States
							</p>
						</div>	
					</div>


					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim5.png" alt="" class="testim__cont-img">
						<div class="testim__txt"><p>
								I ordered the priority delivery package (Flight+Hotel+Insurance) for my visa application at 11:30 PM EST and got it within an hour! I reached out to them using online chat and got questions clarified instantly! Loved it!
							</p>
						</div>
						<div class="testim__author">
							<p>
								<b>VACI TOMAKOE,</b> Africa
							</p>	
						</div>
					</div>


					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim6.png" alt="" class="testim__cont-img">
						<div class="testim__txt"><p>
								Visa Reservation Team was very friendly and always available to help with questions during our visa application process!! Glad we chose these guys! Also group travel discounts helped us keep our budget intact.
							</p>
						</div>
						<div class="testim__author">
							<p>
								<b>MARY BOYD,</b> Canada
							</p>
						</div>	
					</div>

					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim7.png" alt="" class="testim__cont-img">
						<div class="testim__txt">
							<p>
								After coming across various websites offering such services, this was the only website that gave me a warm feeling that it is genuine. So i tried it out and it was worth my time and money! Reservations were verifiable on airlines. I got my Visa too. Yayyy!
							</p>
						</div>
						<div class="testim__author">	
							<p>
								<b>ONEIL MCLEANNE,</b> Germany
							</p>
						</div>
					</div>

					<div class="testim__cont testim__cont-1">
						<img src="<?php bloginfo('template_directory');?>/dist/img/testim8.png" alt="" class="testim__cont-img">
						<div class="testim__txt">
							<p>
								The variety of services this website offered were very helpful because we initially wanted to order flight itinerary for visa but ended up getting hotel reservations for visa and travel medical insurance for Schengen visa too. Truly professional and super fast service!
							</p>
						</div>
						<div class="testim__author">	
							<p>
								<b>ALEK BRION,</b> Spain
							</p>
						</div>	
					</div>


				</div>
				
				<!-- <div class="testim__blck blck">
			<div class="testim__cont testim__cont-1">
				<img src="<?php bloginfo('template_directory');?>/dist/img/testim1.png" alt="" class="testim__cont-img">
				<div class="testim__txt"><p>
						«Fast and Reliable service! I got my flight itinerary for visa within the requested time. I was able to verify the reservation directly on the airlines website as well. Highly Recommend!!»
					</p>
					
				</div>
				<p>
					<b>SATIAGO LOPEZ,</b> Colombia
				</p>
			</div>
		</div> -->




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
							<ul>
								<li>All our itineraries are verifiable</li>
								<li>
									Support for any country visa
								</li>
								<li>
									24/7 customer support
								</li>
								<li>
									We offer group traveler discounts
								</li>
							</ul>

							<ul>
								<li>100% buyer protection - Paypal</li>
								<li>
									Online chat, emtail and phone
								</li>
								<li>
									Refund available, if visa is denied
								</li>
								<li>
									Affordable pricing and reliable service
								</li>
							</ul>

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