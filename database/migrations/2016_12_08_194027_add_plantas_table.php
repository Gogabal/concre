<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPlantasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantas', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
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
        Schema::drop('plantas');
    }
}
