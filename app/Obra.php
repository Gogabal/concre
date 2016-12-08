<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Obra extends Model
{
    protected $table = 'obras';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    			'nombre','direccion','zona',
    			'cliente_id','ciudad_id','comuna_id','region_id',
    			'created_at','updated_at','deleted_at'];

    public function cliente(){
        return $this->belongsTo('App\Cliente');

    }
    
    public function ventas(){
        return $this->hasMany('App\Venta');

    }

    public function ciudad(){
        return $this->belongsTo('App\Ciudad');

    }

    public function comuna(){
        return $this->belongsTo('App\Comuna');

    }

    public function region(){
        return $this->belongsTo('App\Region');

    }
}
