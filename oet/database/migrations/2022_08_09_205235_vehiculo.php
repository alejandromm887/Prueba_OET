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
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->string('placa',7)->nullable(false)->comment('Placa del vehículo');
            $table->string('color',255)->nullable(false)->comment('Color del vehículo');
            $table->string('marca',255)->nullable(false)->comment('Marca del vehículo');
            $table->string('tipo_vehiculo',255)->nullable(false)->comment('Tipo del vehículo');      
            
            $table->primary('placa');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculo');
    }
};
