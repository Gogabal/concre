<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
   protected $table='comunas';
   protected $fillable = ['id', 'nombre', 'region_id'];

   public function region(){
   		return $this->belongsTo('App\Region');

   }
   public function ciudades(){
   		return $this->hasMany('App\Ciudad');

   }
}
