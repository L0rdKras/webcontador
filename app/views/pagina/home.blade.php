<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
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
		<article class="para_scroll">
			<div id="bienvenida">
				
				<ul class="rslides">
				  <li>
				  	<img src="imagenes/conta01.jpg" alt="">
				  	<p class="caption">prueba 01</p>
				  </li>
				  <li>
				  	<img src="imagenes/conta04.jpg" alt="">
				  	<p class="caption">prueba 02</p>
				  </li>
				  <li><img src="imagenes/conta03.jpg" alt=""></li>
				</ul>
			</div>
			<div id="somos">
				<h2>Somos</h2>
				Somos una empresa de contabilidad profesional y  planificacion  tributaria  con  una  visión joven,  una vasta  experiencia  y presencia en el campo regional y nacional.</br> Nuestra  seriedad  y  logro  de  objetivos nos ha posicionado en un lugar destacado, beneficiando el apoyo integral a todos nuestros clientes
				<img src="imagenes/conta01.jpg" alt="somos">
			</div>
			<div id="contacto">
				<h2>Contacto</h2>
				{{ Form::open(['method' => 'POST', 'role' => 'form'])}}
				<p>
					{{ Form::label('nombre','Nombre')}}
					{{ Form::text('nombre', null ) }}
				</p>
				<p>
					{{ Form::label('email','Correo')}}
					{{ Form::email('email', null ) }}
				</p>
				{{ Form::close() }}
			</div>
		</article>
	</div>
	<footer>
		<div id="data_contacto">
			<ul id="datos_footer">
				<li>Telefono: +560512625945</li>
				<li>Email: <a href="mailto:jortiz@auditorestributarios.cl">jortiz@auditorestributarios.cl</a></li>
			</ul>
		</div>
	<script>
	$(document).on("ready", gogogo);
	function gogogo(){
			$(".rslides").responsiveSlides({
				nav:true
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
	</footer>
</body>
</html>