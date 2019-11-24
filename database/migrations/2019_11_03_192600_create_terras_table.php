<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terras', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->String('ter_dimensao');
            $table->String('ter_duat');
            $table->Boolean('ter_rio');
            $table->String('ter_culturas');
            $table->String('ter_motivo');
            $table->integer('user_id')->unsigned()->default(1);
            $table->foreign('user_id')->references('id')->on('users');
            $table->UnsignedBigInteger('distrito_id')->default(1);
            $table->foreign('distrito_id')->references('id')->on('distritos');
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
        Schema::dropIfExists('terras');
    }
}
