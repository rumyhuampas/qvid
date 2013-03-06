<div class="container">
    <div class="blank">

	    <!-- Recent Work Entire -->
	    <div class="two columns">

		    <div class="carousel-navi">
			    <div id="work-prev" class="arl jcarousel-prev"><i class="icon-chevron-left"></i></div>
			    <div id="work-next" class="arr jcarousel-next"><i class="icon-chevron-right"></i></div>
		    </div>
		    <div class="clearfix"></div>

	    </div>
	    
	    <?php $imageid = -1; ?>
	    <script languaje="JavaScript">
		$(document).ready(function(){
		    $(".chooseimage").click(function(){
		    	$choseninput = jQuery('#userimg');
		    	$chosen = jQuery('#chosenimage');
		    	$choseninput.attr('value', $(this).closest("a").attr("id"));
		    	$chosen.attr('src', $(this).attr("src"));
		    });
		});
	    </script>

	    <!-- jCarousel -->
	    <section class="jcarousel recent-work-jc">
		    <ul>
		    	<?php
				foreach ($images as $img):
				?>
				<!-- Recent Work Item -->
			    <li class="three columns">
				    <a id=<?php echo $img->Id; ?> class="portfolio-item">
					    <figure>
						    <img src=<?php echo URL::base().$img->Path ?> alt=<?php echo $img->FileName ?> class='chooseimage'  />
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