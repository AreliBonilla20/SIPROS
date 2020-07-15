<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
	protected $fillabel =['sexo'];

	public function getRouteKeyName(){
   		return 'id';
   }
    public function estudiante(){
   	return $this->hasMany(Estudiante::class);
   }//
}
