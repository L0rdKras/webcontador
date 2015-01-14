@extends('template')
@section ('content')
	<div class="logeo">
		<h3>Subir Archivos</h3>
			{{ Form::open(array(
			     'url'=>'upload/', 
			     'method' => 'post',
			     'enctype'=>'multipart/form-data'
			) )}}

			{{ Form::file('archivo') }}
			{{ Form::submit('Subir') }}

			{{ Form::close()}}
	</div>
@stop