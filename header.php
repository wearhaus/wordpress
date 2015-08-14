<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon2.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/favicon2.png" rel="apple-touch-icon-precomposed">

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

        
        <!--  CUSTOM FONT LATO -->
    	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	</head>
	<body <?php body_class(); ?>>
    <!-- GENERAL NAVBAR ONLY-->
    <!-- Don't put navbar class into a bootstrap container-->
        <div class="navbar navbar-default">        
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img alt="Brand" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_white_transparent_high_res.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li class="page-scroll">
                            <a href="/">Our Story</a>
                        </li>
                        <li class="page-scroll">
                            <a href="/">Blog</a>
                        </li>
                        <li class="page-scroll">
                            <a href="www.google.com">Mailing List</a>
                        </li>
                        <li class="page-scroll">
                            <a href="www.wearhaus.zendesk.com">Support</a>
                        </li>
                        <li class="page-scroll" id="order_now">
                            <a href="store.wearhaus.com" id="order_now_link">Order Now</a>
                        </li>
                    </ul>
                </div>
            <!-- /.navbar-collapse -->
            </div>
        </div>       
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - HEADER(INCLDUDES IMG+ BLOG NAVBAR) - - - - - - - - - - - - - - - - - - -->
		<header class="header clear" role="banner">
            <div class="blog-navbar-container">
                
                <div class=" title-img" id="img-container">
                    <a href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/title_nav.jpg" alt="blog-pic">
                    </a>
                </div> 
                
                <div class="blog-navbar" id="stickyheader">
                    <div class="container-fluid"id="blognav_container">
                        <div class="row-fluid">
    				        <div class="col-md-8" >
				                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <a class="navbar-brand hidden" id ="blognavbar-logo" href="<?php bloginfo('url');?>">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Favicon_Black.png" alt="brand"/>
                                    </a>
                                    <ul class="nav navbar-nav navbar-left blognav blognav2" id="navbar_blog">
                                        <li>    
                                            
                                        </li>    
                                        <li class="hidden">
                                            <a href="#page-top"></a>
                                        </li>
                                        <li class="page-scroll">
                                            <?php $category_id = get_cat_ID( 'Artist Interviews' ); ?>
                                            <a href="<?php echo get_category_link( $category_id ); ?> ">Artists</a>
                                        </li>
                                        <li class="page-scroll">
                                            <?php $category_id = get_cat_ID( 'Events' ); ?>
                                            <a href="<?php echo get_category_link( $category_id ); ?>">Events</a>
                                        </li>
                                        <li class="page-scroll">
                                            <?php $category_id = get_cat_ID( 'Product Updates' ); ?>
                                            <a href="<?php echo get_category_link( $category_id ); ?>">Product Updates</a>
                                        </li>
                                        <li class="page-scroll">
                                            <a href="#">Archives</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>    
                            
                            <!-- searchbar -->
                            <div class="col-md-2" id ="searchbar">
                                <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                            </div>
                            <!-- /searchbar -->
                        </div>           
                    </div> 
                </div>
            </div>
            <div id="stickyalias"></div>
	   </header>
<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -  !!!!!END HEADER!!!!!!! - - - - - - - - - - - - -  - - - - - - - - - - - -->
