<?php 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST');  
	headers_list();
	//Featured Article 1
	$original_query = $wp_query;
	$wp_query = null;
	$args=array('posts_per_page'=>1, 'tag' => 'featured_1');
	$wp_query = new WP_Query( $args );
	if ( have_posts() ) :
					    while (have_posts()) : the_post();
	$title_1 = get_the_title();
	$url_1 = get_the_permalink(); 

	if (function_exists('has_post_thumbnail')) {
	    if ( has_post_thumbnail() ) {
	    	$thumb_id = get_post_thumbnail_id();


			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);

			$thumb_url_1 = $thumb_url_array[0];
	    }
	}
	endwhile;
	endif;
	$wp_query = null;
	$wp_query = $original_query;

	//Featured Article 2
	$original_query = $wp_query;
	$wp_query = null;
	$args=array('posts_per_page'=>1, 'tag' => 'featured_2');
	$wp_query = new WP_Query( $args );
	if ( have_posts() ) :
					    while (have_posts()) : the_post();
	$title_2 = get_the_title();
	$url_2 = get_the_permalink(); 
	if (function_exists('has_post_thumbnail')) {
	    if ( has_post_thumbnail() ) {
	    	$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url_2 = $thumb_url_array[0];
	    }
	}
	endwhile;
	endif;
	$wp_query = null;
	$wp_query = $original_query;
	//Featured Article 3
	$original_query = $wp_query;
	$wp_query = null;
	$args=array('posts_per_page'=>1, 'tag' => 'featured_3');
	$wp_query = new WP_Query( $args );
	if ( have_posts() ) :
					    while (have_posts()) : the_post();
	$title_3 = get_the_title();
	$url_3 = get_the_permalink(); 
	if (function_exists('has_post_thumbnail')) {
	    if ( has_post_thumbnail() ) {
	    	$thumb_id = get_post_thumbnail_id();
			$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
			$thumb_url_3 = $thumb_url_array[0];
	    }
	}
	endwhile;
	endif;
	$wp_query = null;
	$wp_query = $original_query;

//Creating JSON object
$json = json_encode(array(

     "featured_1" => array(

        "title" => $title_1,
        "url" => $url_1,
        "img_url" => $thumb_url_1
     ),

     "featured_2" => array(

        "title" => $title_2,
        "url" => $url_2,
        "img_url" => $thumb_url_2
     ),

     "featured_3" => array(

        "title" => $title_3,
        "url" => $url_3,
        "img_url" => $thumb_url_3
     )
));

echo $json;


?>