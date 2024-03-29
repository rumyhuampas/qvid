<?php include Kohana::find_file('views', 'qvidheader'); ?>

<!-- Content
================================================== -->
<div id="content">


    <!-- 960 Container -->
    <div class="container floated">

	    <div class="sixteen floated page-title">

		    <h2>Nuestros servicios</h2>

		    <nav id="breadcrumbs">
			    <ul>
				    <li>Usted esta aqui:</li>
				    <li><a href="@Url.Action("Index", "Home")">Inicio</a></li>
				    <li>Servicios</li>
			    </ul>
		    </nav>

	    </div>

    </div>
    <!-- 960 Container / End -->


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Page Content -->
	    <div class="eleven floated">
		    <div class="page-content">

			    <h3 class="margin-reset">Cine/Entretenimiento</h3><br />
			    <figure class="post-img picture">
					<a href="#" rel="fancybox" title="First Light on the Lake"><img src=<?php echo URL::base()."assets/images/resources/services/cinema.jpg" ?> alt=""></a>
				</figure>
			    <p>
			    <span class="dropcap gray">P</span>roin id condimentum sem. Morbi vitae dui in magna vestibulum suscipit vitae vel nunc. Integer ut risus nulla. malesuada tortor, nec scelerisque lorem mattis  lore Aliquam at erat in purus aliquet mollis. Sed at odio ut arcu fringilla dictum eu eu nisl. Donec rutrum erat non arcu gravida porttitor. Nunc magna nisi.Aliquam at erat in purus aliquet mollis. Fusce elementum velit vel dolor iaculis egestas. Maecenas ut nulla quis eros scelerisque posuere velatas. Fusce elementum velit vel dolor iaculis egestas nullam vitae neque luctus. Omassa risus eget arcu. Sed ac porta felis. Vivamus dignissim varius augue ut tempor. Proin urna diam ras venenatis, eros id congue pellent esque, risus leo. Proin urna diam ras venenatis, eros id congue pellent esque, risus leo.Donec quam felis, ultricies nec, pellentesque pretium quis, sem. Nulla consequat massa quis enim. Donec pe justo fringilla vel, aliquet nec vulputate eget, arcu enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felisa penelore mollis pretium. </p>
			    <blockquote>Mauris aliquet ultricies ante, non faucibus ante gravida sed. Sed ultrices pellentesque purus, vulputate volutpat ipsum hendrerit sed neque sed sapien rutrum laoreet justo ultrices. In pellentesque lorem condimentum dui conse. Vivamus semper, mi sed congue semper, odio felis tristique neque, ac venenatis mauris augue adipiscing lectus. </blockquote>
			    <p>Aliquam interdum vehicula nulla et aliquam. Integer ornare euismod risus, vitae tristique leo fringilla in. Maecenas id nunc risus, sit amet sollicitudin odio. Praesent condimentum auctor est, eu euismod magna lobortis sit amet. Duis venenatis ligula id turpis ultrices auctor. Pellentesque viverra neque nisl. Cras pellentesque elit ac libero varius sed mattis lectus consectetur. Nulla eget arcu sit amet mi dignissim ultrices vitae et magna. Etiam accumsan est a nulla placerat egestas. Donec urna enim, aliquet at sodales eu, ultrices sit amet nunc. Aenean convallis facilisis sem, id placerat diam vestibulum phasellus vitae scelerisque.</p>

			    <br />
			    <h3>Accordions</h3>
			    <br />

			    <!-- Accordion -->
			    <div id="accordion">

				    <!-- Section 1 -->
				    <h3>Web Development</h3>
				    <div>
					    <p>Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate aliquam egestas litora torquent perea conubia nostra.</p>
				    </div>

				    <!-- Section 2 -->
				    <h3>Top Notch Support</h3>
				    <div>
					    <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. Nullam laoreet, velit ut condimentum feugiat, felis nibh ornare massa, quis consectetur.</p>
				    </div>

				    <!-- Section 3 -->
				    <h3>Social Marketing</h3>
				    <div>
					    <p>Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis. </p>
				    </div>
			    </div>
			    <!-- Accordion / End -->
			    
			    

		    </div>
	    </div>
	    <!-- Page Content / End -->

	    <?php include "servsidebar.php"; ?>

    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include Kohana::find_file('views', 'footer'); ?>