<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/logo_white_transparent_high_res.png" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        
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

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="container">
					<div class="row">
					<div class="col-md-12">
					<!-- GENERAL NAV -->
					<nav class="navbar navbar-default navbar-fixed-top">
        			
        				<div class="container">
            			<!-- Brand and toggle get grouped for better mobile display -->
            				<div class="navbar-header">
                				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   					<span class="sr-only">Toggle navigation</span>
                   					<span class="icon-bar"></span>
                 				   	<span class="icon-bar"></span>
                    				<span class="icon-bar"></span>
                				</button>
                				<a class="navbar-brand" href="index.html">
                					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_white_transparent_high_res.png" alt="brand"/>
                				</a>
            				</div>

            			<!-- Collect the nav links, forms, and other content for toggling -->
            				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                				<ul class="nav navbar-nav navbar-right">
                  				  <li class="hidden">
                        			<a href="#page-top"></a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="blog.html">Blog</a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="contact.html">Contact</a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="mailinglist.html">Mailing List</a>
                    				</li>
                    				<li>
                        				<a href="store.html">Buy Now!</a>
                    				</li>
                				</ul>
            				</div>
            				<!-- /.navbar-collapse -->
        				</div>
        			
        			<!-- /.container-fluid -->
    				</nav>
    			</div>
    			</div>
    			</div>
    			<div class="blog-navbar">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-12">
					<!-- /GENERAL NAV -->
					<nav class="blog-navbar">
						<row class="col-md-12">
						<div class="container">
							<div class="navbar-header">
                				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   					<span class="sr-only">Toggle navigation</span>
                   					<span class="icon-bar"></span>
                 				   	<span class="icon-bar"></span>
                    				<span class="icon-bar"></span>
                				</button>
                				<a class="navbar-brand" href="index.html">
                					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_white_transparent_high_res.png" alt="brand"/>
                				</a>
            				</div>

            			<!-- Collect the nav links, forms, and other content for toggling -->
            				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                				<ul class="nav navbar-nav navbar-right">
                  				  	<li class="hidden">
                        				<a href="#page-top"></a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="blog.html">Recenet</a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="contact.html">Artists</a>
                    				</li>
                    				<li class="page-scroll">
                        				<a href="mailinglist.html">Product Updates</a>
                    				</li>
                    				<li>
                        				<a href="store.html">Events</a>
                    				</li>
                				</ul>
            				</div>
						</div>
					</row>
					</nav>
				</div>
			</div>
				</div>
			</header>
			<!-- /header -->
