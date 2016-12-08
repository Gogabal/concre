<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleventasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas',function(Blueprint $table){

            $table->increments('id');
            $table->integer('venta_id')->unsigned();
            $table->float('distancia_medida');
            $table->float('distancia_real');
            $table->dateTime('hora_obra');
            $table->integer('numero_sello');
            $table->string('ubicacion');
            $table->string('modalidad');
            $table->dateTime('salida_planta');
            $table->dateTime('termino_descarga');
            $table->dateTime('llegada_obra');
            $table->dateTime('salida_obra');
            $table->dateTime('inicio_descarga');
            $table->dateTime('regreso_planta');
            $table->string('observaciones');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('venta_id')->references('id')->on('ventas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('detalleventas');
    }
}
