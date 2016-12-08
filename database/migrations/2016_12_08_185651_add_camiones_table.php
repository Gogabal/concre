<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('camiones', function(Blueprint $table){
            $table->increments('id');
            $table->string('patente');
            $table->string('marca');
            $table->string('modelo');
            $table->string('descripcion');
            $table->enum('origen',['propio','externo']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('camiones');
    }
}
