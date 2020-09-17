<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Asignacion extends Model
{
    protected $table='asignacions';
    protected $primaryKey='id';

    protected $fillable = ['carne','id_proyecto','horas_asignadas','estado_asignacion'];


    public function estudiante(){
    	return $this->belongsTo(Estudiante::class, 'carne','carne');
    }

    public function proyecto(){
    	return $this->belongsTo(Proyecto::class, 'id_proyecto','id');
    }
    /*Función que retorna el proyecto que está asignado al estudiante*/
    public static function proyectos($carne){
    	$proyecto = DB::table('asignacions')
        ->join('proyectos','proyectos.id','=','asignacions.id_proyecto')
        ->join('institucions','institucions.id','=','proyectos.id_institucion')
        ->join('memorias','asignacions.id','=','memorias.asignacion_id')
        ->select('asignacions.horas_asignadas','proyectos.nombre as nombre_proyecto','proyectos.area_de_conocimiento','institucions.nombre as nombre_institucion','memorias.fecha_inicio','memorias.fecha_fin')
        ->where('asignacions.carne',$carne)
        ->get()->first();
        return $proyecto;
    }
}
