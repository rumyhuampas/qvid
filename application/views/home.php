<?php include Kohana::find_file('views', 'qvidheader'); ?>

<!-- Content
================================================== -->
<div id="content">

    <!-- LayerSlider  -->
    <section id="layerslider-container">	
	    <div id="layerslider" style="width: 1020px; height: 450px; margin: 0 auto;">
	    	
	    	<?php
			$i = 0;
			foreach ($slides as $sl):
				if($i % 2 == 0){ ?>
			    	<!-- Slides -->
			    	<article class="ls-layer" style="slidedelay: 7000;">
				    	<img src=<?php echo URL::base().$sl->Path ?> class="ls-bg" alt="">
					    <!--<img class="ls-s4" src="images/slide-01a.png" style="top: 30px; left: 120px; slidedirection: bottom; slideoutdirection: bottom; durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;" alt=""/>-->
					    <h3 class="ls-s1 caption-color"
					    	style="top: 357px; left: 756px; 
					    	slidedirection: right; slideoutdirection: right; 
					    	durationin: 400; durationout: 1000; easingin: easeOutExpo; delayin: 1000;">
					    	<?php echo $sl->Description ?>
					    </h3>
			    <?php 
				}
				else {
			    ?>
				    <article class="ls-layer" style="slidedelay: 7000; slidedirection: top;">
					    <img src=<?php echo URL::base().$sl->Path ?> class="ls-bg" alt="">
					    <h3 class="ls-s1 caption-transparent" style="top: 357px; left: 40px;">
					    	<?php echo $sl->Description ?>
					    </h3>
			    <?php
				}
				?>
			    	</article>
			    
			    <?php 
			    $i++;
		    endforeach ?>

	    </div>					
    </section>
    <!-- LayerSlider / End -->


    <!-- 960 Container -->
    <div class="container">

	    <!-- Icon Boxes -->
	    <section class="icon-box-container">

		    <!-- Icon Box Start -->
		    <div class="one-third column">
			    <article class="icon-box">
				    <i class="icon-facetime-video"></i>
				    <h3>Alta definición</h3>
				    <p>Videos grabados con camaras <a href="http://es.gopro.com">GoPro</a> de alta definición.</p>
			    </article>
		    </div>
		    <!-- Icon Box End -->

		    <!-- Icon Box Start -->
		    <div class="one-third column">
			    <article class="icon-box">
				    <i class="icon-map-marker"></i>
				    <h3>Gran alcance</h3>
				    <p>Gracias a los quadcopters de <a href="http://www.dji-innovations.com/">dji</a> llegamos donde nadie mas puede llegar. </p>
			    </article>
		    </div>
		    <!-- Icon Box End -->

		    <!-- Icon Box Start -->
		    <div class="one-third column">
			    <article class="icon-box">
				    <i class="icon-gift"></i>
				    <h3>Ahorro</h3>
				    <p>QVid le permite ahorrar grandes cantidades de dinero contratando nuestros servicios.</p>
			    </article>
		    </div>
		    <!-- Icon Box End -->

	    </section>
	    <!-- Icon Boxes / End -->

    </div>
    <!-- 960 Container / End -->

    <!-- 960 Container -->
    <div class="container floated">
	    <div class="blank floated">

		    <!-- Video -->
		    <div class="four columns">

			    <section class="entire">
				    <h3>Quadcopter Videos</h3>
				    <p>Le ofrecemos un servicio de filmaciones aereas de alta calidad llegando donde nadie mas puede llegar.</p>
                    <p>Nuestros videos pueden tener miles de aplicaciones. Desde inspecciones de seguridad y mantenimiento para lugares de dificil acceso, filmaciones de eventos deportivos, hasta inclusive reportes de progreso de obras civiles.</p>
                    <p>Las aplicaciones son infinitas!</p>
                </section>
		    </div>
                <section class="entire">
                <div class="twelve columns">
				    <div class="video">
				    	<div class="videoloader">
				        	<?php
							if(count($videos) > 0): 
							?>
	                        	<iframe src=<?php echo $videos[0]->Path?> frameborder="0"></iframe>
	                        <?php endif ?>
	                    </div>
                   	</div>
                </div>
            </section>
			<div class="clearfix"></div>

	    </div>
    </div>
    <!-- 960 Container / End -->

    <!-- 960 Container -->
    <div class="container floated">
	    <div class="blank floated">

		    <!-- Recent Work Entire -->
		    <div class="four columns carousel-intro">

			    <section class="entire">
				    <h3>Aplicaciones diversas</h3>
				    <p>Parte de la gran variedad de aplicaciones de nuestro servicio.</p>
			    </section>

			    <div class="carousel-navi">
				    <div id="work-prev" class="arl jcarousel-prev"><i class="icon-chevron-left"></i></div>
				    <div id="work-next" class="arr jcarousel-next"><i class="icon-chevron-right"></i></div>
			    </div>
			    <div class="clearfix"></div>

		    </div>

		    <!-- jCarousel -->
		    <section class="jcarousel recent-work-jc">
			    <ul>
			    	<?php
					foreach ($services as $srv):
					?>
					<!-- Recent Work Item -->
				    <li class="four columns">
					    <a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => $srv->Link)); ?> class="portfolio-item">
						    <figure>
							    <img src=<?php echo URL::base().$srv->Path ?> alt=<?php echo $srv->FileName ?>/>
							    <figcaption class="item-description">
								    <h5><?php echo $srv->FileName ?></h5>
								    <span><?php echo $srv->Description ?></span>
							    </figcaption>
						    </figure>
					    </a>
				    </li>
				    
				    <?php endforeach ?>
			    </ul>
		    </section>
		    <!-- jCarousel / End -->

	    </div>
    </div>
    <!-- 960 Container / End -->


    <!-- 960 Container -->
    <div class="container">

	    <!-- Recent News -->
	    <div class="eight columns">
		
		    <h3 class="margin-1">Noticias recientes <span>/ Material de nuestro Blog</span></h3>

			<?php
			if(count($blogs) > 0): 
			?>
		    <div class="four columns alpha">
			    <article class="recent-blog">
				    <section class="date">
					    <span class="day"><?php echo date("d", strtotime($blogs[0]->Created_At)); ?></span>
			        	<span class="month"><?php echo helpers_db::getMonthName((int)date("m", strtotime($blogs[0]->Created_At))); ?></span>
				    </section>
				    <h4><a href=<?php echo URL::base().Route::get('default')->uri(
			        	array('controller' => 'blog',
			        	'action' => 'read',
						'id' => $blogs[0]->Id)); ?> ><?php echo $blogs[0]->Title; ?></a></h4>
				    <p><span class="cut"><?php echo substr($blogs[0]->Text, 0, 100).'...'; ?></span></p>
			    </article>
		    </div>
				<?php if(count($blogs) > 1): 
				?>
			    <div class="four columns omega">
				    <article class="recent-blog">
					    <section class="date">
						    <span class="day"><?php echo date("d", strtotime($blogs[1]->Created_At)); ?></span>
			        		<span class="month"><?php echo helpers_db::getMonthName((int)date("m", strtotime($blogs[1]->Created_At))); ?></span>
					    </section>
					    <h4><a href=<?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'blog',
						        	'action' => 'read',
									'id' => $blogs[1]->Id)); ?> ><?php echo $blogs[1]->Title; ?></a></h4>
					    <p><span class="cut"><?php echo substr($blogs[1]->Text, 0, 100).'...'; ?></span></p>
				    </article>
			    </div>
			    <?php endif ?>
		    <?php endif ?>

	    </div>

	    <!-- Testimonials -->
	    <div class="eight columns">

		    <h3 class="margin-1">Testimonios <span>/ Que dicen nuestros clientes</span></h3>
			
		    <!-- Testimonial Rotator -->
		    <section class="flexslider testimonial-slider">
			    <ul class="slides">
			    	<?php foreach($testimonials as $tmonial): ?>
			    		
				    <li class="testimonial">
					    <div class="testimonials"><?php echo $tmonial->Text ?></div>
					    <div class="testimonials-bg"></div>
					    <div class="testimonials-author"><?php echo $tmonial->Name ?>, <span><?php echo $tmonial->Name2 ?></span></div>
				    </li>
				    
				    <?php endforeach ?>
			    </ul>
		    </section>
		    <!-- Testomonial Rotator / End -->

	    </div>

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->


<?php include Kohana::find_file('views', 'footer'); ?>