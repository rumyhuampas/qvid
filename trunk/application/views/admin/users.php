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
	
				<div class="scrolldiv">
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
								<td><img src=<?php echo URL::base().$user->imagepath ?> class="ls-bg" alt=""></td>
								<td>
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'new')); ?> >Nuevo</a> -
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'edit', 'id' => $user->Id)); ?> >Editar</a> -
									<a href='#'><div class='deleteconfirm' 
											message='Esta por eliminar el usuario.<br />Esta seguro?<br /><br />Tenga en cuenta que todos los items relacionados con el mismo seran eliminados tambien (ejemplo blogs)' 
											href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users', 'action' => 'delete', 'id' => $user->Id)); ?> >
										Eliminar</div>
									</a>
								</td>
							</tr>
							<?php }?>
		
						</tbody>
					
					</table>
				</div>
	
			</div>
		</div>
	
	</div>
	<!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'footer'); ?>