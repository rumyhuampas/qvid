<?php include 'header.php'; ?>

<!-- Content
================================================== -->
<div id="content">


    <!-- 960 Container -->
    <div class="container floated">

	    <div class="sixteen floated page-title">

		    <h2>Nuestro equipo de trabajo</h2>

		    <nav id="breadcrumbs">
			    <ul>
				    <li>Usted esta aqui:</li>
				    <li><a href=<?php echo URL::base(); ?>>Inicio</a></li>
				    <li>Equipo</li>
			    </ul>
		    </nav>

	    </div>

    </div>
    <!-- 960 Container / End -->

    <!-- Page Content -->
    <div class="page-content">
    	
		<!-- 960 Container -->
        <div class="container">

	        <div class="sixteen columns">
		        <h3>Conozca a nuestro equipo</h3><br />
	        </div>

			<?php 
			foreach($team as $t): ?>
		        <!-- About -->
		        <div class="one-third column">
			        <img src=<?php echo URL::base().$t->imagepath?> alt=""/>
			        <div class="team-name"><h5><?php echo $t->Name?></h5> <span><?php echo $t->Name2?></span></div>
			        <div class="team-about"><p><?php echo $t->Text?></p></div>
		        </div>
	        <?php endforeach; ?>
        </div>
        <!-- 960 Container / End -->
        
	</div>
    <!-- Page Content / End -->

</div>
<!-- Content / End -->

<?php include "footer.php"; ?>