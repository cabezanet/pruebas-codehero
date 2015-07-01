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

/*
Route::get('/', function()
{
	return View::make('hello');
});
*/

Route::get('/', function() {

	return Redirect::to('usuarios');
});

Route::get('usuarios', array('uses' => 'UsuarioController@mostrarUsuarios'));

Route::get('usuarios/nuevo', array('uses' => 'UsuarioController@nuevoUsuario'));

Route::post('usuarios/crear', array('uses' => 'UsuarioController@crearUsuario'));

Route::get('usuarios/{id}', array('uses' => 'UsuarioController@verUsuario'));

Route::get('usuarios/{id}/eliminar', array('uses' => 'UsuarioController@eliminarUsuario'));