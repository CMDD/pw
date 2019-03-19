<?php



Route::get('/','HomeController@index');
Route::get('/emisora/{emisora}','HomeController@index');
Route::get('/articulo',function(){
    return view('articulo');
});

Route::get('admin',function(){return view('admin.index');});
Route::get('configuracion','ConfiguracionController@index');
//Articulo
Route::post('crear/articulo','ArticuloController@create');

Route::get('articulos','ArticuloController@index');
Route::get('articulos/crear',function(){ return view('admin.articulos.crear'); });
