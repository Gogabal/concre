<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    protected $table='regiones';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','id'];

    public function comunas(){
    	return $this->hasMany('App\Comuna');
    }

    public function clientes(){
        return $this->hasMany('App\Cliente');

    }
    
    public function obras(){
        return $this->hasMany('App\Obra');

    }

    public function plantas(){
        return $this->hasMany('App\Planta');

    }
    public function scopeSearchRegion($query, $nombre){
        return $query->where('nombre', 'LIKE', "%$nombre%");
    }
}
