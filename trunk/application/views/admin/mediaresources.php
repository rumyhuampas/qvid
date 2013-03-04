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
				<h3 class="margin-reset">Media</h3><br>
	
				<div class="scrolldiv">
					<table class="standard-table">
		
						<tbody>
							<tr>
								<th>Id</th>
								<th>Media</th>
								<th>Nombre</th>
								<th>Descripcion</th>
								<th>Tag</th>
								<th>Link</th>
								<th>Acciones</th>
							</tr>
							
							<?php
							foreach($media as $m){?>
							<tr>
								<td><?php echo $m->Id ?></td>
								<?php if($m->Resource_Type == 'PICTURE'){ ?>
									<td><img src=<?php echo URL::base().$m->Path ?> class="ls-bg" alt=""></td>
								<?php
								}
								else{
								?>
									<td><iframe width=260 src=<?php echo $m->Path?> frameborder="0"></iframe></td>
								<?php
								}
								?>
								<td><?php echo $m->FileName ?></td>
								<td><?php echo $m->Description ?></td>
								<td><?php echo $m->FileTag ?></td>
								<td><?php echo $m->Link ?></td>
								<td>
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'mediaresources', 'action' => 'new')); ?> >Nuevo</a> -
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'mediaresources', 'action' => 'edit', 'id' => $m->Id)); ?> >Editar</a> -
									<a href='#'><div class='deleteconfirm' href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'mediaresources', 'action' => 'delete', 'id' => $m->Id)); ?> >Eliminar</div></a>
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