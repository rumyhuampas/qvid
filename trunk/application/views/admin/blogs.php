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
									<a href='#'><div class='deleteconfirm' 
											message='Esta por eliminar el blog.<br />Esta seguro?' 
											href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'blogs', 'action' => 'delete', 'id' => $blog->Id)); ?> >
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
				    			->uri(array('controller' => 'blogs', 'action' => 'getpage', 'id' => $currentpage-1)); ?> 
				    			>Anterior</a></li>
				    	<?php
						}
						for($i=1; $i<$totalpages+1; $i++){ ?>
				    		<li>
				    			<a href=<?php echo URL::base().Route::get('adminwithid')
				    				->uri(array('controller' => 'blogs', 'action' => 'getpage', 'id' => $i)); 
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
					    		->uri(array('controller' => 'blogs', 'action' => 'getpage', 'id' => $currentpage+1)); ?> 
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