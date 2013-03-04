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
				<h3 class="margin-reset">Blogs</h3><br>
	
				<div class="scrolldiv">
					<table class="standard-table">
		
						<tbody>
							<tr>
								<th>Id</th>
								<th>Titulo</th>
								<th>Texto</th>
								<th>Tags</th>
								<th>Acciones</th>
							</tr>
							
							<?php
							foreach($blogs as $blog){?>
							<tr>
								<td><?php echo $blog->Id ?></td>
								<td><?php echo $blog->Title ?></td>
								<td><?php echo substr($blog->Text, 0, 250).'...'; ?></td>
								<td><?php echo $blog->Tags ?></td>
								<td>
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'blogs', 'action' => 'new')); ?> >Nuevo</a> -
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'blogs', 'action' => 'edit', 'id' => $blog->Id)); ?> >Editar</a> -
									<a href='#'><div class='deleteconfirm' href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'blogs', 'action' => 'delete', 'id' => $blog->Id)); ?> >Eliminar</div></a>
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