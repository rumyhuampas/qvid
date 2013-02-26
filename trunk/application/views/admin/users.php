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
				<h3 class="margin-reset">Usuarios</h3><br>
	
				<table class="standard-table">
	
					<tbody>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Imagen</th>
							<th>Acciones</th>
						</tr>
						
						<?php
						foreach($users as $user){?>
						<tr>
							<td><?php echo $user->Id ?></td>
							<td><?php echo $user->Name ?></td>
							<td><?php echo $user->Description ?></td>
							<td><?php echo $user->Image_Id ?></td>
							<td>
								<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'new')); ?> >Nuevo</a> -
								<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'edit', 'id' => $user->Id)); ?> >Editar</a> -
								<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'delete', 'id' => $user->Id)); ?> >Eliminar</a>
								<a href='#'><div class='deleteconfirm'>Eliminar</div></a>
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

<?php include Kohana::find_file('views', 'admin/footer'); ?>