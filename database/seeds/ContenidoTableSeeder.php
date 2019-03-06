<?php

use Illuminate\Database\Seeder;
use App\Contenido;

class ContenidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cont = new Contenido();
        $cont->nombre='Eventos';
        $cont->emisora_id = 1;
        $cont->estado = true;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='Librerías';
        $cont->emisora_id = 1;
        $cont->estado = true;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='Donaciones';
        $cont->emisora_id = 1;
        $cont->estado = true;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='Señal en vivo';
        $cont->emisora_id = 1;
        $cont->estado = true;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='Shalom';
        $cont->emisora_id = 1;
        $cont->estado = false;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='C Medellin';
        $cont->emisora_id = 2;
        $cont->estado = true;
        $cont->save();

        $cont = new Contenido();
        $cont->nombre='C Medellin';
        $cont->emisora_id = 2;
        $cont->estado = true;
        $cont->save();
    }
}
