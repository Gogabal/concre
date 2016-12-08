<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function(Blueprint $table){
            $table->increments('id');
            $table->integer('folio_guia');
            $table->date('fecha_venta');
            $table->integer('cantidad');
            $table->float('unidad_medida');
            $table->float('precio_unitario');
            $table->float('total_neto');
            $table->float('iva');
            $table->float('total');
            $table->enum('estado',['iniciado','finalizado']);
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('cliente_id')->unsigned()->nullable();
            $table->integer('obra_id')->unsigned()->nullable();
            $table->integer('planta_id')->unsigned()->nullable();
            $table->integer('conductor_id')->unsigned()->nullable();
            $table->integer('camion_id')->unsigned()->nullable();

            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('set null');
            $table->foreign('obra_id')->references('id')->on('obras')->onDelete('set null');
            $table->foreign('planta_id')->references('id')->on('plantas')->onDelete('set null');
            $table->foreign('conductor_id')->references('id')->on('conductores')->onDelete('set null');
            $table->foreign('camion_id')->references('id')->on('camiones')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
