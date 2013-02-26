<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<?php include Kohana::find_file('views', 'admin/headertitle'); ?>
	
	<!-- Page Content -->
    <div class="page-content">
    
    	<div class="container">
    	
    		<h3 class="margin">Equipo</h3>
			
			<section id="contact">

				<!-- Success Message -->
				<mark id="message" style="display: none;"></mark>
				
				<?php 
					if($tm == null){
	        			echo Form::open('admin/team/new', array('method' => 'POST'));
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('tmname', 'Nombre');
									echo Form::input('tmname', 'Nombre', array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('tmname2', 'Cargo');
									echo Form::input('tmname2', 'Cargo', array('onblur' => "if(this.value=='')this.value='Cargo';", 'onfocus' => "if(this.value=='Cargo')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('tmdesc', 'Descripcion');
									echo Form::textarea('tmdesc', 'Descripcion', array('onblur' => "if(this.value=='')this.value='Descripcion';", 'onfocus' => "if(this.value=='Descripcion')this.value='';"));
								echo '</div>';
							echo '</fieldset>';
							echo Form::button('newtmbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
					}
					else{
						echo Form::open('admin/team/edit', array('method' => 'POST'));
							echo Form::hidden('userid', $tm->Id);
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('tmname', 'Nombre');
									echo Form::input('tmname', $tm->Name, array('onblur' => "if(this.value=='')this.value='Nombre';", 'onfocus' => "if(this.value=='Nombre')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('tmname2', 'Cargo');
									echo Form::input('tmname2', $tm->Name2, array('onblur' => "if(this.value=='')this.value='Cargo';", 'onfocus' => "if(this.value=='Cargo')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('tmdesc', 'Descripcion');
									echo Form::textarea('tmdesc', $tm->Text, array('onblur' => "if(this.value=='')this.value='Descripcion';", 'onfocus' => "if(this.value=='Descripcion')this.value='';"));
								echo '</div>';
							echo '</fieldset>';
							echo Form::button('edittmbtn', 'Guardar', array('class' => 'button medium color'));
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