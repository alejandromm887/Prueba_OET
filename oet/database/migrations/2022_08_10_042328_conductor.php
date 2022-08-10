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
        Schema::create('conductor', function (Blueprint $table) {
            $table->id('numero_cedula',10)->nullable(false)->comment('Numero de cédula del conductor');
            $table->string('primer_nombre',255)->nullable(false)->comment('Primer nombre del conductor');
            $table->string('segundo_nombre',255)->nullable(true)->comment('Segundo nombre del conductor');
            $table->string('apellidos',255)->nullable(false)->comment('Apellidos del conductor');
            $table->string('direccion',255)->nullable(false)->comment('Direccion del conductor');
            $table->string('telefono',15)->nullable(false)->comment('Numero de teléfono del conductor');
            $table->string('ciudad',255)->nullable(false)->comment('Ciudad del conductor');
            $table->string('vehiculo',7)->nullable(false)->comment('Quien conduce este vehículo.');
            $table->foreign('vehiculo')->references('placa')->on('vehiculo')->onDelete('cascade');  

         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conductor');
    }
};
