<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('razon_social');
            $table->integer('rut');
            $table->integer('cod_rut');
            $table->string('giro');
            $table->string('email');
            $table->string('telefono');
            $table->string('direccion');
            $table->integer('ciudad_id')->unsigned()->nullable();
            $table->integer('comuna_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('set null');
            $table->foreign('comuna_id')->references('id')->on('comunas')->onDelete('set null');
            $table->foreign('region_id')->references('id')->on('regiones')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clientes');
    }
}
