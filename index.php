<?php get_header(); ?>
<div class="container-fluid" id="body-main">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - FEATURED CONTAINER- - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - -  - -->
	<div class="container-fluid" id="cont_feature">	
		<div class="row-fluid" >
			<div class="col-md-7 feature-container" id="first-feature">
				<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_1');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        <a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
					        <div class="image_container" >
					        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
					        	<?php
					        
					        	if (function_exists('has_post_thumbnail')) {
								    if ( has_post_thumbnail() ) {
								    	the_post_thumbnail();
								    }
								}
								?>
					        	
								<div class='feature_title'>
									<a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
										<h1><?php the_title(); ?></h1>
									
									</a>
								</div>
					        </div>
					    </a>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
			<div class="col-md-4 feature-container" id="second-feature">
			<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_2');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        <a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
					        <div class="image_container" >
					        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
					        	<?php
					        
					        	if (function_exists('has_post_thumbnail')) {
								    if ( has_post_thumbnail() ) {
								    	the_post_thumbnail('large');
								    }
								}
								?>
					        	
								<div class='feature_title'>
									<a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
										<h2><?php the_title(); ?></h2>
									
									</a>
								</div>
					        </div>
					    </a>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
			<div class="col-md-4 feature-container" id="third-feature">
				<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_3');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        <a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
					        <div class="image_container" >
					        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
					        	<?php
					        
					        	if (function_exists('has_post_thumbnail')) {
								    if ( has_post_thumbnail() ) {
								    	the_post_thumbnail('large');
								    }
								}
								?>
					        	
								<div class='feature_title'>
									<a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
										<h2><?php the_title(); ?></h2>
									
									</a>
								</div>
					        </div>
					    </a>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
		</div>
	</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - RECENT POSTS CONTAINER- - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - -  - -->
		<div class="catcontainer">
		<div class="row-fluid" id="recent-container">
			<div class="col-md-9" id="posts">
				<?php
					wp_reset_query();

					$cats = get_categories('');

					foreach ($cats as $cat) :
						
						if($cat->category_parent)  continue; //this line avoids to show posts of sub categories

						$args = array(
						'posts_per_page' => 3,
						'category_name' => $cat->slug,);

						query_posts($args); // reset to original

						if (have_posts()) :
							$category_id = get_cat_ID($cat->name);

						// Get the URL of this category
					    $category_link = get_category_link( $category_id );
							
						echo '<a href="'.$category_link.'"><div class="post_title" id="cat_title"><p>'.$cat->name.' </p></div></a>';
		
						echo '<div class="small_category"><div class="container-fluid cont_recent"><div class="row-fluid">';
						$count = 0;
				?>

				<?php while (have_posts()) : the_post(); ?>		
				<div class="col-md-4 recent_posts post_<?php echo $count; ?>">
					<div class="category_recent_post">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						<div class="category_post_thumb">
							<?php the_post_thumbnail('medium'); ?>
						</div>
						</a>
						<div class="cat_title_container">
							<div class="category_post_title">
							  	<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							  		<?php the_title(); ?>
							  	</a>
							  	<p class="excerpt">
							  		<?//php the_excerpt(); ?>
								</p>
							</div>
						</div>
					</div>
				</div>
				
				<!--End of each post -->
				

				<?php $count=$count+1;endwhile; echo '</div></div></div>';?>
				<?php else : echo '<h2>No Posts for '.$cat->name.' Category</h2>';?>
				<?php endif; wp_reset_query; 
				 ?>

				<?php endforeach; ?>
			</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - SIDEBAR- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - -  - - - - - -  - -->
			<div class="col-md-3 sidebar_p1 sidebar_p2" >
				<div class="sidebar_header" id="tw_sb">
					<div class="text-container">

						<p class="p_title">FOLLOW </p> on Twitter

					</div>
				</div>
				<div class="sidebar_body" id="tw_sb_body">
					<a class="twitter-timeline" href="https://twitter.com/wearhausinc" data-widget-id="624299359467745280">Tweets by @wearhausinc</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="sidebar_header" id="ig_sb">
					<div class="text-container">

						<p class="p_title">FOLLOW </p> on Instagram

					</div>
				</div>
				<div class="sidebar_body" id="ig_sb_body">
					<div class="sidebar-widget">
						<?php echo do_shortcode('[instagram-feed height=600]'); ?>
					</div>
				</div>   
				<div class="sidebar_header" id="fb_sb">
					<div class="text-container">

						<p class="p_title">LIKE </p> on Facebook<p>

					</div>
				</div>
				<div class="sidebar_body" id="fb_sb_body">
					<div class="sidebar-widget">
						<div class="fb-page" data-href="https://www.facebook.com/wearhausinc" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/wearhausinc"><a href="https://www.facebook.com/wearhausinc">Wearhaus Inc.</a></blockquote></div></div></div>
					</div>
				</div>
				                                        
			</div>	
<!-- - - - - - - - - - - - - - - - - - - - - - - - - END SIDEBAR- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - -  - - - - - -  - -->			
		</div>
	</div>
</div>
</div>
	<main role="main">
		<!-- section -->
			
			<div class="container-fluid">
				<div class="row-fluid">
				
			</div class="row-fluid">
			</div>
			
		<!-- /section -->
	</main>
</body>
<?php get_footer(); ?>

</html>