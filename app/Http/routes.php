<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'index', function() {
    return view('index');
}]);

Route::group(['prefix'=>'/backend'], function(){
	
	Route::get('/', ['as'=>'backend.index', function(){
				return view('backend.index');
	}]);

	// Rutas para el Cliente
	Route::resource('clientes','ClientesController');
		Route::get('clientes/{id}/destroy', [
				'uses' => 'ClientesController@destroy',
				'as' => 'backend.clientes.destroy'
				]);
	Route::resource('regiones','RegionesController');
		Route::get('regiones/{id}/destroy', [
				'uses' => 'RegionesController@destroy',
				'as' => 'backend.regiones.destroy'
				]);

		Route::get('clientes/{id}/restore', [
				'uses' => 'ClientesController@restore',
				'as' => 'backend.clientes.restore'
				]);

});