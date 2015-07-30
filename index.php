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
									<a href="<?php the_permalink()?>" title="<?php the_title(); ?>">
									
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
		<div class="row-fluid" id="recent-container">
			<div class="col-md-8">
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
				echo '<h2 class="category_name">'.$cat->name.'</h2>';
				?>

				<?php while (have_posts()) : the_post(); ?>		
				<div class="category_recent_post">
					<div class="category_post_thumb">
						<?php the_post_thumbnail('medium'); ?>
					</div>
					<div class="category_post_title">
					  <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</div>
				</div>
				<!-- this area is for the display of your posts the way you want it -->
				<!-- i.e. title, exerpt(), etc. -->

				<?php endwhile; ?>
				<?php else : echo '<h2>No Posts for '.$cat->name.' Category</h2>';?>
				<?php endif; wp_reset_query; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<main role="main">
		<!-- section -->
			<section class="featured_articles">
			<div class="container-fluid">
				<div class="row-fluid">
				<h1><?php _e( 'Latest Posts', 'wearhaus' ); ?></h1>
				<div class="large-img">

				</div>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div class="row-fluid">
			</div>
			</section>
		<!-- /section -->
		</main>
<?php get_footer(); ?>

