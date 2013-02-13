<?php include Kohana::find_file('views', 'header'); ?>

<!-- Content
================================================== -->
<div id="content">


    <!-- 960 Container -->
    <div class="container floated">

	    <div class="sixteen floated page-title">

		    <h2>QVid Blog</h2>

		    <nav id="breadcrumbs">
			    <ul>
				    <li>Usted esta aqui:</li>
				    <li><a href=<?php echo URL::base(); ?> >Inicio</a></li>
				    <li>Blog</li>
			    </ul>
		    </nav>

	    </div>

    </div>
    <!-- 960 Container / End -->


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Page Content -->
	    <div class="eleven floated">

			<?php $blog = helpers_db::getBlog($blogid); 
				if ($blog): 
					$b=$blog[0]; ?>
					<article class="post">
					<?php $bMedia = helpers_db::getBlogResources($b['id']);
					if(count($bMedia) > 0)
					{
					?>
						<section class="flexslider">
							<ul class="slides post-img">
							<?php foreach ($bMedia as $bMed): ?> 
							    <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
							    	<a href=<?php echo URL::base().$bMed['path'] ?> rel="fancybox-gallery" title=<?php echo $bMed['filename'] ?>>
							    		<?php if($bMed['resource_type'] == 'PICTURE'){ ?>
							    			<img src=<?php echo URL::base().$bMed['path'] ?> alt="">
							    		<?php 
										}
										else
										{?>
											<div class="video"><iframe width="560" height="315" src=<?php echo $bMed['path']?> frameborder="0"></iframe></div>	
										<?php 
										} 
										?>
							    	</a>
							    </li>
							<?php endforeach ?>
							</ul>
							
							<!--FLEX SLIDER -->
							<?php 
							if(count($bMedia) > 1)
							{
							?>
						    	<ul class="flex-direction-nav">
						    		<li><a class="flex-prev" href="#">Anterior</a></li>
						    		<li><a class="flex-next" href="#">Siguiente</a></li>
						    	</ul>
						    <?php 
						    }
						    ?>
				    	</section>
			    	<?php
					}
			    	?>
		    
                    <section class="date">
				        <span class="day"><?php echo $b['day']; ?></span>
				        <span class="month"><?php echo helpers_db::getMonthName($b['month']); ?></span>
			        </section>

                    <section class="post-content">

				        <header class="meta">
					        <h2><a href="blog-post.html"><?php echo $b['title']; ?></a></h2>
					        <span><i class="halflings user"></i>Por <a href="#"><?php echo $b['username']; ?></a></span>
					        <span><i class="halflings tag"></i><?php echo $b['tags']; ?></span>
				        </header>

				        <p><?php echo $b['text']; ?></p>
			
			        </section>
                </article>
                
                <!-- About Author -->
                <section class="about-author">
					<img src=<?php echo URL::base().$b['userimage']?> alt="">
					<div class="about-description">
						<h4><?php echo $b['username']?></h4>
						<p><?php echo $b['userdesc']?></p>
					</div>
				</section> 
                
                <div class="line"></div>
			<?php endif ?>

	    </div>
	    <!-- Content / End -->

		<!-- Sidebar -->
	    <?php include "blogsidebar.php"; ?>

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include Kohana::find_file('views', 'footer'); ?>