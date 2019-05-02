<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Articulo;
use App\Contenido;

class ArticuloController extends Controller
{
    public function show($id){
        $articulo = Articulo::find($id);
        return view('articulo')->with('articulo',$articulo);
    }
    public function index($id){
        $contenido = Contenido::find($id);
        $articulos = Articulo::where('contenido_id',$id)->get();
        return view('blog')->with('articulos',$articulos)->with('contenido',$contenido);
    }
}
