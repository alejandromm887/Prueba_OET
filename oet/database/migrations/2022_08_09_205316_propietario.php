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
        Schema::create('propietario', function (Blueprint $table) {
            $table->id('numero_cedula',10)->nullable(false)->comment('Numero de cédula del propietario');
            $table->string('primer_nombre',255)->nullasble(false)->comment('Primer nombre del propietario');
            $table->string('segundo_nombre',255)->nullable(true)->comment('Segundo nombre del propietario');
            $table->string('apellidos',255)->nullable(false)->comment('Apellidos del propietario');
            $table->string('direccion',255)->nullable(false)->comment('Direccion del propietario');
            $table->string('telefono',15)->nullable(false)->comment('Numero de teléfono del propietario');
            $table->string('ciudad',255)->nullable(false)->comment('Ciudad del propietario');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('propietario');
    }
};
