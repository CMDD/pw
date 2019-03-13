<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('estado')->default(true);
            $table->string('text_boton')->nullable();
            $table->string('url_boton')->nullable();
            $table->string('image');
            $table->string('title')->nullable();

            $table->integer('emisora_id')->unsigned()->nullable();
            $table->foreign('emisora_id')
                  ->references('id')
                  ->on('emisoras')
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
        Schema::dropIfExists('sliders');
    }
}
