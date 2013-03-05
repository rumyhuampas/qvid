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
		    $("#chooseimage").click(function(){
		    	alert($(this).closest('a').attr('id'));
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
				    <a href='#' id=<?php $img->Id; ?> class="portfolio-item">
					    <figure>
						    <img src=<?php echo URL::base().$img->Path ?> alt=<?php echo $img->FileName ?> id='chooseimage'  />
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