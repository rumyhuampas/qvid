<?php include Kohana::find_file('views', 'qvidheader'); ?>

<!-- Content
================================================== -->
<div id="content">


    <?php include Kohana::find_file('views', 'blogheader'); ?>


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Page Content -->
	    <div class="eleven floated">

			<?php foreach ($blogs as $b): ?>
					<article class="post">
						<?php $bMedia = ORM::factory('mediaresource')
							->join('blogmedia')->on('mediaresource.Id', '=', 'blogmedia.mediaresource_id')
							->where('blogmedia.Blog_Id', '=', $b->Id)->and_where('mediaresource.resource_type', '=', 'PICTURE')
							->and_where('blogmedia.published', '=', 'T')->find_all();
						if(count($bMedia) > 0)
						{
						?>
							<section class="flexslider">
								<ul class="slides post-img">
								<?php foreach ($bMedia as $bMed):?> 
								    <li style="width: 100%; float: left; margin-right: -100%; position: relative; display: none;" class="">
								    	<a href=<?php echo URL::base().$bMed->Path ?> rel="fancybox-gallery" title=<?php echo $bMed->FileName ?>>
								    		<img src=<?php echo URL::base().$bMed->Path ?> alt="">
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
						 	$bVids = ORM::factory('mediaresource')
								->join('blogmedia')->on('mediaresource.Id', '=', 'blogmedia.mediaresource_id')
								->where('blogmedia.Blog_Id', '=', $b->Id)->and_where('mediaresource.resource_type', '=', 'VIDEO')
								->and_where('blogmedia.published', '=', 'T')->find_all();
							if(count($bVids) > 0)
							{?>
							    	<a href=<?php echo URL::base().$bVids[0]->Path ?> rel="fancybox-gallery" title=<?php echo $bVids[0]->FileName ?>>
						    			<div class="video"><iframe width="560" height="315" src=<?php echo $bVids[0]->Path?> frameborder="0"></iframe></div>
							    	</a>
							<?php
							}
						}
				    	?>
			    
	                    <section class="date">
					        <span class="day"><?php echo date("d", strtotime($b->Created_At)); ?></span>
					        <span class="month"><?php echo helpers_db::getMonthName((int)date("m", strtotime($b->Created_At))); ?></span>
				        </section>
	
	                    <section class="post-content">
	
					        <header class="meta">
						        <h2><a href=<?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'blog',
						        	'action' => 'read',
									'id' => $b->Id)); ?> ><?php echo $b->Title; ?></a></h2>
								<?php $user = ORM::factory('user', $b->User_Id)?>
						        <span><i class="halflings user"></i>Por <a href="#"><?php echo $user->Name ?></a></span>
						        <span><i class="halflings tag"></i><?php echo $b->Tags; ?></span>
					        </header>
	
					        <p><?php echo substr($b->Text, 0, 250).'...'; ?></p>
	
					        <a href=<?php echo URL::base().Route::get('default')->uri(
						        	array('controller' => 'blog',
						        	'action' => 'read',
									'id' => $b->Id)); ?> class="button color">Leer mas</a>
				
				        </section>
	                </article>
	                
	                <div class="line"></div>
				<?php endforeach ?>

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