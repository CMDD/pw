<?php

namespace App\Http\Controllers;

use App\Slider;
use Auth;
use Request;

class EmisoraController extends Controller
{

     public function __construct(){
         
     }

    public function index(){
        
        $sliders = Slider::all();
        return view('index')->with('sliders',$sliders);
    }

    public function emisora($emisora){
        \Session::put('emisora',$emisora);
        switch ($emisora) {
            case 'bogota':
            $sliders = Slider::where('emisora_id',1)->get();
            return view('index')->with('sliders',$sliders);
                break;
            case 'medellin':
            $sliders = Slider::where('emisora_id',2)->get();
            return view('index')->with('sliders',$sliders);
                break;
            case 'cartagena':
            $sliders = Slider::where('emisora_id',3)->get();
            return view('index')->with('sliders',$sliders);
                break;
            case 'barranquilla':
            $sliders = Slider::where('emisora_id',4)->get();
            return view('index')->with('sliders',$sliders);
                break;
            case 'ibague':
            $sliders = Slider::where('emisora_id',5)->get();
            return view('index')->with('sliders',$sliders);
                break;
            
            default:
                # code...
                break;
        }
        

       
    }
}
