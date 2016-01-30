<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAerolinea extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aerolinea', function (Blueprint $table) {
            $table->increments('id_aer');
            $table->string('nombre_aer', 100);
            $table->string('logo_aer', 300);
            $table->string('razon_social_aer', 100);
            $table->boolean('estado_aer');
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
        Schema::drop('aerolinea');
    }
}
