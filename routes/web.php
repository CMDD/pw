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


Route::get('admin',function(){return view('admin.login');});
// Configuracion
Route::get('configuracion','ConfiguracionController@index');
    //Slider
Route::get('eliminar/slider/{slider}','SliderController@delete');  

//Articulo Admin
Route::post('autenticacion','UserController@autenticacion');
Route::get('logout','UserController@logout');
Route::post('crear/articulo','ArticuloController@store');
Route::get('lista/articulos','ArticuloController@lista');
Route::get('editar/articulo/{id}','ArticuloController@editar');
Route::post('actualizar/articulo/{id}','ArticuloController@actualizar');
Route::get('articulos','ArticuloController@create');
Route::get('articulos/crear',function(){ return view('admin.articulos.crear'); });
//Articulos web
Route::get('articulo/show/{id}','Web\ArticuloController@show');
Route::get('articulo/index/{id}','Web\ArticuloController@index');

//blog
Route::get('blog',function(){
    return view('blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

