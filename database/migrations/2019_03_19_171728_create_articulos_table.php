<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->string('slug');
            $table->text('descripcion');
            $table->string('image');


            $table->integer('emisora_id')->unsigned()->nullable();
            $table->foreign('emisora_id')
                  ->references('id')
                  ->on('emisoras')
                  ->onDelete('cascade');

            $table->integer('contenido_id')->unsigned()->nullable();
            $table->foreign('contenido_id')
                  ->references('id')
                  ->on('contenidos')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
