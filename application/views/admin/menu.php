<!-- Navigation
================================================== -->
<nav id="navigation" class="style-1">

<div class="left-corner"></div>
<div class="right-corner"></div>

<ul class="menu" id="responsive">

    <li><a href="#" id="1" menuid=<?php echo $menuid; ?>><i class="halflings white file"></i> Información</a>
        <ul>
	        <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'basics')); ?> >Datos basicos de QVid</a></li>
	        <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'team')); ?> >Nuestro equipo</a></li>
        </ul>
    </li>

    <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'blogs')); ?> id="2" menuid=<?php echo $menuid; ?>><i class="halflings white pencil"></i> Blog</a>
    </li>
    
    <li><a href=<?php echo URL::base().Route::get('adminwithid')->uri(array('controller' => 'users')); ?> id="3" menuid=<?php echo $menuid; ?>><i class="halflings white user"></i> Usuarios</a></li>

</ul>
</nav>