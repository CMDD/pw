<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;
use App\Articulo;
use Auth;

class ArticuloController extends Controller
{
    public function index(){

        return 'hola index';
    }

    public function lista(){

        return view('admin.articulos.lista');
    }



    public function create(){
        $contenidos = Contenido::where('emisora_id',1)->where('delete',false)->get();
        return view('admin.articulos.crear')->with('contenidos',$contenidos);
    }



    public function store(Request $request){
        $articulo = new Articulo();
        $articulo->titulo = $request->titulo;
        $articulo->autor = $request->autor;
        $articulo->slug = $request->slug;
        $articulo->descripcion  = $request->descripcion;
        $articulo->descripcion_corta  = $request->descripcion_corta;
        $articulo->slug = $request->slug;
        $articulo->emisora_id = Auth::User()->id;
        $articulo->contenido_id = $request->contenido;
        $articulo->image = $request->file('file')->store('imgArticulos');
        $articulo->save();
        return back();

    }
    public function delete(Articulo $articulo){

        return $articulo;
    }


    // Api
    public function articulos($id){
        
        return Articulo::where('emisora_id',$id)->orderBy('id','DESC')->get();
    }
}
