<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

    <?php include Kohana::find_file('views', 'head'); ?>

    <?php include Kohana::find_file('views', 'scripts'); ?>

    <body>

        <!-- Wrapper / Start -->
        
        <div id="wrapper">

            <!-- Header
            ================================================== -->
            <div id="top-line"></div>

                <!-- 960 Container -->
                <div class="container">

	                <?php include Kohana::find_file('views', 'header'); ?>

	                <div class="clearfix"></div>

                </div>
                <!-- 960 Container / End -->


				<?php 
				if(Request::current()->controller() != 'Login')
				{
				?>
	                <?php include Kohana::find_file('views', 'admin/menu'); ?>
	                
	                <div class="clearfix"></div>
                <?php 
				}
				else{
				?>
					<div id="top-line"></div>
				<?php 
				}
				?>