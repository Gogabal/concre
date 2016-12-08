<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('numero_formula');
            $table->string('detalle');
            $table->float('water');
            $table->float('ar_lofer1');
            $table->float('ar_lofer2');
            $table->float('gv_lofer1');
            $table->float('ad_p121');
            $table->float('ad_mic_air');
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
        Schema::drop('productos');
    }
}
