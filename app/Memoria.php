<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Memoria extends Model
{
    protected $table='memorias';
    protected $primaryKey='id';

    protected $fillable = ['asignacion_id','fecha_inicio','fecha_fin','docente_benef_m','docente_benef_f', 'personal_benef_m', 'personal_benef_f', 'estudiante_benef_m','estudiante_benef_f','otros_benef_m','otros_benef_f','inversion_institucion','inversion_estudiante','horas_completadas','estado_constancia','total_benef_m','total_benef_f','total_benef'];


    public function asignacion(){
        return $this->belongsTo(Asignacion::class, 'asignacion_id','id');
    }
}