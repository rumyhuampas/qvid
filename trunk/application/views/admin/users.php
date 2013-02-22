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
								<a href=<?php echo URL::base().Route::get('admin')->uri(array('controller' => 'users', 'action' => 'new')); ?> >Nuevo</a> -
								<a href=<?php echo URL::base().Route::get('admin')->uri(array('controller' => 'users', 'action' => 'edit', 'id' => $user->Id)); ?> >Editar</a> -
								<a href=<?php echo URL::base().Route::get('admin')->uri(array('controller' => 'users', 'action' => 'delete', 'id' => $user->Id)); ?> >Eliminar</a>
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