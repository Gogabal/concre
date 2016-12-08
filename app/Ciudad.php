<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','comuna_id','id'];

    public function comuna(){
    	return $this->belongsTo('App\Comuna');

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
    
}