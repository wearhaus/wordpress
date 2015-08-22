<?php get_header(); ?>
<body>
	<div class="page-main" id="body-main">
		<div class="container-fluid">
				<div class="row-fluid">
					<div class="col-md-8" id="post_content">
						<div id="search_content">
							<h1 id="post_title">
								<?php _e( 'Author Archives for ', 'html5blank' ); echo get_the_author(); ?>
							</h1>
							
							<?php get_template_part('loop'); ?>
							
							<?php get_template_part('pagination'); ?>
						</div>
					</div>
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
</body>
