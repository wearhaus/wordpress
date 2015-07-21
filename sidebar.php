<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="col-md-3"id="sidebar_p1">
		<div class="sidebar_header" > 
			Most Popular
		</div>
		<div class="sidebar_body" id="mp_sb">
			<?php
				query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
				if (have_posts()) : while (have_posts()) : the_post(); ?>
				<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
				endwhile; endif;
				wp_reset_query();
			?>
		</div>
		<div class="sidebar_header" id="fb_sb">
			LIKE US on facebook
		</div>
		<div class="sidebar_body">

		</div>
		<div class="sidebar_header" id="tw_sb">
			FOLLOW US on twitter
		</div>
		<div class="sidebar_body">

		</div>

	</div>	

</aside>
<!-- /sidebar -->
