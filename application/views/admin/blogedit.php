<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<?php include Kohana::find_file('views', 'admin/headertitle'); ?>
	
	<!-- Page Content -->
    <div class="page-content">
    
    	<div class="container">
    	
    		<h3 class="margin">Blog</h3>
			
			<section id="contact">

				<!-- Success Message -->
				<mark id="message" style="display: none;"></mark>
				
				<?php 
					if($blog == null){
	        			echo Form::open('admin/blogs/new', array('method' => 'POST'));
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('blogtitle', 'Titulo');
									echo Form::input('blogtitle', 'Titulo', array('class' => 'large', 'onblur' => "if(this.value=='')this.value='Titulo';", 'onfocus' => "if(this.value=='Titulo')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('blogtext', 'Texto');
									echo Form::textarea('blogtext', 'Texto', array('onblur' => "if(this.value=='')this.value='Texto';", 'onfocus' => "if(this.value=='Texto')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('blogtags', 'Tags');
									echo Form::input('blogtags', 'Tags', array('class' => 'large', 'onblur' => "if(this.value=='')this.value='Tags';", 'onfocus' => "if(this.value=='Tags')this.value='';"));
								echo '</div>';
								?>
								
								<div class="scrolldiv">
									<table class="standard-table">
						
										<tbody>
											<tr>
												<th>Id</th>
												<th>Media</th>
												<th>Nombre</th>
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
												<td>
													<?php echo Form::checkbox('imagecheck', 1, FALSE); ?>
												</td>
											</tr>
											<?php }?>
						
										</tbody>
									
									</table>
								</div>
								
								<?php
								
								echo '<div>';
									echo Form::label('blogauthor', 'Autor');
									echo Form::select('blogauthor', $authors);
								echo '</div>';
								echo '<div>';
									echo Form::label('blogpublished', 'Publicado');
									echo Form::select('blogpublished', array('T' => 'Si','F' => 'No'));
								echo '</div>';
							echo '</fieldset>';
							
							echo Form::button('newuserbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
					}
					else{
						echo Form::open('admin/blogs/edit', array('method' => 'POST'));
							echo Form::hidden('blogid', $blog->Id);
							echo '<fieldset>';
								echo '<div>';
									echo Form::label('blogtitle', 'Titulo');
									echo Form::input('blogtitle', $blog->Title, array('class' => 'large', 'onblur' => "if(this.value=='')this.value='Titulo';", 'onfocus' => "if(this.value=='Titulo')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('blogtext', 'Texto');
									echo Form::textarea('blogtext', $blog->Text, array('onblur' => "if(this.value=='')this.value='Texto';", 'onfocus' => "if(this.value=='Texto')this.value='';"));
								echo '</div>';
								echo '<div>';
									echo Form::label('blogtags', 'Tags');
									echo Form::input('blogtags', $blog->Tags, array('class' => 'large', 'onblur' => "if(this.value=='')this.value='Tags';", 'onfocus' => "if(this.value=='Tags')this.value='';"));
								echo '</div>';
								
								include Kohana::find_file('views', 'admin/imagechoose');
								
								echo '<div>';
									echo Form::label('blogimg', 'Imagen');
									echo Form::hidden('blogimg', '', array('id' => 'hiddenimgid'));
									echo '<div class="clearfix"></div>';
									echo '<li class="three columns"><img src="#" id="chosenimage" /></li>';
								echo '</div>';
								echo '<div class="clearfix"></div>';
								
								echo '<div>';
									echo Form::label('blogauthor', 'Autor');
									echo Form::select('blogauthor', $authors, $blog->User_Id);
								echo '</div>';
								echo '<div>';
									echo Form::label('blogpublished', 'Publicado');
									echo Form::select('blogpublished', array('T' => 'Si','F' => 'No'));
								echo '</div>';
							echo '</fieldset>';
							
							echo Form::button('editblogbtn', 'Guardar', array('class' => 'button medium color'));
							echo '<div class="clearfix"></div>';
						echo Form::close();
					}	
	        	?>

			</section>
			
		</div>

    </div>
    <!-- Page Content / End -->

</div>

<?php include Kohana::find_file('views', 'footer'); ?>