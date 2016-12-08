<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddComunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comunas',function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->integer('region_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('region_id')->references('id')->on('regiones')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('comunas');
    }
}
