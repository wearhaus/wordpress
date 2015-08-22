<?php get_header(); ?>
<body>
	<div class="page-main" id="body-main">
		<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-12" id="post_content">
						<div class="cont_404" id="search_content">
							<h1 class ="cont_404_title"id="post_title">
								<p><?php _e( 'Whoops! Page not found!', 'html5blank' ); ?></p>
								<?php _e( 'How did this get here? Looks like you are out of sync.', 'html5blank' ); ?>
							</h1>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/404-1.gif" alt="brand"/>
						</div>
					</div>
					<?php //get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
</body>

