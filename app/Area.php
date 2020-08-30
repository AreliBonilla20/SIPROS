<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $fillable=['area_interes'];

  public function getRouteKeyName(){
      return 'id';
   }
  
      public function estudiantes(){
      return $this->hasMany(Estudiante::class);
   }
      
    public function carreras(){
      
      return $this->belongsToMany(Carrera::class,'areas_carreras')->withPivot('codigo');
    }

  /*  public static function obtenerAreas($id){
        $areas=DB::table('areas')->join('areas_carreras','areas.id','=','areas_carreras.area_id')
        ->where('areas_carreras.codigo','=',$id)
        ->select('areas.area_interes')->get();

        return $areas;
      }
      public static function areas($id){ 
    return Area::where('codigo','=',$id)->get();
   }*/
   
}
