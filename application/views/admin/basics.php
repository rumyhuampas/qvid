<?php include Kohana::find_file('views', 'admin/header'); ?>
	
<div id="content">

	<?php include Kohana::find_file('views', 'admin/headertitle'); ?>	

	<!-- Page Content -->
	<div class="page-content">
	
		<div class="container">
	
		<!-- Regular Table
		================================================== -->
	
			<div class="sixteen columns">
				<!-- Headline -->
				<h3 class="margin-reset">Informacion basica</h3><br>
	
				<section id="contact">

					<!-- Success Message -->
					<mark id="message" style="display: none;"></mark>
					
					<?php 
        			echo Form::open('admin/basics/index', array('method' => 'POST'));
						echo '<fieldset>';
							echo '<div class="five columns">';
								echo Form::label('bphone', $phone->Name);
								echo Form::input('bphone', $phone->Text);
							echo '</div>';
							echo '<div class="five columns">';
								echo Form::label('bemail', $email->Name);
								echo Form::input('bemail', $email->Text);
							echo '</div>';
							echo '<div class="five columns">';
								echo Form::label('bface', $face->Name);
								echo Form::input('bface', $face->Text);
							echo '</div>';
							echo '<div class="ten columns">';
								echo Form::label('baddress', $address->Name);
								echo Form::input('baddress', $address->Text, array('class' =>'large'));
							echo '</div>';
							echo '<div class="ten columns">';
								echo Form::label('bslogan', $slogan->Name);
								echo Form::input('bslogan', $slogan->Text, array('class' =>'large'));
							echo '</div>';
						echo '</fieldset>';
						echo Form::button('savebasicsbtn', 'Guardar', array('class' => 'button medium color'));
						echo '<div class="clearfix"></div>';
					echo Form::close();
		        	?>
	
				</section>
	
			</div>
		</div>
	
	</div>
	<!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'footer'); ?>