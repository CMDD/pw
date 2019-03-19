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

        $val = ($request->mostrar_boton === 'true') ? true : false;
       
        $slider = new Slider();
        $slider->mostrar_boton = $val;
        $slider->texto_boton = $request->texto_boton;
        $slider->url_boton = $request->url_boton;
        $slider->image = $request->file('image')->store('sliders');
        $slider->emisora_id = 1;
        $slider->save();
        

        return 200;
    }
}
