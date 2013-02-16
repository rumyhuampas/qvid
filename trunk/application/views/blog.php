<?php include Kohana::find_file('views', 'header'); ?>

<!-- Content
================================================== -->
<div id="content">


    <?php include Kohana::find_file('views', 'blogheader'); ?>


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Page Content -->
	    <div class="eleven floated">

			<?php
				if($userid == -1){
					if($tag == ''){ 
						$blogs = helpers_db::getBlogs();
					}
					else{
						$blogs = helpers_db::getTagBlogs($tag);
					}
				}
				else{
					$blogs = helpers_db::getUserBlogs($userid);
				} 
				if ($blogs):
				foreach ($blogs as $b): ?>
					<article class="post">
						<?php $bMedia = helpers_db::getBlogPictures($b['id']);
						if(count($bMedia) > 0)
						{
						?>
							<section class="flexslider">
								<ul class="slides post-img">
								<?php foreach ($bMedia as $bMed):?> 
								    <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
								    	<a href=<?php echo URL::base().$bMed['path'] ?> rel="fancybox-gallery" title=<?php echo $bMed['filename'] ?>>
								    		<img src=<?php echo URL::base().$bMed['path'] ?> alt="">
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
						else{
						 	$bVids = helpers_db::getBlogVideos($b['id']);
							if(count($bVids) > 0)
							{?>
							    	<a href=<?php echo URL::base().$bVids[0]['path'] ?> rel="fancybox-gallery" title=<?php echo $bVids[0]['filename'] ?>>
						    			<div class="video"><iframe width="560" height="315" src=<?php echo $bVids[0]['path']?> frameborder="0"></iframe></div>
							    	</a>
							<?php
							}
						}
				    	?>
			    
	                    <section class="date">
					        <span class="day"><?php echo $b['day']; ?></span>
					        <span class="month"><?php echo helpers_db::getMonthName($b['month']); ?></span>
				        </section>
	
	                    <section class="post-content">
	
					        <header class="meta">
						        <h2><a href=<?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'blog',
						        	'action' => 'read',
									'id' => $b['id'])); ?> ><?php echo $b['title']; ?></a></h2>
						        <span><i class="halflings user"></i>Por <a href="#"><?php echo $b['username']; ?></a></span>
						        <span><i class="halflings tag"></i><?php echo $b['tags']; ?></span>
					        </header>
	
					        <p><?php echo $b['text']; ?></p>
	
					        <a href=<?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'blog',
						        	'action' => 'read',
									'id' => $b['id'])); ?> class="button color">Leer mas</a>
				
				        </section>
	                </article>
	                
	                <div class="line"></div>
				<?php endforeach ?>
			<?php endif ?>

		    <!-- Pagination -->
		    <nav class="pagination">
			    <ul>
				    <li><a href="#" class="current">1</a></li>
				    <li><a href="#">2</a></li>
				    <li><a href="#">Next</a></li>
			    </ul>
			    <div class="clearfix"></div>
		    </nav>

	    </div>
	    <!-- Content / End -->


	    <!-- Sidebar -->
	    <?php include "blogsidebar.php"; ?>

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include Kohana::find_file('views', 'footer'); ?>