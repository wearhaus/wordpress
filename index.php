<?php get_header(); ?>

	<div class="container-fluid" id="body-main">
		<div class="row-fluid" id="feature-container">
			<div class="col-md-7" id="first-feature">

			</div>
			<div class="col-md-4" id="second-feature">
			
			</div>
			<div class="col-md-4" id="third-feature">
			
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
			<?php get_sidebar()?>
		<!-- /section -->
		</main>
<?php get_footer(); ?>

<!-- - - - - - - - - - - - - - - - - - - - - - - - - -  INCLUSION OF ARTICLE STUFF- - - - - - - - - - - - - - - - - - - - - - - - -->

<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 		
-->