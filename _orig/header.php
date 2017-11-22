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
</head>

<body <?php body_class(); ?>>
	
	<div class="flexx flexx-wrap topp">
				<div class="flexx__blck topp__blck topp__blck-1">
					
					<a href="#" class="topp__link">
						<img src="<?php bloginfo('template_directory');?>/dist/img/logo.png" alt="" class="topp__logo">
					</a>

					<ul class="topp__menu">
						<li><a href="#">PRICING</a></li>
						<li><a href="#">SERVICES</a></li>
						<li><a href="#">INSURANCE</a></li>
						<li><a href="#">BLOG</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</div>
				<div class="flexx__blck topp__blck topp__blck-2">
					<ul class="topp__soc">
						<li><a href="#"><i class="icon icon-fb"></i></a></li>
						<li><a href="#"><i class="icon icon-tw"></i></a></li>
						<li><a href="#"><i class="icon icon-ph"></i></a></li>
					</ul>
					<a class="topp__phone" href="#">+1 (919)-655-5156</a>
					<span class="topp__div">|</span>
					<div class="topp__sel">
						ENGLISH
						<i>&#9660;</i>
					</div>
					<div class="topp__country">
						<img src="<?php bloginfo('template_directory');?>/dist/img/country1.jpg" alt="">
					</div>
				</div>
			</div>
