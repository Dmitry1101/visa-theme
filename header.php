<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package visa_reservation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" type="image/x-icon">
</head>

<body <?php body_class(); ?>>
	
	<div class="whole">
		<div class="flexx flexx-wrap topp">
			<div class="flexx__blck topp__blck topp__blck-1">
				
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="topp__link">
					<img src="<?php echo wp_get_attachment_image_src( get_field('kd89_acf_hl', 'option'), 'medium' )[0]; ?>" alt="" class="topp__logo">
				</a>
				
				<?php wp_nav_menu( array(
					'theme_location'  => 'menu-1',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'topp__menu',
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
			<div class="flexx__blck topp__blck topp__blck-2">
				
				<?php
				if( have_rows('kd_acf_hs', 'option') ): ?>
					
					<ul class="topp__soc">

						<?php
				    while ( have_rows('kd_acf_hs', 'option') ) : the_row(); ?>
					
				  		<li><a target="__blank" href="<?php the_sub_field('txt'); ?>"><i class="icon <?php the_sub_field('icco'); ?>"></i></a></li>

						<?php 
				    endwhile; ?>
					
					</ul>

				<?php	
				endif; ?>

				
				<a class="topp__phone" href="tel:<?php echo get_field('kd_acf_hp', 'option'); ?>"><?php echo get_field('kd_acf_hp', 'option'); ?></a>

				<span class="topp__div">|</span>
				<div class="topp__sel">
					
					<?php wp_nav_menu( array(
						'theme_location'  => 'menu-2',
						'menu'            => '',
						'container'       => '',
						'container_class' => '',
						'container_id'    => '',
						'menu_class'      => 'lang-menu',
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
					
					<i class="icon icon-down-arrow"></i>

				</div>
				
				<div class="mob-menu-butt">
					<button class="hamburger hamburger--stand" type="button">
					  <span class="hamburger-box">
					    <span class="hamburger-inner"></span>
					  </span>
					</button>
				</div>
					

			</div>
		</div>