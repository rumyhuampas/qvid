<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<!-- 960 Container -->
	<div class="container floated">
	
		<div class="sixteen floated page-title">
	
			<h2>QVid Admin - Usuarios</h2>
	
			<nav id="breadcrumbs">
				<ul>
					<li>Usted esta aqui:</li>
				    <li><a href=<?php echo URL::base(); ?> >Inicio</a></li>
				    <li>Admin</li>
				    <li>Usuarios</li>
				</ul>
			</nav>
	
		</div>
	
	</div>
	<!-- 960 Container / End -->
	
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
									echo Form::label('userpass', 'Contraseña');
									echo Form::input('userpass', 'Contrasena', array('onblur' => "if(this.value=='')this.value='Contrasena';", 'onfocus' => "if(this.value=='Contrasena')this.value='';"));
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
									echo Form::label('userpass', 'Contraseña');
									echo Form::input('userpass', $user->Password, array('onblur' => "if(this.value=='')this.value='Contrasena';", 'onfocus' => "if(this.value=='Contrasena')this.value='';"));
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