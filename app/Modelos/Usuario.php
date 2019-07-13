<?php

namespace App\Modelos;

use Illuminate\Foundation\Auth\User;

class Usuario extends User
{
     protected $table = 'usuario';
     protected $primaryKey = 'id_usuario';

    public $fillable = [
    	 
    	 'username', 'password', 
    	];



   public function paciente()
   {
   	  return $this->hasMany('App\Modelos\Paciente',
            'id_usuario', 'id_usuario');
   }

  public function setPasswordAttribute($value)
    {
      if($value !== null)
        $this->attributes['password'] = bcrypt($value);
    }

    public function getNombreAttribute()
    {
        return $this->attributes['username'];
           
    }
}
