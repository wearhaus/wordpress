<?php get_header(); ?>

	<div class="container-fluid">
		<main role="main">
		<!-- section -->
			<section class="featured_articles">
				<h1><?php //_e( 'Latest Posts', 'wearhaus' ); ?></h1>
				<div class="large-img">

				</div>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>

			</section>
		<!-- /section -->
		</main>

		<?php //get_sidebar(); ?> 
	</div>
<?php get_footer(); ?>
