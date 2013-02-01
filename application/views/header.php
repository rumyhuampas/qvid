<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <head>

        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
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

		                <!-- Logo -->
		                <div class="ten columns">
			                <div id="logo">
				                <h1><a href="#"><img src=<?php echo URL::base()."/assets/images/logo.png" ?> alt="QVid" /></a></h1>
				                <div id="tagline">Quadcopter Videos</div>
				                <div class="clearfix"></div>
			                </div>
		                </div>

		                <!-- Social / Contact -->
		                <div class="six columns">

			                <!-- Social Icons -->
			                <ul class="social-icons">
				                <li class="twitter"><a href="#" title="Twitter">Twitter</a></li>
				                <li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
				                <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
				                <li class="linkedin"><a href="#" title="LinkedIn">LinkedIn</a></li>
				                <li class="rss"><a href="#" title="RSS">RSS</a></li>
			                </ul>

			                <div class="clearfix"></div>

			                <!-- Contact Details -->
			                <div class="contact-details">Contacto: (0381) 15-466-4218</div>

			                <div class="clearfix"></div>

			                <!-- Search -->
			                <nav class="top-search">
				                <form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
					                <button class="search-btn"></button>
					                <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
				                </form>
			                </nav>

		                </div>
	                </header>
	                <!-- Header / End -->

	                <div class="clearfix"></div>

                </div>
                <!-- 960 Container / End -->


                <!-- Navigation
                ================================================== -->
                <nav id="navigation" class="style-1">

                <div class="left-corner"></div>
                <div class="right-corner"></div>

                <ul class="menu" id="responsive">

	                <li><a href=<?php echo URL::base(); ?> id="1" menuid=<?php echo $menuid; ?>><i class="halflings white home"></i> Inicio</a></li>

	                <li><a href="#" id="2" menuid=<?php echo $menuid; ?>><i class="halflings white file"></i> Información</a>
		                <ul>
					        <li><a href=<?php echo URL::base().'index.php/about/index'; ?> >Acerca de QVid</a></li>
					        <li><a href=<?php echo URL::base().'index.php/team/index'; ?> >Nuestro equipo</a></li>
		                </ul>
	                </li>

	                <li><a href="#" id="3" menuid=<?php echo $menuid; ?>><i class="halflings white cog"></i> Servicios</a>
		                <!-- Second Level / Start -->
		                <ul>
			                <li><a href=<?php echo URL::base().'index.php/servsecurity/index'; ?> >Seguridad</a></li>
			                <li><a href=<?php echo URL::base().'index.php/servevent/index'; ?> >Eventos deportivos</a></li>
			                <li><a href=<?php echo URL::base().'index.php/servcinema/index'; ?> >Cine/Entretenimiento</a></li>
			                <li><a href="typography.html">Seguimiento de obras</a></li>
                            <li><a href="typography.html">Mensura</a></li>
                            <li><a href="typography.html">Prevencion de catastrofes</a></li>
                            <li><a href="typography.html">Control aereo</a></li>
                            <li><a href="typography.html">Vectorizacion de mapas</a></li>

		                </ul>
		                <!-- Second Level / End -->
	                </li>

	                <li><a href=<?php echo URL::base().'index.php/blog/index'; ?> id="4" menuid=<?php echo $menuid; ?>><i class="halflings white pencil"></i> Blog</a>
	                </li>

	                <li><a href=<?php echo URL::base().'index.php/contact/index'; ?> id="5" menuid=<?php echo $menuid; ?>><i class="halflings white envelope"></i> Contacto</a></li>

                </ul>
                </nav>
                <div class="clearfix"></div>