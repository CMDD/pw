<?php



Route::get('/','EmisoraController@index');
Route::get('/emisora/{emisora}','EmisoraController@emisora');
// Route::get('/articulo',function(){
//     return view('articulo');
// });

//Eventos
Route::get('eventos/{id}','Web\EventoController@index');
//Categorias
Route::get('categorias/{id}','CategoriaController@index');


Route::get('admin',function(){return view('admin.index');});
// Configuracion
Route::get('configuracion','ConfiguracionController@index');
    //Slider
Route::get('eliminar/slider/{slider}','SliderController@delete');  

//Articulo Admin
Route::post('crear/articulo','ArticuloController@store');
Route::get('articulos','ArticuloController@create');
Route::get('articulos/crear',function(){ return view('admin.articulos.crear'); });
//Articulos web
Route::get('articulo/show','Web\ArticuloController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

