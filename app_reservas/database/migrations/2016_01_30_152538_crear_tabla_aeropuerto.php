<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAeropuerto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aeropuerto', function (Blueprint $table) {
            $table->increments('id_aero');
            $table->string('nombre_aero', 100);
            $table->string('ciudad_aero', 100);
            $table->string('pais_aero', 100);
            $table->boolean('estado_aero');
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
        Schema::drop('aeropuerto');
    }
}