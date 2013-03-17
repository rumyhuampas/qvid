<?php include Kohana::find_file('views', 'qvidheader'); ?>

<!-- Content
================================================== -->
<div id="content">


    <!-- 960 Container -->
    <div class="container floated">

	    <div class="sixteen floated page-title">

		    <h2>Contacto</h2>

		    <nav id="breadcrumbs">
			    <ul>
				    <li>Usted esta aqui:</li>
				    <li><a href=<?php echo URL::base(); ?> >Inicio</a></li>
				    <li>Contacto</li>
			    </ul>
		    </nav>

	    </div>

    </div>
    <!-- 960 Container / End -->


    <!-- 960 Container -->
    <div class="container floated">

	    <!-- Sidebar -->
	    <div class="four floated sidebar left">
		    <aside class="sidebar padding-reset">

			    <div class="widget">
				    <h4>Informacion</h4>
				    <p>Nuestras oficinas estan ubicadas en uno de los mejores barrios de San Miguel de Tucuman. Encontrarnos no sera para nada dificil.</p>
			    </div>

			    <div class="widget">
				    <h4>Informacion General</h4>

				    <ul class="contact-informations">
					    <li><span class="address"><?php echo $qvidAddress->Text?></span></li>
				    </ul>

				    <ul class="contact-informations second">
					    <li><i class="halflings headphones"></i> <p><?php echo $qvidPhone->Text ?></p></li>
					    <li><i class="halflings envelope"></i> <p><?php echo $qvidEmail->Text ?></p></li>
					    <li><i class="halflings globe"></i> <p><?php echo $qvidFacebook->Text ?></p></li>
				    </ul>

			    </div>

			    <div class="widget">
				    <h4>Horarios</h4>
				    <ul class="contact-informations hours">
					    <li><i class="halflings time"></i>Lunes - Viernes <span class="hours">8 am a 4 pm</span></li>
					    <li><i class="halflings time"></i>Sabado <span class="hours">8 am to 12 pm</span></li>
					    <li><i class="halflings ban-circle"></i>Domingo <span class="hours">Cerrado</span></li>
				    </ul>
			    </div>

		    </aside>
	    </div>
	    <!-- Sidebar / End -->

	    <!-- Page Content -->
	    <div class="eleven floated">
		    <section class="page-content">

			    <h3 class="margin-reset">Nuestra ubicacion</h3>

			    <br />

			    <!-- Google Maps -->
			    <section class="google-map-container">

				    <div id="googlemaps" class="google-map google-map-full" style="padding-bottom:40%"></div>

				    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
				    <script src=<?php echo URL::base()."scripts/jquery.gmap.min.js" ?>></script>
				    <script type="text/javascript">
				    var loc = "<?php echo $location->Text; ?>";
				    jQuery('#googlemaps').gMap({
					    maptype: 'ROADMAP',
					    scrollwheel: false,
					    zoom: 16,
					    markers: [
						    {
							    address: loc, // Your Adress Here
							    html: '',
							    popup: false,
						    }
					    ],
				    });
				    </script>
			    </section>
			    <!-- Google Maps / End -->


			    <h3 class="margin">Formulario de contacto</h3>
			    <p class="margin">No dude en consultarnos cualquier inquietud que pueda tener. Envienos sus preguntas y le contestaremos lo mas rapido posible. Muchas Gracias.</p>

				    <!-- Contact Form -->
				    <section id="contact">

					    <!-- Success Message -->
					    <mark id="message"></mark>

						<?php
						echo Form::open('admin/contact/sendemail', array('method' => 'POST'));
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('name', 'Nombre');
									echo Form::input('name', 'Nombre', array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('email', 'Email <span>*</span>');
									echo Form::input('email', 'Email', array('type' => 'email', 'pattern' => "^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$"));
								echo '</div>';
								echo '<div>';
									echo Form::label('comments', 'Comentarios <span>*</span>');
									echo Form::textarea('comments', '');
								echo '</div>';
							echo '</fieldset>';
							echo Form::button('newtmbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
						?>
						
					    <!-- Form
					    <form method="post" action="http://vasterad.com/themes/nevia/contact.php" name="contactform" id="contactform">

						    <fieldset>

							    <div>
								    <label for="name" accesskey="U">Nombre:</label>
								    <input name="name" type="text" id="name" />
							    </div>

							    <div>
								    <label for="email" accesskey="E">Email: <span>*</span></label>
								    <input name="email" type="email" id="email" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" />
							    </div>

							    <div>
								    <label for="comments" accesskey="C">Mensaje: <span>*</span></label>
								    <textarea name="comments" cols="40" rows="3" id="comments" spellcheck="true"></textarea>
							    </div>

						    </fieldset>

						    <input type="submit" class="submit" id="submit" value="Enviar Mensaje" />
						    <div class="clearfix"></div>

					    </form> -->

				    </section>
				    <!-- Contact Form / End -->


		    </section>
	    </div>
	    <!-- Page Content / End -->


    </div>
    <!-- 960 Container / End -->

</div>
<!-- Content / End -->

<?php include Kohana::find_file('views', 'footer'); ?>