<!-- sidebar -->
<aside class="sidebar" role="complementary">
	<div class="col-md-3 sidebar_p1" >
		<div class="sidebar_header" id="mp_sb"> 
			<div class="text-container">
				Most Popular ///
			</div>
		</div>
		<div class="sidebar_body" >
			<!-- - - - - - - - - - - - - - -MOST POPULAR POST #1- - - - - - - - - - - - - - - - - - - - - - - - -  -->
			<?php
				$count = 0;
				query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC');
				if (have_posts()) : while (have_posts()&&$count<3) : the_post(); 
			?>
			<div class="mp_img">
				<?php
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail();
					} 
				?>
			</div>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			<?php
				$count += 1;
				endwhile; endif;
				wp_reset_query();
			?>
		</div>
		<div class="sidebar_header" id="fb_sb">
			<div class="text-container">
				<p>LIKE US</p> on facebook /// 
			</div>
		</div>
		<div class="sidebar_body">

		</div>
		<div class="sidebar_header" id="tw_sb">
			<div class="text-container">
				<p>FOLLOW US</p> on twitter ///
			</div>
		</div>
		<div class="sidebar_body">

		</div>

	</div>	

</aside>
<!-- /sidebar -->
