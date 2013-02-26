<!-- Navigation
================================================== -->
<nav id="navigation" class="style-1">

<div class="left-corner"></div>
<div class="right-corner"></div>

<ul class="menu" id="responsive">

    <li><a href=<?php echo URL::base().Route::get('admin')->uri(array('controller' => 'home')); ?> id="1" menuid=<?php echo $menuid; ?>><i class="halflings white home"></i> Inicio Admin</a></li>

    <li><a href="#" id="2" menuid=<?php echo $menuid; ?>><i class="halflings white file"></i> Información Basica</a>
        <ul>
	        <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'basics')); ?> >Datos basicos de QVid</a></li>
	        <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team')); ?> >Nuestro equipo</a></li>
        </ul>
    </li>

    <li><a href="#" id="3" menuid=<?php echo $menuid; ?>><i class="halflings white cog"></i> Servicios</a>
        <!-- Second Level / Start -->
        <ul>
            <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'servsecurity')); ?> >Seguridad</a></li>
            <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'servevent')); ?> >Eventos deportivos</a></li>
            <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'servcinema')); ?> >Cine/Entretenimiento</a></li>
            <li><a href="typography.html">Seguimiento de obras</a></li>
            <li><a href="typography.html">Mensura</a></li>
            <li><a href="typography.html">Prevencion de catastrofes</a></li>
            <li><a href="typography.html">Control aereo</a></li>
            <li><a href="typography.html">Vectorizacion de mapas</a></li>

        </ul>
        <!-- Second Level / End -->
    </li>

    <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'blog')); ?> id="4" menuid=<?php echo $menuid; ?>><i class="halflings white pencil"></i> Blog</a>
    </li>

    <li><a href=<?php echo URL::base().Route::get('default')->uri(array('controller' => 'contact')); ?> id="5" menuid=<?php echo $menuid; ?>><i class="halflings white envelope"></i> Contacto</a></li>
    
    <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users')); ?> id="6" menuid=<?php echo $menuid; ?>><i class="halflings white user"></i> Usuarios</a></li>

</ul>
</nav>