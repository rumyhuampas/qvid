<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<!-- Page Content -->
	<div class="page-content">
	
		<div class="container">
		
			<h3 class="margin">QVid Login</h3>
		
			<section id="contact">
		    	<?php 
	        		echo Form::open('admin/home/index', array('method' => 'POST'));
						echo '<fieldset>';
							echo '<div>';
								echo Form::label('loginuser', 'Nombre');
								echo Form::input('loginuser', '');
							echo '</div>';
							echo '<div>';
								echo Form::label('loginpass', 'Contraseña');
								echo Form::input('loginpass', '');
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