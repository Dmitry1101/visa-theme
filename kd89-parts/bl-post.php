<div data-id="<?php echo get_the_ID(); ?>" class="blog__item block-click" style="background: url('<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>') center no-repeat; -webkit-background-size: cover; background-size: cover;">
	<div class="blog__img">
		<img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), "medium_large" ); ?>" alt="">	
	</div>				
	<div class="blog__content">
		<div class="blog__date"><?php the_time('M j, Y'); ?> | <?php echo get_comments_number(); ?> comments</div>
		<div class="blog__content-title">

			<?php the_title(); ?>
		
		</div>
		<div class="blog__content-txt">
			<p>
				<?php 
					echo excerpt(30);
				?>
			</p>
		</div>
		<p class="blog__content-read">
			<a class="link-to-follow" href="<?php the_permalink(); ?>">Read More ></a>
		</p>
	</div>
</div>	