<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('pagina/home');
});

Route::get('/panel', function()
{
	return View::make('correos/panel');
});

Route::post('/login',['as' => 'login', 'uses' => 'AuthController@inicia']);

Route::get('/logout',['as' => 'logout', 'uses' => 'AuthController@salir']);

Route::get('/subir',['as' => 'subir', 'uses' => 'DocumentosController@ver_subir']);

Route::post('/upload',['as' => 'upload', 'uses' => 'DocumentosController@guardar']);