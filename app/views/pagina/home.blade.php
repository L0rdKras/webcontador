@extends('template')
@section ('content')
	<div id="presentacion">
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
				  <li>
				  	<img src="imagenes/conta03.jpg" alt="">
				  	<p class="caption">prueba 03</p>
				  </li>
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
@stop