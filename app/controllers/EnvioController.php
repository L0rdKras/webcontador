<?php

class EnvioController extends BaseController {
	public function crear()
	{
		$correo = new Correo();
		$lista_correos = $correos->all();
		return View::make('correos/crearmensaje');
	}
}