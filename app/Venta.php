<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    protected $table = 'ventas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    					'folio_guia','fecha_venta','cantidad',
    					'unidad_medida','precio_unitario','total_neto','iva','total',
    					'estado','user_id','cliente_id','obra_id','planta_id',
    					'conductor_id','camion_id',
    					'created_at','updated_at','deleted_at'];


    public function user(){
    	return $this->belongsTo('App\User');

    }

    public function cliente(){
    	return $this->belongsTo('App\Cliente');

    }

    public function obra(){
    	return $this->belongsTo('App\Obra');

    }

    public function planta(){
    	return $this->belongsTo('App\Planta');

    }

    public function conductor(){
    	return $this->belongsTo('App\Conductor');

    }

    public function camion(){
    	return $this->belongsTo('App\Camion');

    }

    public function detalleventas(){
    	return $this->hasMany('App\Detalleventa');

    }

}