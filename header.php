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
		<!--<meta name="description" content="<?php bloginfo('description'); ?>">-->

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
		<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
    <!-- GENERAL NAVBAR ONLY-->
    <!-- Don't put navbar class into a bootstrap container-->
    <nav class="navbar navbar-collapse navbar-default" id="gennav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://www.wearhaus.com"><img alt="Brand" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_white_transparent_high_res.png"></a>
                <div id="navbar-order-now-link-mobile-container">
                    <a href="http://store.wearhaus.com" id="order_now_link_mobile">
                        Order Now
                    </a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://www.wearhaus.com/ourstory">Our Story</a>
                    </li>
                    <li class="page-scroll">
                        <a href="http://blog.wearhaus.com">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="" data-target="#mailingListModal" data-toggle="modal">Mailing List</a>
                    </li>
                    <li class="page-scroll">
                        <a href="https://wearhaus.zendesk.com/hc/en-us" target="_blank">Support</a>
                    </li>
                    <li class="page-scroll" id="order_now">
                        <a href="http://store.wearhaus.com" id="order_now_link">Order Now</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right collapse-blog">
                    <li class="page-scroll">
                        <a href="<?php bloginfo('url');?> ">Blog Home</a>
                    </li>
                    <li class="page-scroll">
                        <?php $category_id = get_cat_ID( 'Artist Interviews' ); ?>
                        <a href="<?php echo get_category_link( $category_id ); ?> ">Artists</a>
                    </li>
                    <li class="page-scroll">
                        <?php $category_id = get_cat_ID( 'Fun & Events' ); ?>
                        <a href="<?php echo get_category_link( 3 ); ?>">Fun & Events</a>
                    </li>
                    <li class="page-scroll">
                        <?php $category_id = get_cat_ID( 'Product Updates' ); ?>
                        <a href="<?php echo get_category_link( $category_id ); ?>">Product Updates</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- mailing list modal -->
    <div class="modal fade" id="mailingListModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-body">
                    <!-- Mailchimp embedded mailing list form -->
                    <div id="mc_embed_signup">
                        <form action="//wearhaus.us8.list-manage.com/subscribe/post?u=cb896efdc02672d15109af76b&amp;id=6a705d143f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                           <div id="mc_embed_signup_scroll">
                                <h2>SUBSCRIBE TO OUR MAILING LIST</h2>
                                <div class="indicates-required">
                                    <span class="asterisk">*</span> indicates required
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                                    </label>
                                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-FNAME">First Name </label>
                                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group">
                                    <label for="mce-LNAME">Last Name </label>
                                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                                </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                               <div style="position: absolute; left: -5000px;"><input type="text" name="b_cb896efdc02672d15109af76b_6a705d143f" tabindex="-1" value=""></div>
                               <div class="clear">
                                    <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
                               </div>
                           </div>
                        </form>
                    </div>
              </div>
            </div>
          </div>
    </div>       
<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - HEADER(INCLDUDES IMG+ BLOG NAVBAR) - - - - - - - - - - - - - - - - - - -->
		<header class="header clear" role="banner">
            <div class="blog-navbar-container">
                
                <div class=" title-img" id="img-container-1">

                    <a href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/title_nav_1.png" alt="blog-pic">
                    </a>
                </div>
                <div class=" title-img" id="img-container-2">
                    <a href="<?php bloginfo('url');?>">

                    <a href="<?php bloginfo('url');?>">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/title_nav_1.png" alt="blog-pic">
                    </a>
                </div>
                <div class=" title-img" id="img-container-2">
                    <a href="<?php bloginfo('url');?>">

                        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/mobile-banner.png" alt="blog-pic">
                    </a>
                </div> 
                
                <div class="blog-navbar stickyheader">
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
                                            <?php $category_id = get_cat_ID( 'Fun & Events' ); ?>
                                            <a href="<?php echo get_category_link(3); ?>">Fun & Events</a>
                                        </li>
                                        <li class="page-scroll">
                                            <?php $category_id = get_cat_ID( 'Product Updates' ); ?>
                                            <a href="<?php echo get_category_link( $category_id ); ?>">Product Updates</a>
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
