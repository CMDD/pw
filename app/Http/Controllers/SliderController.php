<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function getSliders($id){
        return $slider = Slider::where('emisora_id',$id)->get();
    }
}
