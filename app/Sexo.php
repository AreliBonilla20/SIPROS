<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
	protected $fillabel =['id','sexo'];

	public function getRouteKeyName(){
   		return 'id';
   }
    public function estudiante(){
   	return $this->hasMany(estudiante::class);
   }//
}
