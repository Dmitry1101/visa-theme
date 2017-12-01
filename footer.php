<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package visa_reservation
 */

?>


<div class="foot s" style="background: url('<?php echo wp_get_attachment_image_src( get_field('kd89_acf_bg', 'option'), 'full' )[0]; ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8">
				<div class="foot__blck blck foot__blck-1 clearfix">
					<div class="foot__it">
						<p>
							<?php the_field('kd89_acf_ft1', 'option'); ?>
						</p>
						<?php wp_nav_menu( array(
							'theme_location'  => 'menu-foot-1',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>
					</div>
					<div class="foot__it">
						<p>
							<?php the_field('kd89_acf_ft2', 'option'); ?>
						</p>
						<?php wp_nav_menu( array(
							'theme_location'  => 'menu-foot-2',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>

					</div>
					<div class="foot__it">
						<p>
							<?php the_field('kd89_acf_ft3', 'option'); ?>
						</p>
						<?php wp_nav_menu( array(
							'theme_location'  => 'menu-foot-3',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => '',
							'menu_id'         => '',
							'echo'            => true,
							'fallback_cb'     => 'wp_page_menu',
							'before'          => '',
							'after'           => '',
							'link_before'     => '',
							'link_after'      => '',
							'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
							'depth'           => 0,
							'walker'          => '',
						) ); ?>

					</div>
				</div><!-- .foot__blck -->
				
				<div class="row">
					<div class="col-md-12">

						<div class="foot__flexx">
							
							<div class="foot__flexx-it">
								<!-- (c) 2005, 2017. Authorize.Net is a registered trademark of CyberSource Corporation --> 
								<div class="AuthorizeNetSeal"> <script type="text/javascript" language="javascript">var ANS_customer_id="a56d9d7b-3104-4203-8c80-90cdf50516a8";</script> <script type="text/javascript" language="javascript" src="//verify.authorize.net/anetseal/seal.js" ></script> </div>
							</div>

							<div class="foot__flexx-it paypal">
								<!-- PayPal Logo -->
								<table border="0" cellpadding="10" cellspacing="0" align="center"><tr><td align="center"></td></tr><tr><td align="center"><a href="https://www.paypal.com/webapps/mpp/paypal-popup" title="How PayPal Works" onclick="javascript:window.open('https://www.paypal.com/webapps/mpp/paypal-popup','WIPaypal','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=1060, height=700'); return false;"><img src="https://www.paypalobjects.com/webstatic/mktg/logo/pp_cc_mark_37x23.jpg" border="0" alt="PayPal Logo"></a></td></tr></table><!-- PayPal Logo -->
							
							</div>

							<div class="foot__flexx-it">
								<img src="<?php bloginfo('template_directory'); ?>/dist/img/spons-min/ssl.png" alt="">	
							</div>
							
							<div class="foot__flexx-it sm">
								<img src="<?php bloginfo('template_directory'); ?>/dist/img/spons-min/master.png" alt="">	
							</div>

							<div class="foot__flexx-it sm">
								<img src="<?php bloginfo('template_directory'); ?>/dist/img/spons-min/visa.png" alt="">	
							</div>

							<div class="foot__flexx-it sm">
								<img src="<?php bloginfo('template_directory'); ?>/dist/img/spons-min/discover.png" alt="">	
							</div>	

							<div class="foot__flexx-it sm">
								<img src="<?php bloginfo('template_directory'); ?>/dist/img/spons-min/express.png" alt="">	
							</div>	

						</div>


						
						
				
							
						

					</div>
				</div><!-- .row -->

			</div><!-- .col-md-8 -->
			<div class="col-md-4">
				<div class="foot__blck blck foot__blck-2 clearfix">
					<div class="foot__lasst fl-rght">
						
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo wp_get_attachment_image_src( get_field('kd89_acf_fl', 'option'), 'medium' )[0]; ?>" alt="" class="foot__logo">
						</a>
						
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
						
						<div class="foot__info">
							<p>
								<i class="icon icon-foot-info1"></i>
								<?php echo get_field('kd89_acf_faddr', 'option'); ?>
							</p>
							<p>
								<i class="icon icon-foot-info2"></i>
								<a href="tel:<?php echo get_field('kd_acf_hp', 'option'); ?>"><?php echo get_field('kd_acf_hp', 'option'); ?></a>
							</p>
							<p>
								<i class="icon icon-foot-info3"></i>
								<a href="mailto:<?php echo get_field('kd89_acf_femail', 'option'); ?>"><?php echo get_field('kd89_acf_femail', 'option'); ?></a>
							</p>
						</div>

						<div class="foot__copy">
							
							<?php echo get_field('kd89_acf_copy', 'option'); ?>
							
						</div>

					</div>
					
					
				</div>
			</div>
		</div>
	</div><!-- .container-fluid -->
</div><!-- .foot -->

</div><!-- .whole -->



<div class="kd-preload">
	<div class="loader">Loading...</div>
</div>

<?php wp_footer(); ?>


<?php 
if( isset( $_GET['scrollto'] ) ) : ?>
	
	<script type="text/javascript">
		
		$(function() {
			$('html, body').animate({
	        scrollTop: $("#<?php echo $_GET['scrollto']; ?>").offset().top - 80
	    }, 2000);
		});
	
	</script>	

<?php
endif; ?>

</body>
</html>
