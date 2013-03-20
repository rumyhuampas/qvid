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
	
				<div class="scrolldiv">
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
								<td><img class="tableimg" src=<?php echo URL::base().$t->imagepath ?> class="ls-bg" alt=""></td>
								<td>
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'new')); ?> >Nuevo</a> -
									<a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'edit', 'id' => $t->Id)); ?> >Editar</a> -
									<a href='#'><div class='deleteconfirm' 
											message='Esta por eliminar el registro.<br />Esta seguro?' 
											href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team', 'action' => 'delete', 'id' => $t->Id)); ?> >
										Eliminar</div>
									</a>
								</td>
							</tr>
							<?php }?>
		
						</tbody>
					
					</table>
				</div>
				
				<!-- Pagination -->
			    <nav class="pagination">
				    <ul>
				    	<?php 
				    	if($currentpage > 1){
				    	?>
				    		<li><a href=<?php echo URL::base().Route::get('adminwithid')
				    			->uri(array('controller' => 'team', 'action' => 'getpage', 'id' => $currentpage-1)); ?> 
				    			>Anterior</a></li>
				    	<?php
						}
						for($i=1; $i<$totalpages+1; $i++){ ?>
				    		<li>
				    			<a href=<?php echo URL::base().Route::get('adminwithid')
				    				->uri(array('controller' => 'team', 'action' => 'getpage', 'id' => $i)); 
				    				if($currentpage == $i){
				    				?>
				    					class="current"
				    				<?php
									}
									?>
				    				>
				    				<?php echo $i ?>
				    			</a>
				    		</li>
					    <?php
						} 
				    	if($currentpage < $totalpages){
				    	?>
					    	<li><a href=<?php echo URL::base().Route::get('adminwithid')
					    		->uri(array('controller' => 'team', 'action' => 'getpage', 'id' => $currentpage+1)); ?> 
					    		>Siguiente</a></li>
					    <?php
						}
						?>
				    </ul>
				    <div class="clearfix"></div>
			    </nav>
	
			</div>
		</div>
	
	</div>
	<!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'footer'); ?>