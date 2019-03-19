<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contenido;

class ArticuloController extends Controller
{
    public function index(){

        $contenidos = Contenido::where('emisora_id',1)->where('delete',false)->get();
        
        return view('admin.articulos.index')->with('contenidos',$contenidos);
    }

    public function create(Request $request){

        return $request;

    }
}
