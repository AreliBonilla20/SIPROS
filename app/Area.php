<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $fillable=['nombre_area'];

    public function inscripciones(){
   	return $this->hasMany(Inscripcion::class);
   }

   public function carrera(){
   	return $this->belongsTo(Carrera::class,'codigo');
   }
}
