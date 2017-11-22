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
		
		<div class="easy s content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="sect-title">
							THREE EASY STEPS
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
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
							<button class="to-mod butt insure__butt">
								Order Insurance
							</button>
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
							<a class="inffo__play play__trigger" href="#" data-hreff='<iframe width="854" height="480" src="https://www.youtube.com/embed/hTWKbfoikeg?autoplay=1" frameborder="0" gesture="media" allowfullscreen></iframe>'>
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
				<div class="inffo__subb">
					<div class="inffo__cell" style="background: url('<?php bloginfo("template_directory");?>/dist/img/inffo2.jpg') center no-repeat; -webkit-background-size: cover; background-size: cover;">
						<div class="inffo__cell-cont">
							<p>
								<b>Don't buy tickets</b>
							</p>
							<p>
								Embassy recommends not to purchase actual tickets until visa is approved
							<br>
								<a href="#">See why...</a>
							</p>
						</div>
					</div>
					<div class="inffo__cell" style="background: url('<?php bloginfo("template_directory");?>/dist/img/inffo3.jpg') center no-repeat; -webkit-background-size: cover; background-size: cover;">
						<div class="inffo__cell-cont">
							<p>
								<b>Order reservations</b>
							</p>
							<p>
								Order with us. We will take care of all reservations and cancellations for you
								<br>
								<a href="#">See why...</a>
							</p>
						</div>
					</div>
				</div>
				<div class="inffo__subb">
					<div class="inffo__cell" style="background: url('<?php bloginfo("template_directory");?>/dist/img/inffo4.jpg') center no-repeat; -webkit-background-size: cover; background-size: cover;">
						<div class="inffo__cell-cont">
							<p>
								<b>Get Visa</b>
							</p>
							<p>
								Embassy perfectly accepts bookings as itineraries show true intent of travel
							<br>
								<a href="#">See why...</a>
							</p>
						</div>
					</div>
					<div class="inffo__cell" style="background: url('<?php bloginfo("template_directory");?>/dist/img/inffo5.jpg') center no-repeat; -webkit-background-size: cover; background-size: cover;">
						<div class="inffo__cell-cont">
							<p>
								<b>Plan Trip</b>
							</p>
							<p>
								After your visa gets approved, you can then make your own travel plans!
							<br>
								<a href="#">See why...</a>
							</p>
						</div>
					</div>
				</div>

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
				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
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
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-1">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim2.png" alt="" class="testim__cont-img">
								<div class="testim__txt"><p>
										To apply for Schengen visa, we came across this website to buy travel insurance for visa. The insurance service these guys provide is terrific. No hassle and we got our visa approved
									</p>
									
								</div>
								<p>
										<b>KUNAL SINGH,</b> India
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-1">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim3.png" alt="" class="testim__cont-img">
								<div class="testim__txt">
									<p>
										I placed an order for hotel booking for visa. I received my hotel itinerary for visa on time without any issues. Moreover the team didn’t charge any additional dollars for corrections to my itinerary!
									</p>
									
								</div>	
								<p>
										<b>ANIMESH GUPTA,</b> UAE
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-1">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim4.png" alt="" class="testim__cont-img">
								<div class="testim__txt">
									<p>
										Great Job Visa Reservation Team! My visa got approved. I highly recommend using this service to folks looking for flight reservations for visa, hotel bookings for visa and travel medical insurance for visa!! Hassle free.
									</p>
									
								</div>
								<p>
										<b>BENJAMIN ADAMS,</b> United States
									</p>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-2">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim5.png" alt="" class="testim__cont-img">
								<div class="testim__txt">
									<p>
										I ordered the priority delivery package (Flight+Hotel+Insurance) for my visa application at 11:30 PM EST and got it within an hour! I reached out to them using online chat and got questions clarified instantly! Loved it!
									</p>
									
								</div>
								<p>
										<b>VACI TOMAKOE,</b> Africa
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-2">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim6.png" alt="" class="testim__cont-img">
								<div class="testim__txt">
									<p>
										Visa Reservation Team was very friendly and always available to help with questions during our visa application process!! Glad we chose these guys! Also group travel discounts helped us keep our budget intact.
									</p>
									
								</div>
								<p>
										<b>MARY BOYD,</b> Canada
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-2">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim7.png" alt="" class="testim__cont-img">
								<div class="testim__txt">
									<p>
										After coming across various websites offering such services, this was the only website that gave me a warm feeling that it is genuine. So i tried it out and it was worth my time and money! Reservations were verifiable on airlines. I got my Visa too. Yayyy!
									</p>
									
								</div>
								<p>
										<b>ONEIL MCLEANNE,</b> Germany
									</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6">
						<div class="testim__blck blck">
							<div class="testim__cont testim__cont-2">
								<img src="<?php bloginfo('template_directory');?>/dist/img/testim8.png" alt="" class="testim__cont-img">
								<div class="testim__txt">	
									<p>
										The variety of services this website offered were very helpful because we initially wanted to order flight itinerary for visa but ended up getting hotel reservations for visa and travel medical insurance for Schengen visa too. Truly professional and super fast service!
									</p>
									
								</div>
								<p>
										<b>ALEK BRION,</b> Spain
									</p>
							</div>
						</div>
					</div>
				</div>

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
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Austria"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Austria</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Belgium"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Belgium</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Czech-Republic"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Czech Republic</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_China"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">China</a>
										</div>
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Denmark"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Denmark</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Estonia"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Estonia</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Germany"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Germany</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Greece"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Greece</a>
										</div>
									</div>
								</div>
							</div>
								
							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Hungary"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Hungary</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Iceland"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Iceland</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Italy"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Italy</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Sweden"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Sweden</a>
										</div>
									</div>
								</div>
							</div>	

							<div class="row">
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Netherlands"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Netherlands</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Portugal"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Portugal</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Spain"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Spain</a>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-sm-6">
									<div class="tbl">
										<div class="tbl-cell cell-1 mdl">
											<i class="icon icon-flag_Visa-Countries"></i>
										</div>
										<div class="tbl-cell cell-2 mdl">
											<a href="#">Visa Countries</a>
										</div>
									</div>
								</div>
							</div>	

						</div>
					</div>
				</div>
			</div>
		</div>

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>