<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function getSliders($id){
        return $slider = Slider::where('emisora_id',$id)->get();
    }

    public function store(Request $request){
        $slider = new Slider();
        $slider->mostrar_boton = (bool)$request->mostrar_boton;
        $slider->texto_boton = $request->texto_boton;
        $slider->url_boton = $request->url_boton;
        $slider->image = $request->file('image')->store('sliders');
        $slider->emisora_id = 1;
        $slider->save();
        

        return $request;
    }
}
