<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prorroga extends Model
{
    protected $fillabel=['fecha_solicitud','carne','estado'];

   public function getRouteKeyName(){
   		return 'id';
   }
   /*Relación de N estudiantes */
   public function estudiantes(){
   	return $this->hasMany(Estudiante::class);
   }
}


