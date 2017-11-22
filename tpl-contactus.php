<?php /* Template Name: Contactus */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbo jumbo-2 flexx flexx-wrap" style="background: url('<?php bloginfo("template_directory");?>/dist/img/jumbo-8.jpg') center bottom no-repeat; background-attachment: fixed; ">
			<div class="jumbo-2__txt">
				<h1>Hello!</h1>
				<blockquote>Our Team is available for you 24/7/365 – whatsapp, phone, chat and email!</blockquote>
			</div>
		</div>

			
		
		<div class="mainn s content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="txt-cent">
							<h1>
								Contact Us
							</h1>	
							<p style="font-size: 20px;">
								<em>Ask us any questions related to flight itinerary for visa, hotel bookings for visa or travel medical insurance for visa. We even appreciate a ‘Hi’ from you!</em>
							</p>
							<p>&nbsp;</p>
						</div>	
						<div class="cont-us flexx flexx-wrap">
							<div class="cont-us__blck blck-1">
								<div class="cont-us__sub">
									<h4>
										Phone
									</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us1"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													<a href="tel:+1 (919)-655-5156">+1 (919)-655-5156</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us-2"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													North Carolina, USA - 27560
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="cont-us__sub">
									<div class="row">
										<div class="col-md-6">
											<h4>Email</h4>
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us-3"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													<a href="mailto: service@visareservation.com">service@visareservation.com</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<h4>Follow Us</h4>
											<ul class="cont-us__soc">
												<li>
													<a href="#">
														<i class="icon icon-cont-us-fb"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon icon-cont-us-tw"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon icon-cont-us-yt"></i>		
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div><!-- .cont-us__sub -->

								<div class="cont-us__sub">
									<h4>
										Working Hours
									</h4>
									<div class="row">
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us1"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													<a href="tel:+1 (919)-655-5156">+1 (919)-655-5156</a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us-2"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													North Carolina, USA - 27560
												</div>
											</div>
										</div>
									</div>
								</div><!-- .cont-us__sub -->
							</div>
							<div class="cont-us__blck blck-2">
								
								<div class="cont-us__inn">
									
									<p style="font-size: 30px;">
										Duis aute irure dolor in 										
									</p>
									<br>
									<!-- <p>&nbsp;</p> -->
									<form action="" class="kd89-form cont-us__form">
										<input type="text" class="cont-us__inp" placeholder="Full name">
										<input type="text" class="cont-us__inp" placeholder="Your Email - Address">
										<input type="text" class="cont-us__inp" placeholder="Subject">
										<textarea name="" class="cont-us__area" id="" cols="30" rows="10" placeholder="Enter Your Massage here..."></textarea>
										<input type="submit" value="Order Insurance" class="butt cont-us__subm">
									</form>
									
								</div>
								
								
							</div>
						</div><!-- .cont-us -->	


						</div>
					</div>
				</div>
			</div>
		</div><!-- .mainn -->		

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>