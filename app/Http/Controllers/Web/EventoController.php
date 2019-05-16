<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class EventoController extends Controller
{
    public function index($id){
        switch ($id) {
            case '1':
                $nombre = 'Bogotá';
                return view('eventos')->with('nombre',$nombre);
                break;
            case '2':
                $nombre = 'Medellín';
                return view('eventos')->with('nombre',$nombre);
                break;
            
            default:
                # code...
                break;
        }

        return view('eventos');
    }

    public function store(Request $request){

        $evento = new Evento();
        $evento->nombre = $request->evento;
        $evento->fecha = $request->fecha;
        $evento->hora_desde = $request->hora_desde;
        $evento->hora_hasta = $request->hora_hasta;
        $evento->lugar = $request->lugar;
        $evento->invitados = $request->invitados;
        $evento->descripcion = $request->descripcion;
        if($request->file('file')){
            // $evento->imagen = $request->file('file')->store('imgEventos');
        }

        return $request;

    }
}
