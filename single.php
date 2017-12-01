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
  js.src = 'https://connect.facebook.net/en_EN/sdk.js#xfbml=1&version=v2.11';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		
	<div class="mainn s content singl">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					
					<div class="singl__line clearfix">
						<div class="singl__bord">
							<div class="singl__titl">
								<span><?php echo get_the_author(); ?></span> | <?php the_time('M j, Y'); ?> | <?php echo get_comments_number(); ?> comments
							</div>
						</div>
						
						<?php $soc_arr = ['fb','tw', 'yt', 'insta', 'pin']; ?>

						<?php
						if( have_rows('kd89_acf_fsoc', 'option') ): 
							$c = 0; ?>
							
							<ul class="foot__soc">

								<?php
						    while ( have_rows('kd89_acf_fsoc', 'option') ) : the_row(); ?>
									
									<li><a target="__blank" href="<?php the_sub_field('urll'); ?>"><i class="icon icon-foot-<?php echo $soc_arr[$c]; ?>	"></i></a></li>

								<?php 
									$c++;
						    endwhile; ?>
							
							</ul>

						<?php	
						endif; ?>

					</div>
					

					<?php 

					the_title( $before = '<h1>', $after = '</h1>', $echo = true );

					the_content( ); ?>

				</div>
				<div class="col-md-4">
					
					<div class="singl__head"> 
						Related posts
					</div>
					
					<?php $args = array(
						'post_type'   => 'post',
						'order'               => 'DESC',
						'orderby'             => 'date',
						'posts_per_page'         => 5,
						'offset'                 => 0,
					);
					
					$the_query = new WP_Query( $args ); ?>
					
					<?php 
					if ( $the_query->have_posts() ) : ?>
					
						<div class="singl__it-list">	

							<?php 
							while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
								<div class="singl__it">
									<a href="<?php the_permalink(); ?>">
										<div class="singl__tbl tbl">
											<div class="tbl-cell cell-1 mdl">
												<?php the_post_thumbnail( 'thumbnail' ); ?>
											</div>
											<div class="tbl-cell cell-2 mdl">
												<?php the_title(); ?>
											</div>
										</div><!-- .singl__tbl -->
									</a>
								</div>	
								
							<?php 
							endwhile; ?>
						
						</div>

						<?php 
						wp_reset_postdata(); ?>
					
					<?php 
					endif; ?>


					
						


					<div class="singl__head m-b--15"> 
						Social Media Feeds
					</div>
			
					<!-- fb		 -->
					<div class="singl__widget">
						<div class="fb-page" data-href="https://www.facebook.com/VisaReservations/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/VisaReservations/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/VisaReservations/">Visa Reservation</a></blockquote></div>
					</div>
					
					<!-- tw	 -->
					<div class="singl__widget">
						<div class="kd-tw-feed">
							<a class="twitter-timeline" href="https://twitter.com/VisaReservation?ref_src=twsrc%5Etfw">Tweets by VisaReservation</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
						</div>
					</div>
					
					<!-- Pinterest			 -->
					<div class="singl__widget">
						<a data-pin-do="embedPin" data-pin-width="medium" href="https://www.pinterest.com/pin/99360735500167749/"></a>
						<script async defer src="//assets.pinterest.com/js/pinit.js"></script>
					</div>	
	
					
					<!-- TW -->
					<div class="singl__widget">
						<div class="g-page" data-width="100%" data-href="https://plus.google.com/105817348882038409467" data-rel="publisher"></div>
						<!-- Place this tag after the last widget tag. -->
						<script type="text/javascript">
						  (function() {
						    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
						    po.src = 'https://apis.google.com/js/platform.js';
						    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
						  })();
						</script>
					</div>
				</div>
			</div><!-- .row -->
		</div>
	</div><!-- .mainn -->		
	

	<?php 
		if ( comments_open() || get_comments_number() ) :
		
			comments_template();
		
		endif; 

	endwhile; endif; 

get_footer();
