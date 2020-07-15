<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{
   public $incrementing = false;
   protected $primaryKey= 'carne';
   /*Colocamos tipo protegidos a todos los atributos*/
   protected $fillabel=['carne','nombres','apellidos','edad','dui','direccionActual','direccionElectronica','telefonoFijoMovil'];

   public function getRouteKeyName(){
   		return 'carne';
   }


   public function carrera(){
   	return $this->belongsTo(carrera::class,'codigo');
   }


   public function sexo(){
      return $this->belongsTo(sexo::class);
   }

   public function inscripciones(){
      return $this->hasMany(inscripcion::class);
   }

}
