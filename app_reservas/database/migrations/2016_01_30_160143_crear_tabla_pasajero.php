<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPasajero extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasajero', function (Blueprint $table) {
            $table->increments('id_pas');
            $table->string('cedula_pas', 50);
            $table->string('apellidos_pas', 100);
            $table->string('nombres_pas', 100);
            $table->string('tipo_pas', 20);
            $table->date('fecha_nac_pas');
            $table->string('comprobante_pas', 300);
            $table->boolean('estado_pas');
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
        Schema::drop('pasajero');
    }
}