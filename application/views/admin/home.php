<?php include Kohana::find_file('views', 'admin/header'); ?>

<div id="content">

	<!-- 960 Container -->
	<div class="container floated">
	
		<div class="sixteen floated page-title">
	
			<h2>QVid Admin</h2>
	
			<nav id="breadcrumbs">
				<ul>
					<li>Usted esta aqui:</li>
				    <li><a href=<?php echo URL::base(); ?> >Inicio</a></li>
				    <li>QVid Admin</li>
				</ul>
			</nav>
	
		</div>
	
	</div>
	<!-- 960 Container / End -->
	<?php echo $user; ?>

</div>

<?php include Kohana::find_file('views', 'admin/footer'); ?>