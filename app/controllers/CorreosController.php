<?php

class CorreosController extends BaseController {

	public function registrar()
	{
		return View::make('correos/registrarcorreos');
	}

	public function guardar()
	{
		$data = Input::only(['email','nombre','contacto']);
		$rules = [
			'email'		=>	'required|email|unique:correos,email',
			'nombre'	=>	'required',
			'contacto'	=>	'required'
		];

		$validation= \Validator::make($data,$rules);

		if($validation->passes()){
			$item = new Correo($data);
			$item->save();
			return Redirect::route('registrar_correos');
		}

		return Redirect::back()->withInput()->withErrors($validation->messages());
	}

}