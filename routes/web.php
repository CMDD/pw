<?php



Route::get('/{param?}','HomeController@index');

Route::get('articulos',function(){ return view('admin.articulos.index'); });
Route::get('articulos/crear',function(){ return view('admin.articulos.crear'); });
