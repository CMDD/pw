<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Contenido;

class ContenidoController extends Controller
{
    public function index($id){
        return Contenido::where('emisora_id',$id)->get();
    }
    public function cambiarEstadoContenido(Request $request){
        $contenido = Contenido::find($request->id);
        $contenido->estado = $request->estado;
        $contenido->save();
        return '200';
    }
}
