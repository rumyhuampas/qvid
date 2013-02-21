<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
        <title><?php echo $title; ?></title>

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link href=<?php echo URL::base()."/assets/css/style.css" ?> rel="stylesheet" type="text/css" />
        <link href=<?php echo URL::base()."/assets/css/colors/blue.css" ?> rel="stylesheet" type="text/css" id="colors" />

        <!--[if lt IE 9]>
	        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Java Script
        ================================================== 

        <script src='../../google_analytics_auto.js'></script>   -->

    </head>

    <script src=<?php echo URL::base()."/scripts/jquery.min.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery-ui.min.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.flexslider.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.selectnav.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.twitter.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.modernizr.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.easing.1.3.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.contact.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.isotope.min.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.jcarousel.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.fancybox.min.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/jquery.layerslider.min.js" ?> type="text/javascript"></script>
    <script src=<?php echo URL::base()."/scripts/custom.js" ?> type="text/javascript"></script>

    <body>

        <!-- Wrapper / Start -->
        
        <div id="wrapper">

            <!-- Header
            ================================================== -->
            <div id="top-line"></div>

                <!-- 960 Container -->
                <div class="container">

	                <!-- Header -->
	                <header id="header">
	                
	                	<?php 
	                	$qvidSlogan = ORM::factory('pagedata')->where('tag', '=', 'SLOGAN')->and_where('published', '=', 'T')->find(); 
	                	$qvidPhone = ORM::factory('pagedata')->where('tag', '=', 'PHONE')->and_where('published', '=', 'T')->find();
	                	$qvidAddress = ORM::factory('pagedata')->where('tag', '=', 'ADDRESS')->and_where('published', '=', 'T')->find();
						$qvidEmail = ORM::factory('pagedata')->where('tag', '=', 'EMAIL')->and_where('published', '=', 'T')->find();
						$qvidFacebook = ORM::factory('pagedata')->where('tag', '=', 'FACEBOOK')->and_where('published', '=', 'T')->find();
	                	?>

		                <!-- Logo -->
		                <div class="ten columns">
			                <div id="logo">
				                <h1><a href=<?php echo URL::base(); ?>><img src=<?php echo URL::base()."/assets/images/logo.png" ?> alt="QVid" /></a></h1>
				                <div id="tagline"><?php echo $qvidSlogan->Text?></div>
				                <div class="clearfix"></div>
			                </div>
		                </div>

		                <!-- Social / Contact -->
		                <div class="six columns">

			                <!-- Social Icons -->
			                <ul class="social-icons">
				                <li class="twitter"><a href="#" title="Twitter">Twitter</a></li>
				                <li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
				                <!-- <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
				                <li class="linkedin"><a href="#" title="LinkedIn">LinkedIn</a></li>
				                <li class="rss"><a href="#" title="RSS">RSS</a></li> -->
				                
			                </ul>

			                <div class="clearfix"></div>

			                <!-- Contact Details -->
			                <div class="contact-details">Contacto: <?php echo $qvidPhone->Text ?> </div>

			                <div class="clearfix"></div>

			                <!-- Search -->
			                <nav class="top-search">
			                	<?php 
			                		echo Form::open('search/index', array('method' => 'POST'));
			                		echo Form::button('searchbutton', '', array('type' => "submit", 'class' => "search-btn"));
									echo Form::input('searchfield', 'Buscar', array('class' => "search-field", 'onblur' => "if(this.value=='')this.value='Buscar';", 'onfocus' => "if(this.value=='Buscar')this.value='';"));
									echo Form::close(); 
			                	?>
				                <!--<form action= <?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'search',
						        	'action' => 'index',
									'id' => 'test')); ?> method="get">					                
					                <button class="search-btn"></button>
					                <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
				                </form>-->
			                </nav>

		                </div>
	                </header>
	                <!-- Header / End -->

	                <div class="clearfix"></div>

                </div>
                <!-- 960 Container / End -->

                <div id="top-line"></div>