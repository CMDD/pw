<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class ConfiguracionController extends Controller
{
    public function index(){
        $sliders = Slider::where('emisora_id',1)->get();
        return view('admin.configuracion')->with('sliders',$sliders);
    }
}
