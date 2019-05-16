<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado')->nullable();
            
            $table->string('nombre')->nullable();
            $table->string('fecha')->nullable();
            
            $table->string('hora_desde')->nullable();
            $table->string('hora_hasta')->nullable();
            $table->string('lugar')->nullable();
            $table->string('invitados')->nullable();
            $table->text('descripcion')->nullable();
            $table->string('imagen')->nullable();
            
            $table->integer('emisora_id')->unsigned()->nullable();
            $table->foreign('emisora_id')
                  ->references('id')
                  ->on('emisoras')
                  ->onDelete('cascade');

            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
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
        Schema::dropIfExists('eventos');
    }
}
