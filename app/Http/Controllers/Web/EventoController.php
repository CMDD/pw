<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
}
