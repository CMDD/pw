<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class ContenidoController extends Controller
{

    //web


    // Api
    public function index($id){
        return Contenido::where('emisora_id',$id)->where('delete',false)->get();
    }
    public function cambiarEstadoContenido(Request $request){
        $contenido = Contenido::find($request->id);
        $contenido->estado = $request->estado;
        $contenido->save();
        return '200';
    }
    public function delete(Request $request){
        $contenido = Contenido::find($request->id);
        $contenido->delete = true;
        $contenido->save();
        return 200;
    }

    public function addContenido(Request $request){
        $cont = new Contenido();
        $cont->nombre = $request->contenido;      
         $cont->emisora_id = $request->emisora_id;
         $cont->save();
        return 200;
    }
}
