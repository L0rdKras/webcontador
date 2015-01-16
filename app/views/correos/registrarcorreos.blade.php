@extends('template')
@section ('content')
	<div class="logeo">
		<h3>Registro de Correos</h3>

		{{ Form::open(['route' => ['guarda_correo'], 'method' => 'POST' , 'role' => 'form']) }}
	        {{ Form::label('email','Correo')}}
			{{ Form::email('email', null ,[ 'class' => 'form-control' ]) }}
			{{ $errors->first('email')}}
	        {{ Form::label('nombre','Nombre')}}
			{{ Form::text('nombre', null ,[ 'class' => 'form-control' ]) }}
			{{ $errors->first('nombre')}}
			{{ Form::label('contacto','Contacto')}}
			{{ Form::text('contacto', null ,[ 'class' => 'form-control' ]) }}
			{{ $errors->first('contacto')}}
	        {{ Form::submit('Guardar') }}
        {{ Form::close() }}
	</div>
@stop