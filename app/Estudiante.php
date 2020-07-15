<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
   public $incrementing = false;
   protected $primaryKey= 'carne';
   /*Colocamos tipo protegidos a todos los atributos*/
   protected $fillabel=['carne','nombres','apellidos','edad','dui','direccion','email','telefono'];

   public function getRouteKeyName(){
   		return 'carne';
   }


   public function carrera(){
   	return $this->belongsTo(Carrera::class,'codigo');
   }


   public function sexo(){
      return $this->belongsTo(Sexo::class);
   }

   public function inscripciones(){
      return $this->hasMany(Inscripcion::class);
   }

   public function municipio(){
      return $this->belongsTo(Municipio::class);
   }

}
