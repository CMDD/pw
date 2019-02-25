<?php



Route::get('/',function(){
  return view('index');
});


Route::get('administrador', function () {return view('admin.index');});
Route::get('articulos',function(){ return view('admin.articulos.index'); });
Route::get('articulos/crear',function(){ return view('admin.articulos.crear'); });
