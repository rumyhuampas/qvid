<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<?php include Kohana::find_file('views', 'admin/headertitle'); ?>
	
	<!-- Page Content -->
    <div class="page-content">
    
    	<div class="container">
    	
    		<h3 class="margin">Usuario</h3>
			
			<section id="contact">

				<!-- Success Message -->
				<mark id="message" style="display: none;"></mark>
				
				<?php 
					if($user == null){
	        			echo Form::open('admin/users/new', array('method' => 'POST'));
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('username', 'Nombre');
									echo Form::input('username', 'Nombre', array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userpass', 'Contrase�a');
									echo Form::input('userpass', 'Contrasena', array('onblur' => "if(this.value=='')this.value='Contrasena';", 'onfocus' => "if(this.value=='Contrasena')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userrepass', 'Reingresar Contrase�a');
									echo Form::input('userrepass', 'Reingresar Contrasena', array('onblur' => "if(this.value=='')this.value='Reingresar Contrasena';", 'onfocus' => "if(this.value=='Reingresar Contrasena')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userdesc', 'Descripcion');
									echo Form::textarea('userdesc', 'Descripcion', array('onblur' => "if(this.value=='')this.value='Descripcion';", 'onfocus' => "if(this.value=='Descripcion')this.value='';"));
								echo '</div>';
							echo '</fieldset>';
							echo Form::button('newuserbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
					}
					else{
						echo Form::open('admin/users/edit', array('method' => 'POST'));
							echo Form::hidden('userid', $user->Id);
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('username', 'Nombre');
									echo Form::input('username', $user->Name, array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('useroldpass', 'Contrase�a Actual');
									echo Form::input('useroldpass', 'Contrase�a Actual', array('onblur' => "if(this.value=='')this.value='Contrasena Actual';", 'onfocus' => "if(this.value=='Contrasena Actual')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userpass', 'Contrase�a Nueva');
									echo Form::input('userpass', 'Contrasena Nueva', array('onblur' => "if(this.value=='')this.value='Contrasena Nueva';", 'onfocus' => "if(this.value=='Contrasena Nueva')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userrepass', 'Reingresar Contrase�a');
									echo Form::input('userrepass', 'Reingresar Contrasena', array('onblur' => "if(this.value=='')this.value='Reingresar Contrasena';", 'onfocus' => "if(this.value=='Reingresar Contrasena')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('userdesc', 'Descripcion');
									echo Form::textarea('userdesc', $user->Description, array('onblur' => "if(this.value=='')this.value='Descripcion';", 'onfocus' => "if(this.value=='Descripcion')this.value='';"));
								echo '</div>';
							echo '</fieldset>';
							echo Form::button('edituserbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
					}	
	        	?>

			</section>
			
		</div>

    </div>
    <!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'admin/footer'); ?>