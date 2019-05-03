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
        $articulos = Articulo::all();
        return view('admin.articulos.lista')->with('articulos',$articulos);
    }
    public function editar($id){
        $contenidos = Contenido::where('emisora_id',1)->where('delete',false)->get();
        $articulo = Articulo::find($id);
        return view('admin.articulos.editar')->with('articulo',$articulo)->with('contenidos',$contenidos);
    }



    public function create(){
        $contenidos = Contenido::where('emisora_id',1)->where('delete',false)->get();
        return view('admin.articulos.crear')->with('contenidos',$contenidos);
    }



    public function actualizar(Request $request,$id){
        $articulo = Articulo::find($id);
        $articulo->titulo = $request->titulo;
        $articulo->autor = $request->autor;
        $articulo->slug = $request->slug;
        $articulo->descripcion  = $request->descripcion;
        $articulo->descripcion_corta  = $request->descripcion_corta;
        $articulo->slug = $request->slug;
        $articulo->emisora_id = Auth::User()->id;
        $articulo->contenido_id = $request->contenido;
        if($request->file('file')){
            $articulo->image = $request->file('file')->store('imgArticulos');
        }
       
        $articulo->save();
        return back();

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
