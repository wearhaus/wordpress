<!-- SINGLE POST PAGE -->

<?php get_header(); ?>
	<div class="page-main" id="body-main">
		<!-- post thumbnail -->	
		<div class="container-fluid" id="featured-image">
			<?php 
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail();
				} 
			?>
		</div>
		<!-- /post thumbnail -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-9">
					<!-- article -->
					<?php if (have_posts()): while (have_posts()) : the_post(); 
					setPostViews(get_the_ID());
					?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="wrapper">
							<div id="content">
								<!-- post title -->
								<h1 id="post_title">
									<?php the_title(); ?>
								</h1>
								<!-- /post title -->

								<!-- post details -->
								<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
								<!-- <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>-->
								<span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
								<!-- /post details -->

								<?php the_content(); // Dynamic Content ?>

								<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

								<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

								<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

								<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
							</div>
						</div>
						<?php comments_template(); ?>
					</article>
				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	<!-- /section -->
	</div>

<?php get_footer(); ?>
