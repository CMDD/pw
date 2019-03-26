<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Auth;

class EmisoraController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        return view('index')->with('sliders',$sliders);
    }

    public function emisora(){

        $sliders = Slider::all();
        return view('index')->with('sliders',$sliders);
    }
}
