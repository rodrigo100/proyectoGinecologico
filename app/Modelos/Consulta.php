<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Consulta extends Model
{
     protected $table = 'consultas';
     protected $primaryKey = 'id_consulta';

    public $fillable = [
    	 
    	 'fecha','hora','detalle','id_paciente', 
    	];

  protected $dates=['fecha'];

public function setFechaAttribute($value)
{
  $date = date('Y-m-d' , strtotime($value)); 
  $this->attributes['fecha']=Carbon::parse($date);

}



// public function setCreatedAtAttribute($value)
// {
  
//    $this->attributes['created_ad']=Carbon::now();
// }

public function paciente()
{
	 return $this->belongsTo('App\Modelos\Paciente',
            'id_paciente', 'id_paciente');

    //priemro viene el id quye hace referencia al foreng key luego

}

public function getFechahoraAttribute()
{
  return $this->attributes['fecha'].' Hrs.'.
  $this->attributes['hora'];

}







}
