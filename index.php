<?php get_header(); ?>
<div class="container-fluid" id="body-main">
<!-- - - - - - - - - - - - - - - - - - - - - - - - - FEATURED CONTAINER- - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - -  - -->
		<div class="row-fluid" id="feature-container">
			<div class="col-md-7" id="first-feature">
				<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_1');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        
					        <div class="image_container" >
					        	<?php
					        
					        	if (function_exists('has_post_thumbnail')) {
								    if ( has_post_thumbnail() ) {
								    	the_post_thumbnail();
								    }
								}
								?>
					        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
								<div class='feature_title'>
									<a id = 'feature_title-a'href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
										<h1><?php the_title(); ?></h1>
									
									</a>
								</div>
					        </div>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
			<div class="col-md-4" id="second-feature">
			<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_2');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        
					        <div class="image_container" >
					        	<?php
					        
					        	if (function_exists('has_post_thumbnail')) {
								    if ( has_post_thumbnail() ) {
								    	the_post_thumbnail();
								    }
								}
								?>
					        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
									<div class='feature_title'>
										<a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
										
											<h2><?php the_title(); ?></h2>
										
										</a>
									</div>
					        </div>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
			<div class="col-md-4" id="third-feature">
				<?php $original_query = $wp_query;
					$wp_query = null;
					$args=array('posts_per_page'=>1, 'tag' => 'featured_3');
					$wp_query = new WP_Query( $args );
					if ( have_posts() ) :
					    while (have_posts()) : the_post();
					        ?>
					        
						        <div class="image_container" >
						        	<?php
						        
						        	if (function_exists('has_post_thumbnail')) {
									    if ( has_post_thumbnail() ) {
									    	the_post_thumbnail();
									    }
									}
									?>
						        	<span class="caption-overlay caption-overlay-1" style="background: url(<?php bloginfo('stylesheet_directory'); ?>/img/overlay2.png) repeat-x 0 0;"></span>
									<div class='feature_title'>
									<a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
										<h2><?php the_title(); ?></h2>
									
									</a>
									</div>
						        </div>
				<?php
					    endwhile;
					endif;
					$wp_query = null;
					$wp_query = $original_query;
				?>
			</div>
		</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - RECENT POSTS CONTAINER- - - - - - - - - - - - - - - - - - - - - - - - - -  - - - - - -  - -->
		<div class="catcontainer">
		<div class="row-fluid" id="recent-container">
			<div class="col-md-8" id="posts">
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
							echo '<div class="small_category">';
							echo '<div class="post_title">'.$cat->name.' ///</div>';
				?>

				<?php while (have_posts()) : the_post(); ?>		
				<div class="category_recent_post">
					<div class="category_post_thumb">
						<?php the_post_thumbnail('medium'); ?>
					</div>
					<div class="cat_title_container">
						<div class="category_post_title">
						  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
						  	<?php the_title(); ?>
						  </a>
						</div>
					</div>
				</div>
				
				<!-- this area is for the display of your posts the way you want it -->
				<!-- i.e. title, exerpt(), etc. -->

				<?php endwhile; ?>
				<?php echo '</div>';else : echo '<h2>No Posts for '.$cat->name.' Category</h2>';?>
				<?php endif; wp_reset_query; 
				 ?>

				<?php endforeach; ?>
			</div>
<!-- - - - - - - - - - - - - - - - - - - - - - - - - SIDEBAR- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -  - - -  - - - - - -  - -->
			<div class="col-md-3 sidebar_p1 sidebar_p2" >
				<div class="sidebar_header" id="tw_sb">
					<div class="text-container">
						<p>FOLLOW US</p> on twitter ///
					</div>
				</div>
				<div class="sidebar_body" id="tw_sb_body">
					<a class="twitter-timeline" href="https://twitter.com/wearhausinc" data-widget-id="624299359467745280">Tweets by @wearhausinc</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</div>
				<div class="sidebar_header" id="fb_sb">
					<div class="text-container">
						<p>LIKE US</p> on facebook /// 
					</div>
				</div>
				<div class="sidebar_body" id="fb_sb_body">
					<div class="sidebar-widget">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
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
			<section class="featured_articles">
			<div class="container-fluid">
				<div class="row-fluid">
				
			</div class="row-fluid">
			</div>
			</section>
		<!-- /section -->
	</main>
</body>
<?php get_footer(); ?>

</html>
