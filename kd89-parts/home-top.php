	<div class="jumbo jumbo-2 flexx flexx-wrap blog__jumbo">
		<div class="jumbo-2__txt">
			<h1>
				<?php 
				if(is_search()) : 
					printf( esc_html__( 'Search Results for: %s', 'visa_reservation' ), '<span>' . get_search_query() . '</span>' ); 
				else: ?>
				
					Blog
					
				<?php 
				endif; ?>

			</h1>
			<p>
				Get answers to the most popular questions.
			</p>
			
			<form class="kd89-search kd89-form" role="search" action="<?php echo site_url('/'); ?>" method="get">

				<input class="kd89-search__inp" type="search" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search "/>

				<input type="hidden" name="post_type" value="post" /> 
				
				<button class="kd89-search__butt" type="submit">SEARCH</button>	
				
			</form>


			<br>
			<blockquote>Checkout important information related to Travel and Visa!</blockquote>
		</div>
	</div>
