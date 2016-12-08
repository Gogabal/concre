<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Planta extends Model
{
    protected $table = 'plantas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    				'nombre','direccion','ciudad_id',
    				'comuna_id','region_id','created_at',
    				'updated_at','deleted_at'];

    public function ciudad(){
    	return $this->belongsTo('App\Ciudad');

    }

    public function comuna(){
    	return $this->belongsTo('App\Comuna');

    }

    public function region(){
    	return $this->belongsTo('App\Region');

    }

    public function ventas(){
        return $this->hasMany('App\Venta');

    }
}
