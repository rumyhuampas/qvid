<!-- Sidebar -->
<div class="four floated sidebar right">
    <aside class="sidebar">

	    <!-- Search -->
	    <nav class="widget-search">
	    	<?php 
        		echo Form::open('search/index', array('method' => 'POST'));
        		echo Form::button('searchbutton', '', array('type' => "submit", 'class' => "search-btn-widget"));
				echo Form::input('searchfield', 'Buscar', array('class' => "search-field", 'onblur' => "if(this.value=='')this.value='Buscar';", 'onfocus' => "if(this.value=='Buscar')this.value='';"));
				echo Form::close(); 
        	?>
		    <!--<form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
			    <button class="search-btn-widget"></button>
			    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
		    </form>-->
	    </nav>
	    <div class="clearfix"></div>

	    <!-- Categories -->
	    <nav class="widget">
		    <h4>Top Bloggers</h4>
		    <ul class="categories">
		    <?php $bloggers = helpers_db::getTopBloggers();
			foreach($bloggers as $bggs): 
		    ?>
		    
			    <li><a href=<?php echo URL::base().Route::get('default')->uri(
					        	array('controller' => 'blog',
					        	'action' => 'getuserblogs',
								'id' => $bggs['userid'])); ?>><?php echo $bggs['username'] ?> - <?php echo $bggs['usercount'] ?> blogs</a></li>
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
			    <a href=<?php echo URL::base().Route::get('default')->uri(
					        	array('controller' => 'blog',
					        	'action' => 'gettagblogs',
								'id' => $ts)); ?>><?php echo $ts ?></a>
			<?php endforeach ?>
		    </nav>
	    </div>

	    <!-- Archives
	    <nav class="widget">
		    <h4>Archives</h4>
		    <ul class="categories">
			    <li><a href="#">October 2012</a></li>
			    <li><a href="#">November 2012</a></li>
			    <li><a href="#">December 2012</a></li>
		    </ul>
	    </nav>-->

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
<!-- Sidebar / End -->