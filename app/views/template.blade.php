<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link href='http://fonts.googleapis.com/css?family=Cinzel+Decorative|Voces|Forum' rel='stylesheet' type='text/css'>
	<meta description="Auditores Tributarios Ltda. La Serena, Chile"/>
	<title>Auditores Tributarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="stylesheet" href="css/slider.css"/>
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>	
	<script src="js/jquery.scrollorama.js"></script>
	<script src="js/responsiveslides.min.js"></script>
</head>
<body>
	<header>
		<h1 id="empresa">
			Auditores Tributarios
		</h1>
		<div id="servicios">
			Auditoria, Panificación Tributaria, Contabilidad, Remuneraciones
		</div>
	</header>

	<div id="contenedor">
		@yield('content')
	</div>
	
	<footer>
		<div id="data_contacto">
			<ul id="datos_footer">
				<li>Telefono: +560512625945</li>
				<li>Email: <a href="mailto:jortiz@auditorestributarios.cl">jortiz@auditorestributarios.cl</a></li>
			</ul>
		</div>
	</footer>
	<script>
	$(document).on("ready", gogogo);
	function gogogo(){
			$(".rslides").responsiveSlides({
				nav:false
			});

	        var scrollorama = $.scrollorama({ blocks:'.para_scroll' });
	    	scrollorama.animate('#somos',{ duration: 600, property:'opacity', start:0,end:1});
	    	scrollorama.animate('#somos',{ duration: 600, property:'right', start:-150});
	    	scrollorama.animate('#somos',{ duration: 600, property:'top', start:-100});
			
			scrollorama.animate('#contacto',{ delay:1000, duration: 500, property:'opacity', start:0,end:1});
	    	scrollorama.animate('#contacto',{ delay:1000, duration: 500, property:'left', start:-150});
	    	scrollorama.animate('#contacto',{ delay:1000, duration: 500, property:'top', start:-100});
	}
	</script>
</body>
</html>