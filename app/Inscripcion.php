<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $fillable=['fechaInscripcion'];

    public function getRouteKeyName(){
      return 'id';
   }

   public function estudiante(){
    return $this->belongsTo(Estudiante::class,'carne');
   }
   
   public function area(){
    return $this->belongsTo(Area::class);
   }
}