<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    protected $table      = 'proyectos';
    protected $primaryKey = 'id';

    protected $fillable = ['nombre', 'area_de_conocimiento', 'objetivos', 'logros', 'id_institucion', 'cantidad_de_estudiantes', 'nombre_encargado', 'telefono', 'email', 'codigo_carrera', 'estado_proyecto', 'estudiantes_inscritos'];

    public function institucion()
    {
        return $this->belongsTo(Institucion::class, 'id_institucion', 'id');
    }

    public function carrera()
    {
        return $this->belongsTo(Carrera::class, 'codigo_carrera', 'codigo');
    }
}
