<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //protected $fillabel=['fechaInscripcion'];

  protected $fillabel=['nombre','direccion'];
  public function getRouteKeyName(){
   		return 'id';
   }
}
