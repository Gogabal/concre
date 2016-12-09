<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    			'nombre','razon_social','rut',
    			'cod_rut','giro','email','telefono',
    			'direccion','ciudad_id','comuna_id','region_id',
    			'created_at','updated_at','deleted_at'];

    public function obras(){
        return $this->hasMany('App\Obra');

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

    public static function scopeSearchClienteNombre($query, $nombre){
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
