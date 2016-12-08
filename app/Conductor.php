<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Conductor extends Model
{
    protected $table = 'conductores';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    			'rut','cod_rut','nombre',
    			'apellido_paterno','apellido_materno',
    			'telefono','direccion',
    			'created_at','updated_at','deleted_at'];

    public function ventas(){
        return $this->hasMany('App\Venta');

    }
}
