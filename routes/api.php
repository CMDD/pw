<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// RUTAS CATEGORIAS
Route::get('categorias/{id}','CategoriaController@index');
Route::post('cambiar-estado-categoria','CategoriaController@cambiarEstadoCategoria');
Route::post('crear/categoria','CategoriaController@store');

// FIN RUTAS CATEGORIAS

Route::get('contenidos/{id}','ContenidoController@index');
Route::post('cambiar-estado-contenido','ContenidoController@cambiarEstadoContenido');


