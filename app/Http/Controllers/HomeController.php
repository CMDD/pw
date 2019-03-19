<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class HomeController extends Controller
{
    public function index($emisora = '/'){

        switch ($emisora) {
            case '/':
                $sliders = Slider::where('emisora_id',1)->get();
                
                return view('index')->with('sliders',$sliders);
                break;
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
        return view('index');
    }
}
