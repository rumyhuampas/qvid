</div>
        <!-- Wrapper / End -->


        <!-- Footer
        ================================================== -->

        <!-- Footer / Start -->
        <footer id="footer">
	        <!-- 960 Container -->
	        <div class="container">

		        <!-- About -->
		        <div class="six columns">
			        <a href=<?php echo URL::base(); ?>><img id="logo-footer" src=<?php echo URL::base()."assets/images/logo-footer.png" ?> alt="" /></a>
			        <p>Videos grabados con la mas alta calidad usando avanzados quadcopters para obtener la mejor experiencia visual.</p>
			
		        </div>

		        <!-- Contact Details -->
		        <div class="six columns">
			        <h4>Detalles de Contacto</h4>
			        <ul class="contact-details-alt">
				        <li><i class="halflings white map-marker"></i> <p><strong>Dirección: </strong><?php echo $offData[1]['text']?></p></li>
				        <li><i class="halflings white user"></i> <p><strong>Telefono:</strong> <?php echo $offData[0]['text'] ?></p></li>
				        <li><i class="halflings white envelope"></i> <p><strong>Email:</strong> <a href="#"><?php echo $offData[2]['text'] ?></a></p></li>
			        </ul>
		        </div>

		        <!-- Photo Stream 
		        <div class="four columns">
			        <h4>Photo Stream</h4>
			        <div class="flickr-widget">
				        <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=48035108@N07"></script>
				        <div class="clearfix"></div>
			        </div>
		        </div>
                -->

		        <!-- Social -->
		        <div class="four columns">
			        <h4>Social</h4>
			        <ul id="facebook">
                        <li><a href="http://www.facebook.com/qvid"><?php echo $offData[3]['text'] ?></a></li>
                    </ul>
                            
				        <!-- <script type="text/javascript">
				            jQuery(document).ready(function ($) {
				                $.getJSON('http://api.twitter.com/1/statuses/user_timeline/vasterad.json?count=1&amp;callback=?', function (tweets) {
				                    $("#twitter").html(tz_format_twitter(tweets));
				                });
				            });
				        </script>
                        -->
			        <div class="clearfix"></div>
		        </div>

	        </div>
	        <!-- 960 Container / End -->

        </footer>
        <!-- Footer / End -->


        <!-- Footer Bottom / Start  -->
        <footer id="footer-bottom">

	        <!-- 960 Container -->
	        <div class="container">

		        <!-- Copyrights -->
		        <div class="eight columns">
			        <div class="copyright">
				        © Copyright 2013 por <a href=<?php echo URL::base()?> >QVid</a>. Todos los derechos reservados.
			        </div>
		        </div>

		        <!-- Menu -->
		        <div class="eight columns">
			        <nav id="sub-menu">
				        <ul>
					        <!-- <li><a href="#">Preguntas frecuentes</a></li> -->
					        <li><a href="#">Mapa del sitio</a></li>
					        <li><a href=<?php echo URL::base().'index.php/contact/index'; ?>>Contacto</a></li>
				        </ul>
			        </nav>
		        </div>

	        </div>
	        <!-- 960 Container / End -->

        </footer>
        <!-- Footer Bottom / End -->

    </body>

</html>