<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Detalleventa extends Model
{
    protected $table = 'ventas';
    protected $dates = ['deleted_at'];
    protected $fillable = [
    					'venta_id','distancia_medida','distancia_real',
    					'hora_obra','numero_sello','ubicacion','modalidad','salida_planta',
    					'termino_descarga','llegada_obra','salida_obra','inicio_descarga',
    					'regreso_planta','observaciones',
    					'created_at','updated_at','deleted_at'];

   	public function venta(){
   		return $this->belongsTo('App\Venta');
   	}
}
