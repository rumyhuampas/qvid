<!-- 960 Container -->
<div class="container floated">

	<div class="sixteen floated page-title">

		<?php 
		if(isset($infomsgtype)){ 
		?>
			<div class="<?php echo 'notification '.$infomsgtype.' closeable' ?>" id="notification" style="display: block;">
				<p><span><?php echo $infomsgtitle ?></span> <?php echo $infomsgtext ?></p>
			<a class="close" href="#"><i class="icon-remove"></i></a></div>
		<?php
		}
		?>

		<h2><?php echo $title ?></h2>

		<?php if(!isset($islogin)){?>
			<nav id="breadcrumbs">
				<ul>
				    <li><a href=<?php echo URL::base().Route::get('adminwithmsg')->uri(array('controller' => 'login','action' => 'index',
						'msgtype' => 'success',
						'msgtitle' => 'Gracias!',
						'msgtext' => 'Gracias%20por%20utilizar%20nuestros%20servicios.')); ?> >
						<div class='button medium color'>Salir de Admin</div></a></li>
				</ul>
			</nav>
		<?php
		}
		?>

	</div>

</div>
<!-- 960 Container / End -->