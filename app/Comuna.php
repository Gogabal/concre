<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comuna extends Model
{
   protected $table='comunas';
   protected $dates = ['deleted_at'];
   protected $fillable = ['id', 'nombre', 'region_id'];

   public function region(){
   		return $this->belongsTo('App\Region');

   }
   public function ciudades(){
   		return $this->hasMany('App\Ciudad');

   }
}
