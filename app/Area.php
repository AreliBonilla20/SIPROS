<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $fillable=['nombreArea'];

    public function inscripciones(){
   	return $this->hasMany(Inscripcion::class);
   }
}
