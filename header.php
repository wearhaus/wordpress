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
        </div>       
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - HEADER(INCLDUDES IMG+ BLOG NAVBAR) - - - - - - - - - - - - - - - - - - -->
		<header class="header clear" role="banner">
            <div class="blog-navbar-container">
                <div class=" title-img" id="img-container">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/img/title_nav.jpg" alt="blog-pic">
            </div> 
                
                <div class="blog-navbar" id="stickyheader">
                    <div class="container"id="blognav_container">
    				        <div class="col-md-10" >
				                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <a class="navbar-brand hidden" id ="blognavbar-logo" href="index.html">
                                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/Favicon_Black.png" alt="brand"/>
                                    </a>
                                    <ul class="nav navbar-nav navbar-left blognav blognav2" id="navbar_blog">
                                        <li>    
                                            
                                        </li>    
                                        <li class="hidden">
                                            <a href="#page-top"></a>
                                        </li>
                                        <li class="page-scroll">
                                            <a href="blog.html">Recent</a>
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
                                <div class="navbar-header">
                				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                   					    <span class="sr-only">Toggle navigation</span>
                   					    <span class="icon-bar"></span>
                 			            <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
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
            <div id="stickyalias"></div>
	   </header>
<!--  - - - - - - - - - - - - - - - - - - - - - - - - - - - -  -  !!!!!END HEADER!!!!!!! - - - - - - - - - - - - -  - - - - - - - - - - - -->
