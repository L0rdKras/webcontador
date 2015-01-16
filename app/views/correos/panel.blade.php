@extends('template')
@section ('content')
	<div class="logeo">
		<h3>Panel de Control</h3>
		{{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
          @if(Session::has('mensaje_error'))
              {{ Session::get('mensaje_error') }}
          @endif
          {{--Auth::check()--}}
          @if (Auth::check())
          	<li><a href="{{ route('subir') }}">Subir Archivo</a></li>
          	<li><a href="{{ route('registrar_correos') }}">Guardar Direccion Correo</a></li>
          	<li><a href="">Crear Mensaje</a></li>
          	<li><a href="">Enviar Mensaje</a></li>
            <li><a href="{{ route('logout') }}">Salir</a></li>
          @else

            {{ Form::open(['route' => ['login'], 'method' => 'POST' , 'role' => 'form']) }}
                {{ Form::label('usuario', 'Nombre de usuario') }}
                {{ Form::text('username', Input::old('username')); }}
                {{ Form::label('contraseña', 'Contraseña') }}
                {{ Form::password('password'); }}
                {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                {{ Form::checkbox('rememberme', true) }}
                {{ Form::submit('Enviar') }}
            {{ Form::close() }}
          @endif
    </div>
@stop