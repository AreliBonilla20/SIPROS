<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignacion extends Model
{
    protected $table      = 'asignacions';
    protected $primaryKey = 'id';

    protected $fillable = ['carne', 'id_proyecto', 'horas_asignadas', 'estado_asignacion'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'carne', 'carne');
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'id_proyecto', 'id');
    }
}
