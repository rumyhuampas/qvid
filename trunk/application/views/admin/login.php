<?php include Kohana::find_file('views', 'admin/header'); ?>

<div class="container">


<!-- Large Notice
================================================== -->

	<div class="eight columns">

		<!-- Large Notice -->
		<div class="large-notice">
			<h2>QVid Login</h2>
			<nav class='widget-search'>
		    	<?php 
	        		echo Form::open('admin/login', array('method' => 'POST'));
					echo Form::input('loginuser', 'Nombre', array('class' => "", 'onblur' => "if(this.value=='')this.value='Buscar';", 'onfocus' => "if(this.value=='Buscar')this.value='';"));
					echo Form::input('loginpass', 'Password', array('class' => "", 'onblur' => "if(this.value=='')this.value='Buscar';", 'onfocus' => "if(this.value=='Buscar')this.value='';"));
					echo Form::button('loginbtn', 'test', array('class' => 'button medium color'));
					echo Form::close(); 
	        	?>
			    <!--<form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
				    <button class="search-btn-widget"></button>
				    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
			    </form>-->
		    </nav>
		    <div class="clearfix"></div>
		</div>

	<br><br>

	</div>

</div>

<?php include Kohana::find_file('views', 'admin/footer'); ?>