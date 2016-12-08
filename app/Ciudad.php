<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    protected $fillable = ['nombre','comuna_id','id'];

    public function comuna(){
    	return $this->belongsTo('App\Comuna');

    }
    
}
