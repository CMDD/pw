<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticuloController extends Controller
{
    public function show(){
        return view('articulo');
    }
    public function index(){
        return view('blog');
    }
}
