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
									echo Form::label('userpass', 'Contraseña');
									echo Form::input('userpass', '', array('type' => 'password'));
								echo '</div>';
								echo '<div>';
									echo Form::label('userrepass', 'Reingresar Contraseña');
									echo Form::input('userrepass', '', array('type' => 'password'));
								echo '</div>';
								
								include Kohana::find_file('views', 'admin/imagechoose');
								
								echo '<div>';
									echo Form::label('userimg', 'Imagen');
									echo Form::hidden('userimg', '', array('id' => 'hiddenimgid'));
									echo '<div class="clearfix"></div>';
									echo '<li class="three columns"><img src="#" id="chosenimage" /></li>';
								echo '</div>';
								echo '<div class="clearfix"></div>';
								
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
									echo Form::label('useroldpass', 'Contraseña Actual');
									echo Form::input('useroldpass', '', array('type' => 'password'));
								echo '</div>';
								echo '<div>';
									echo Form::label('userpass', 'Contraseña Nueva');
									echo Form::input('userpass', '', array('type' => 'password'));
								echo '</div>';
								echo '<div>';
									echo Form::label('userrepass', 'Reingresar Contraseña');
									echo Form::input('userrepass', '', array('type' => 'password'));
								echo '</div>';
								
								include Kohana::find_file('views', 'admin/imagechoose');
								
								echo '<div>';
									echo Form::label('userimg', 'Imagen');
									echo Form::hidden('userimg', $user->Image_Id, array('id' => 'hiddenimgid'));
									echo '<div class="clearfix"></div>';
									echo '<li class="three columns"><img src="'.URL::base().$user->imagepath.'" id="chosenimage" /></li>';
								echo '</div>';
								echo '<div class="clearfix"></div>';
								
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

<?php include Kohana::find_file('views', 'footer'); ?>