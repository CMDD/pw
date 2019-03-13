<?php

use Illuminate\Database\Seeder;
use App\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = 'Real Audio';
        $categoria->emisora_id = 1;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Oración';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Asamblea';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Eventos';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Donación';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Librerías';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Shalom';
        $categoria->emisora_id = 1;
        $categoria->subcategoria = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre = 'Medellin';
        $categoria->emisora_id = 2;
        $categoria->save();
    }
}
