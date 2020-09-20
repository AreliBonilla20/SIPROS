<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prorroga extends Model
{
    protected $fillabel = ['fecha_solicitud', 'carne', 'estado'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function estudiantes()
    {
        return $this->hasMany(Estudiante::class);
    }
}
