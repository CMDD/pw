<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slider = new Slider();
        $slider->image = "img/slide-example-2.jpg";
        $slider->emisora_id = 1;
        $slider->save();

        $slider = new Slider();
        $slider->image = "img/slide-example.jpg";
        $slider->emisora_id = 1;
        $slider->save();
        
    }
}
