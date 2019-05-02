<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use Auth;

class ConfiguracionController extends Controller
{
    public function index(){
        $sliders = Slider::where('emisora_id',Auth::User()->emisora_id)->orderBy('id','DEC')->get();
        return view('admin.configuracion')->with('sliders',$sliders);
    }
}
