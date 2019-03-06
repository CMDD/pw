<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($param = '/'){
        if ($param == 'administrador') {
           return view('admin.index');
        }
        return view('index');
    }
}
