<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<?php 
		if($infomsg != null){ 
		?>
			<div class="notification '.<?php $infomsg[0] ?>.' closeable" id="notification" style="display: block;">
				<p><span><?php $infomsg[1] ?></span> <?php $infomsg[2] ?></p>
			<a class="close" href="#"><i class="icon-remove"></i></a></div>
		<?php
		}
		?>

		<h2><?php echo $title ?></h2>

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