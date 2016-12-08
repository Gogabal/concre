<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obras', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('direccion');
            $table->string('zona');
            $table->integer('cliente_id')->unsigned();
            $table->integer('ciudad_id')->unsigned()->nullable();
            $table->integer('comuna_id')->unsigned()->nullable();
            $table->integer('region_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
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
        Schema::drop('obras');
    }
}
