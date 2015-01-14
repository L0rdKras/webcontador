<?php

class DocumentosController extends BaseController {

	public function ver_subir()
	{
		return View::make('correos/subirarchivos');
	}

	public function guardar()
	{
		if(Input::hasFile('archivo')) {
			Input::file('archivo')
				->move('carpetarArchivos',Input::file('archivo')->getClientOriginalName());
			//guardar bd
			$nombre  = Input::file('archivo')->getClientOriginalName();
			$user_id = 1;
			$data=["nombre"=> $nombre , "user_id" => $user_id];
			$item = new Documento($data);
			$item->save();
			//dd($item);
		}
		return Redirect::to('/panel');
	}
}