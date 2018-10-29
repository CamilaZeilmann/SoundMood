<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEstiloMusicaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estilomusica', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estilo_id')->unsigned();
            $table->integer('musica_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('estilomusica', function($table){
            $table->foreign('estilo_id')->references('id')->on('estilos');
            $table->foreign('musica_id')->references('id')->on('musicas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estilomusica');
    }
}
