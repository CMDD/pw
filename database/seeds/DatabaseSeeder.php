<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(EmisoraTableSeeder::class);
         $this->call(ContenidoTableSeeder::class);
         $this->call(CategoriaTableSeeder::class);
    }
}
