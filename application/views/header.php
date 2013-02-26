<!-- Header -->
<header id="header">

	<?php 
	$qvidSlogan = ORM::factory('pagedata')->where('tag', '=', 'SLOGAN')->and_where('published', '=', 'T')->find(); 
	$qvidPhone = ORM::factory('pagedata')->where('tag', '=', 'PHONE')->and_where('published', '=', 'T')->find();
	$qvidAddress = ORM::factory('pagedata')->where('tag', '=', 'ADDRESS')->and_where('published', '=', 'T')->find();
	$qvidEmail = ORM::factory('pagedata')->where('tag', '=', 'EMAIL')->and_where('published', '=', 'T')->find();
	$qvidFacebook = ORM::factory('pagedata')->where('tag', '=', 'FACEBOOK')->and_where('published', '=', 'T')->find();
	?>

    <!-- Logo -->
    <div class="ten columns">
        <div id="logo">
            <h1><a href=<?php echo URL::base(); ?>><img src=<?php echo URL::base()."/assets/images/logo.png" ?> alt="QVid" /></a></h1>
            <div id="tagline"><?php echo $qvidSlogan->Text?></div>
            <div class="clearfix"></div>
        </div>
    </div>

    <!-- Social / Contact -->
    <div class="six columns">

        <!-- Social Icons -->
        <ul class="social-icons">
            <li class="twitter"><a href="#" title="Twitter">Twitter</a></li>
            <li class="facebook"><a href="#" title="Facebook">Facebook</a></li>
            <!-- <li class="dribbble"><a href="#" title="Dribbble">Dribbble</a></li>
            <li class="linkedin"><a href="#" title="LinkedIn">LinkedIn</a></li>
            <li class="rss"><a href="#" title="RSS">RSS</a></li> -->
            
        </ul>

        <div class="clearfix"></div>

        <!-- Contact Details -->
        <div class="contact-details">Contacto: <?php echo $qvidPhone->Text ?> </div>

        <div class="clearfix"></div>

        <!-- Search -->
        <nav class="top-search">
        	<?php 
        		echo Form::open('search/index', array('method' => 'POST'));
        		echo Form::button('searchbutton', '', array('type' => "submit", 'class' => "search-btn"));
				echo Form::input('searchfield', 'Buscar', array('class' => "search-field", 'onblur' => "if(this.value=='')this.value='Buscar';", 'onfocus' => "if(this.value=='Buscar')this.value='';"));
				echo Form::close(); 
        	?>
            <!--<form action= <?php echo URL::base().Route::get('default')->uri(
	        	array('controller' => 'search',
	        	'action' => 'index',
				'id' => 'test')); ?> method="get">					                
                <button class="search-btn"></button>
                <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
            </form>-->
        </nav>

    </div>
</header>
<!-- Header / End -->