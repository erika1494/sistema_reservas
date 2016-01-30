<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTipoVuelo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_vuelo', function (Blueprint $table) {
            $table->increments('id_tip');
            $table->string('descripcion_tip', 50);
            $table->decimal('costo_tip', 10, 2);
            $table->boolean('estado_tip');
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
        Schema::drop('tipo_vuelo');
    }
}