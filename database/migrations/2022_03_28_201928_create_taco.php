<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taco', function (Blueprint $table) {
            $table->id();
            $table->text('Titulo');
            $table->text('Subtitulo');
            $table->text('Parrafo1');
            $table->text('Parrafo2');
            $table->text('Parrafo3');
            $table->text('Parrafo4');
            $table->text('Imagen');
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
        Schema::dropIfExists('taco');
    }
};
