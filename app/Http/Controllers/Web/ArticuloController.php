<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Articulo;

class ArticuloController extends Controller
{
    public function show($id){
        $articulo = Articulo::find($id);
        return view('articulo')->with('articulo',$articulo);
    }
    public function index(){
        return view('blog');
    }
}
