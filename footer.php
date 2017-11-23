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
			<div class="col-md-6">
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
				</div>
			</div>
			<div class="col-md-6">
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

</body>
</html>
