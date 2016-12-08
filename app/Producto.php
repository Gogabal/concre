<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Producto extends Model
{
    protected $table = 'productos';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    					'nombre','numero_formula','detalle',
    					'water','ar_lofer1','ar_lofer2','gv_lofer1','ad_p121','ad_mic_air',
    					'created_at','updated_at','deleted_at'];

    public function listaprecios(){
    	return $this->hasMany('App\Listaprecio');

    }
}
