<?php get_header(); ?>

	<div class="container-fluid" id="body-main">
		<main role="main">
		<!-- section -->
			<section class="featured_articles">
			<div class="container-fluid">
				<div class="row-fluid">
				<h1><?php //_e( 'Latest Posts', 'wearhaus' ); ?></h1>
				<div class="large-img">

				</div>

				<?php get_template_part('loop'); ?>

				<?php get_template_part('pagination'); ?>
			</div class="row-fluid">
			</div>
			</section>
		<!-- /section -->
		</main>

		<?php get_sidebar(); ?> 
	</div>
<?php get_footer(); ?>
