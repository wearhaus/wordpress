<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');  
	headers_list();

	$currentFeature = 1;
	$currentPost = 1;
	$featureCount = 7;
	$return = array();

	while ($currentFeature <= $featureCount) {
		$original_query = $wp_query;
		$wp_query = null;
		$args=array('posts_per_page'=>3, 'tag' => 'featured_' . $currentFeature);
		$wp_query = new WP_Query( $args );

		if ( have_posts() ) : while (have_posts()) : the_post();

		$title = get_the_title();
		$url = get_the_permalink(); 

		if (function_exists('has_post_thumbnail')) {
		    if ( has_post_thumbnail() ) {
		    	$thumb_id = get_post_thumbnail_id();
				$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
				$thumb_url = $thumb_url_array[0];
		    }
		}

		$return["featured_" . $currentPost] = array(
			"title" => $title,
			"url" => $url,
			"img_url" => $thumb_url
		);

		$currentPost++;

		endwhile;
		endif;

		$currentFeature++;
	};

//Creating JSON object
$json = json_encode($return);

echo $json;


?>