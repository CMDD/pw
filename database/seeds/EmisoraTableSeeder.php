<?php

use Illuminate\Database\Seeder;
use App\Emisora;

class EmisoraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emisora = new Emisora();
        $emisora->name = 'Bogota';
        $emisora->save();

        $emisora = new Emisora();
        $emisora->name = 'Medellín';
        $emisora->save();

        $emisora = new Emisora();
        $emisora->name = 'Cartagena';
        $emisora->save();

        $emisora = new Emisora();
        $emisora->name = 'Barranquilla';
        $emisora->save();

        $emisora = new Emisora();
        $emisora->name = 'Ibagué';
        $emisora->save();
    }
}
