<!-- Sidebar -->
<div class="four floated sidebar right">
    <aside class="sidebar">

	    <!-- Search -->
	    <nav class="widget-search">
		    <form action="http://vasterad.com/themes/nevia/404-page.html" method="get">
			    <button class="search-btn-widget"></button>
			    <input class="search-field" type="text" onblur="if(this.value=='')this.value='Buscar';" onfocus="if(this.value=='Buscar')this.value='';" value="Buscar" />
		    </form>
	    </nav>
	    <div class="clearfix"></div>

	    <!-- Categories -->
	    <nav class="widget">
		    <h4>Servicios</h4>
		    <ul class="categories">
			    <li><a href="#">Seguridad</a></li>
			    <li><a href="#">Eventos deportivos</a></li>
			    <li><a href="#">Cine/Entretenimiento</a></li>
			    <li><a href="#">Seguimiento de obras</a></li>
			    <li><a href="#">Mensura</a></li>
			    <li><a href="#">Prevencion de catastrofes</a></li>
			    <li><a href="#">Control aereo</a></li>
			    <li><a href="#">Vectorizacion de mapas</a></li>
		    </ul>
	    </nav>

	    <!-- Tweets-->
	    <div class="widget">
		    <h4>Ultimos blogs</h4>
		    <ul id="twitter-blog"></ul>
			    <script type="text/javascript">
			        jQuery(document).ready(function ($) {
			            $.getJSON('http://api.twitter.com/1/statuses/user_timeline/purethemes.json?count=2&amp;callback=?', function (tweets) {
			                $("#twitter-blog").html(tz_format_twitter(tweets));
			            });
			        });
			    </script>
		    <div class="clearfix"></div>
	    </div>
    </aside>
</div>
<!-- Sidebar / End -->