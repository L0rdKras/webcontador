<?php

class AuthController extends BaseController {
    /*
    |--------------------------------------------------------------------------
    | Controlador de la autenticación de usuarios
    |--------------------------------------------------------------------------
    */

    public function inicia()
	{
		$userdata = array(
            'user_name' => Input::get('username'),
            'password'=> Input::get('password')
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata, Input::get('remember-me', 0)))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/panel');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('/panel')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
	}

	public function salir()
	{
		Auth::logout();
        return Redirect::to('/panel')
                    ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
	}
}