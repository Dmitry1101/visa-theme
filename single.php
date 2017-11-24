<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package visa_reservation
 */

get_header(); ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		
	<div class="mainn s content singl">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					
					<div class="singl__line">
						
					</div>
					

					<?php 

					the_title( $before = '<h1>', $after = '</h1>', $echo = true );

					the_content( ); 



					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>


					


				</div>
				<div class="col-md-3">
					Related posts



					<div class="fb-page" data-href="https://www.facebook.com/VisaReservations/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VisaReservations/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VisaReservations/">Visa Reservation</a></blockquote></div>
					
						
					<div class="kd-tw-feed">
						
					
						<a class="twitter-timeline" href="https://twitter.com/VisaReservation?ref_src=twsrc%5Etfw">Tweets by VisaReservation</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						
					</div>	


				</div>
			</div>
		</div>
	</div><!-- .mainn -->		
		

<!-- post -->
<?php endwhile; endif; ?>











	

<?php

get_footer();
