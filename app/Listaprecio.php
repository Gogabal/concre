<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Listaprecio extends Model
{
    protected $table = 'ventas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    					'cliente_id','producto_id','precio_unitario',
    					'created_at','updated_at','deleted_at'];

    public function cliente(){
    	return $this->belongsTo('App\Cliente');

    }

    public function producto(){
    	return $this->belongsTo('App\Producto');

    }
}
