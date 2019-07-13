<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Paciente extends Model
{
     protected $table = 'pacientes';
     protected $primaryKey = 'id_paciente';

    public $fillable = [
    	 
    	 'ci','nombre', 'ap_paterno','ap_materno','fecha_nac','estado_civil','direccion','telefono','id_usuario',
    	];

      protected $dates=['fecha_nac'];

 

public function setFechaNacAttribute($value)
{
  
   $date = date('Y-m-d' , strtotime($value)); 
  $this->attributes['fecha_nac']=Carbon::parse($date);
  // 
  // 
  // 
  // 
  // $date=Carbon::now();
  // $date = $date->format('Y-m-d');
  //   $this->attributes['fecha_nac']=$date;
}


public function usuario()
{
	  return $this->belongsTo('App\Modelos\Usuario',
            'id_usuario', 'id_usuario');

}

public function consulta()
{
	  return $this->hasMany('App\Modelos\Consulta',
            'id_paciente', 'id_paciente');
}

public function getNombreCompletoAttribute()
{
   return  $this->attributes['ap_paterno'].' '.
   $this->attributes['ap_materno'].' '.
   $this->attributes['nombre'];
}
}
