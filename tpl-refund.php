<?php /* Template Name: Refund */ ?>

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


	<div class="jumbo jumbo-2 flexx flexx-wrap" style="background: url('<?php bloginfo("template_directory");?>/dist/img/jumbo-3.jpg') top center no-repeat; background-attachment: fixed;">
		<div class="jumbo-2__txt">
			<h1>Refund Policy</h1>
			<p>
				Visa Reservation’s Refund Policy
			</p>
		</div>
	</div>

		
	
	<div class="mainn s content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="wrr">
						
						<h3>
							Refunds: (if applicable)
						</h3>
						
						<p>
							Once you place itinerary order with us and make the payment, you will receive an email confirmation from Visa Reservation Services to notify you that we have received your order and payment.
						</p>	
						<p>
							If you need amendments to your itinerary in terms of date changes or travel changes, we do unlimited corrections for you.
						</p>
						
						<p>
							If your visa is denied then upon showing the proof of rejection from the embassy and the reason of denial due to the itineraries we provided and you need a refund then send an email to service@visareservation.com with your name and email address requesting for refund within 60 days of the service delivery.
						</p>

						<p>
							If your refund request is approved, it will be processed immediately, and the credit will automatically be applied to your credit card or original method of payment, within a certain amount of days.
						</p>
						
						<h3>
							Late or missing refunds (if applicable)
						</h3>

						<p>
							If you have not received a refund yet, first double-check your bank account to be sure that the money has not been added to your account.
						</p>	
						<p>
							Then, contact your credit card company, it may take some time before your refund is officially posted.
						</p>
						<p>
							Next, contact your bank. There is often some processing time before a refund is posted.
						</p>
						<p>
							If you’ve done all of this and you still have not received your refund yet, please contact us at service@visareservation.com
						</p>
						
						<h3>
							No hassle return:
						</h3>
						
						<p>
							We will ask you why you were not satisfied as well, so we can give better service to our customers, but other than that no worries!
						</p>


					</div><!-- .wrr -->
				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<!-- post -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>