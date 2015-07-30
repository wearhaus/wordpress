<?php get_header(); ?>
	<div class="container-fluid" id="body-main">
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
		<div class="row-fluid" id="recent-container">
			<div class="col-md-12" id="artists-container">
			</div>
			<div class="col-md-12" id="product-updates-container">
			</div>
			<div class>
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

<!-- - - - - - - - - - - - - - - - - - - - - - - - - -  INCLUSION OF ARTICLE STUFF- - - - - - - - - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 		
-->