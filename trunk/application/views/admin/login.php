<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<!-- Page Content -->
	<div class="page-content">
	
		<div class="container">
		
			<h3 class="margin">QVid Login</h3>
		
			<section id="contact">
		    	<?php 
	        		echo Form::open('admin/login', array('method' => 'POST'));
						echo '<fieldset>';
							echo '<div>';
								echo Form::label('loginuser', 'Nombre');
								echo Form::input('loginuser', 'Nombre', array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
							echo '</div>';
							echo '<div>';
								echo Form::label('loginpass', 'Contraseña');
								echo Form::input('loginpass', 'Contrasena', array('onblur' => "if(this.value=='')this.value='Contrasena';", 'onfocus' => "if(this.value=='Contrasena')this.value='';"));
							echo '</div>';
						echo '</fieldset>';
						echo Form::button('loginbtn', 'Ingresar', array('class' => 'button medium color'));
						echo '<div class="clearfix"></div>';
					echo Form::close();
	        	?>
			    <div class="clearfix"></div>
			</section>
		</div>
	
	</div>
	<!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'admin/footer'); ?>