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
    
}
