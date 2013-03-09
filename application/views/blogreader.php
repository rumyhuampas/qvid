<?php include Kohana::find_file('views', 'qvidheader'); ?>

<!-- Content
================================================== -->
<div id="content">


    <?php include Kohana::find_file('views', 'blogheader'); ?>


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Page Content -->
	    <div class="eleven floated">
			<article class="post">
				<?php $bMedia = ORM::factory('mediaresource')
					->join('blogmedia')->on('mediaresource.Id', '=', 'blogmedia.mediaresource_id')
					->where('blogmedia.Blog_Id', '=', $blog->Id)->and_where('mediaresource.resource_type', '=', 'PICTURE')
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
			 	$bVids = ORM::factory('mediaresource')
					->join('blogmedia')->on('mediaresource.Id', '=', 'blogmedia.mediaresource_id')
					->where('blogmedia.Blog_Id', '=', $blog->Id)->and_where('mediaresource.resource_type', '=', 'VIDEO')
					->and_where('blogmedia.published', '=', 'T')->find_all();
				foreach ($bVids as $bVid) 
				{?>
		    		<div class="video"><iframe width="560" height="315" src=<?php echo $bVid->Path?> frameborder="0"></iframe></div>
			    	<br/>
				<?php
				}
		    	?>
	    
                <section class="date">
			        <span class="day"><?php echo date("d", strtotime($blog->Created_At)); ?></span>
			        <span class="month"><?php echo helpers_db::getMonthName((int)date("m", strtotime($blog->Created_At))); ?></span>
		        </section>

                <section class="post-content">

			        <header class="meta">
				        <h2><a href=<?php echo URL::base().Route::get('default')->uri(
				        	array('controller' => 'blog',
				        	'action' => 'read',
							'id' => $blog->Id)); ?> ><?php echo $blog->Title; ?></a></h2>
						<?php $user = ORM::factory('user', $blog->User_Id)?>
				        <span><i class="halflings user"></i>Por <a href="#"><?php echo $user->Name ?></a></span>
				        <span><i class="halflings tag"></i><?php echo $blog->Tags; ?></span>
			        </header>

			        <p><?php echo $blog->Text; ?></p>
		
		        </section>
            </article>
        
        <!-- About Author -->
        <section class="about-author">
        	<?php $userImg = ORM::factory('mediaresource', $user->Image_Id); ?>
			<img src=<?php echo URL::base().$userImg->Path; ?> alt="">
			<div class="about-description">
				<h4><?php echo $user->Name?></h4>
				<p><?php echo $user->Description?></p>
			</div>
		</section>
		
		<article class="post">
			<a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'blog')); ?> class="button color">Volver al blog</a>
		</article> 
        
        <div class="line"></div>
	    </div>
	    <!-- Content / End -->

		<!-- Sidebar -->
	    <?php include "blogsidebar.php"; ?>

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include Kohana::find_file('views', 'footer'); ?>