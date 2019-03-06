<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
    public function index($id){
        return Categoria::where('emisora_id',$id)->get();
    }
    public function cambiarEstadoCategoria(Request $request){
        $categoria = Categoria::find($request->id);
        $categoria->estado = $request->estado;
        $categoria->save();
        return '200';
    }
    public function store(Request $request){
        $categoria = new Categoria();
        $categoria->nombre = $request->nombreCategoria;
        $categoria->descripcion = $request->descripcionCategoria;
        $categoria->emisora_id = 1;
        $categoria->subcategoria = $request->permitirSubcategoria;
        $categoria->save();
        return '200';
    }
}
