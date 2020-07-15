<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{

    public $incrementing = false;
    protected $primaryKey = 'codigo';
   /*Colocamos tipo protegidos a todos los atributos*/
   protected $fillabel=['codigo','nombreCarrera'];

   /*Función que retorna el código de la carrera a la que pertenece el estudiante, ya que será la llave primaria en la base de datos que por medio de esta se podra consultar el expediente del estudiante*/
   public function getRouteKeyName(){
   		return 'codigo';
   }

   /*Relacion de 1 a 1..* carrera->Estudiante*/
   public function estudiantes(){
   	return $this->hasMany(estudiante::class);
   }
}
