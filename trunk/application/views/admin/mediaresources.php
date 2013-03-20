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
									<td><img class="tableimg" src=<?php echo URL::base().$m->Path ?> class="ls-bg" alt=""></td>
								<?php
								}
								else{
								?>
									<td><iframe class="tablevid" src=<?php echo $m->Path?> frameborder="0"></iframe></td>
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
				
				<!-- Pagination -->
			    <nav class="pagination">
				    <ul>
				    	<?php 
				    	if($currentpage > 1){
				    	?>
				    		<li><a href=<?php echo URL::base().Route::get('adminwithid')
				    			->uri(array('controller' => 'mediaresources', 'action' => 'getpage', 'id' => $currentpage-1)); ?> 
				    			>Anterior</a></li>
				    	<?php
						}
						for($i=1; $i<$totalpages+1; $i++){ ?>
				    		<li>
				    			<a href=<?php echo URL::base().Route::get('adminwithid')
				    				->uri(array('controller' => 'mediaresources', 'action' => 'getpage', 'id' => $i)); 
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
					    		->uri(array('controller' => 'mediaresources', 'action' => 'getpage', 'id' => $currentpage+1)); ?> 
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