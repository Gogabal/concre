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
    
}
