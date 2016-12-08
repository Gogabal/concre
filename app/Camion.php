<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Camion extends Model
{
    protected $table = 'camiones';
    protected $dates = ['deleted_at'];
    protected $fillable = ['patente','marca','modelo','descripcion','origen','created_at','updated_at','deleted_at'];

    public function ventas(){
        return $this->hasMany('App\Venta');

    }
}
