<!-- SINGLE POST PAGE -->

<?php get_header(); ?>
<body>
	<div class="page-main" id="body-main">
		<!-- post thumbnail -->	
		<div class="container-fluid" >
			<div class="row-fluid">
				<div class="col-md-11" id="featured-image">
					<?php 
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('large');
						} 
					?>
				</div>
			</div>
		</div>
		<!-- /post thumbnail -->
		<div class="container-fluid">
			<div class="row-fluid">
				<div class="col-md-8" id="post_content">
					<!-- article -->
					<?php if (have_posts()): while (have_posts()) : the_post(); 
					setPostViews(get_the_ID());
					?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div id="content">
							<!-- post title -->
							<!--<h1 id="post_title">
								<?php //the_title(); ?>
							</h1> -->
							<!-- /post title -->

							<!-- post details 
							<span class="date"><?php //the_time('F j, Y'); ?> <?php //the_time('g:i a'); ?></span>
							<!-- <span class="author"><?php //_e( 'Published by', 'html5blank' ); ?> <?php //the_author_posts_link(); ?></span>
							<span class="comments"><?php //if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
							<!-- /post details -->
							<?php //[twitter_follow screen_name="wearhausinc"] ?>
							<?php the_content(); // Dynamic Content ?>

							<div class="tags">
								<?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
							</div>

							<p><?php _e( 'Categorized in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
						</div>
					</article>
					</div>
				<?php get_sidebar(); ?>
			</div>
						<div class="row-fluid">
							<div class="col-md-8 related_cont">
								<div class="related_articles">
									<?php wp_related_posts()?>
								</div>
								<div class="comment_section">
									<?php comments_template(); ?>
								</div>
							</div>
							
						</div>
						
						<!--DISQUS
						<div class="comment_section">
							<div id="disqus_thread"></div>
								<script type="text/javascript">
								    /* * * CONFIGURATION VARIABLES * * */
								    // Required: on line below, replace text in quotes with your forum shortname
								    var disqus_shortname = 'wearhaus';
								    
								    /* * * DON'T EDIT BELOW THIS LINE * * */
								    (function() {
								        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
								        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
								        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
								    })();
								</script>
								<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
						</div>	-->
					
				
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
			<!-- COMMENT COUNTER SECTION-->
	<!-- MORE DISQUS STUFF
	<script type="text/javascript">
	    /* * * CONFIGURATION VARIABLES * * */
	    // Required: on line below, replace text in quotes with your forum shortname
	    var disqus_shortname = 'wearhaus';
	    
	    /* * * DON'T EDIT BELOW THIS LINE * * */
	    (function () {
	        var s = document.createElement('script'); s.async = true;
	        s.type = 'text/javascript';
	        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
	        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	    }());
	</script> -->
</body>
