<?php include 'header.php'; ?>

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

			<?php $blogs = helpers_db::getblogs(); 
				if ($blogs):
				foreach ($blogs as $b): ?>
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
	
					        <a href="blog-post.html" class="button color">Leer mas</a>
				
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
	    <div class="four floated sidebar right">
		    <aside class="sidebar">

			    <!-- Search -->
			    <nav class="widget-search">
				    <form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
					    <button class="search-btn-widget"></button>
					    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
				    </form>
			    </nav>
			    <div class="clearfix"></div>

			    <!-- Categories -->
			    <nav class="widget">
				    <h4>Top Bloggers</h4>
				    <ul class="categories">
				    <?php $bloggers = helpers_db::getTopBloggers();
					foreach($bloggers as $bggs): 
				    ?>
					    <li><a href="#"><?php echo $bggs['username'] ?> - <?php echo $bggs['usercount'] ?> blogs</a></li>
					<?php endforeach ?>
				    </ul>
			    </nav>

			    <!-- Tags -->
			    <div class="widget">
				    <h4>Tags</h4>
				    <nav class="tags">
			    	<?php $tags = helpers_db::getTopTags();
					foreach($tags as $ts): 
				    ?>
					    <a href="#"><?php echo $ts['tags'] ?></a>
					<?php endforeach ?>
				    </nav>
			    </div>

			    <!-- Archives -->
			    <nav class="widget">
				    <h4>Archives</h4>
				    <ul class="categories">
					    <li><a href="#">October 2012</a></li>
					    <li><a href="#">November 2012</a></li>
					    <li><a href="#">December 2012</a></li>
				    </ul>
			    </nav>

			    <!-- Tweets-->
			    <div class="widget">
				    <h4>Twitter</h4>
				    <ul id="twitter-blog"></ul>
					    <script type="text/javascript">
					        jQuery(document).ready(function ($) {
					            $.getJSON('http://api.twitter.com/1/statuses/user_timeline/purethemes.json?count=2&amp;callback=?', function (tweets) {
					                $("#twitter-blog").html(tz_format_twitter(tweets));
					            });
					        });
					    </script>
				    <div class="clearfix"></div>
			    </div>


		    </aside>
	    </div>
	    <!-- Page Content / End -->

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include "footer.php"; ?>