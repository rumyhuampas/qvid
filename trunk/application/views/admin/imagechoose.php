<div class="container">
    <div class="blank">

	    <!-- Recent Work Entire -->
	    <div class="four columns carousel-intro">

		    <div class="carousel-navi">
			    <div id="work-prev" class="arl jcarousel-prev"><i class="icon-chevron-left"></i></div>
			    <div id="work-next" class="arr jcarousel-next"><i class="icon-chevron-right"></i></div>
		    </div>
		    <div class="clearfix"></div>

	    </div>
	    
	    <?php $imageid = -1; ?>

	    <!-- jCarousel -->
	    <section class="jcarousel recent-work-jc">
		    <ul>
		    	<?php
				foreach ($images as $img):
				?>
				<!-- Recent Work Item --> 
			    <li class="four columns">
				    <a id=<?php echo $img->Id; ?> class="portfolio-item">
					    <figure>
					    	<?php
					    	if($img->Resource_Type == 'PICTURE'){
					    	?>
						    <img src=<?php echo URL::base().$img->Path ?> alt=<?php echo $img->FileName ?> class='chooseimage'  />
						    <?php
							}
							else{
							?>
							<iframe width=220 src=<?php echo $img->Path?> frameborder="0"></iframe>
							<?php
							}
							?>
						    <figcaption class="item-description">
							    <h5><?php echo $img->FileName ?></h5>
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