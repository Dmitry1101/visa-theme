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
													<a href="tel:<?php echo get_field('kd_acf_hp', 'option'); ?>"><?php echo get_field('kd_acf_hp', 'option'); ?></a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-cont-us-2"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													<?php echo get_field('kd89_acf_faddr', 'option'); ?>
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
													<a href="mailto: <?php echo get_field('kd89_acf_femail', 'option'); ?>"><?php echo get_field('kd89_acf_femail', 'option'); ?></a>
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<h4>Follow Us</h4>
											
											
											<?php $soc_arr = ['fb','tw', 'yt']; ?>
						
											<?php
											if( have_rows('kd89_acf_fsoc', 'option') ): 
												$c = 0; ?>
												
												<ul class="cont-us__soc">

													<?php
											    while ( have_rows('kd89_acf_fsoc', 'option') ) : the_row(); ?>
														
														<li><a target="__blank" href="<?php the_sub_field('urll'); ?>"><i class="icon icon-cont-us-<?php echo $soc_arr[$c]; ?>	"></i></a></li>

													<?php 
														$c++;
											    endwhile; ?>
												
												</ul>

											<?php	
											endif; ?>

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
													<i class="icon icon-week"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													Monday-Friday: 24 Hours
												</div>
											</div>
										</div>
										<div class="col-md-6">
											<div class="tbl cont-us__tbl">
												<div class="tbl-cell cell-1 mdl">
													<i class="icon icon-week"></i>
												</div>
												<div class="tbl-cell cell-2 mdl">
													Weekend: 24 Hours
												</div>
											</div>
										</div>
									</div>
								</div><!-- .cont-us__sub -->
							</div>
							<div class="cont-us__blck blck-2">
								
								<div class="cont-us__inn">
									
									<div class="kd89__cont-us-form">
										
										<?php echo do_shortcode( '[gravityform id=62]' ) ?>		
																				
									</div>
										
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