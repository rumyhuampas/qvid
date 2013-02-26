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
				<h3 class="margin-reset">Equipo</h3><br>
	
				<table class="standard-table">
	
					<tbody>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Cargo</th>
							<th>Descripcion</th>
							<th>Imagen</th>
							<th>Acciones</th>
						</tr>
						
						<?php
						foreach($team as $t){?>
						<tr>
							<td><?php echo $t->Id ?></td>
							<td><?php echo $t->Name ?></td>
							<td><?php echo $t->Name2 ?></td>
							<td><?php echo $t->Text ?></td>
							<td><?php echo $t->Resource_Id ?></td>
							<td>
								<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'new')); ?> >Nuevo</a> -
								<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'edit', 'id' => $t->Id)); ?> >Editar</a> -
								<a href='#'><div class='deleteconfirm' href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'delete', 'id' => $t->Id)); ?> >Eliminar</div></a>
							</td>
						</tr>
						<?php }?>
	
					</tbody>
				
				</table>
	
			</div>
		</div>
	
	</div>
	<!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'footer'); ?>