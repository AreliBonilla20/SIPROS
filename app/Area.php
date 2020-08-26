<?php

namespace App;

use App\AreasCarreras;
use App\Area;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
	protected $fillable=['area_interes'];

  public function getRouteKeyName(){
      return 'id';
   }
  public function areas(){
      return $this->belongsToMany(Area::class,'areas_carreras')->withPivot('area_id');
    }

      public function estudiantes(){
      return $this->hasMany(Estudiante::class);
   }
        

    public static function areas($id){
        $areas=DB::table('areas')->join('areas_carreras','areas.id','=','areas_carreras.area_id')
        ->where('areas_carreras.codigo','=',$id)
        ->select('areas.area_interes')->get();

        return $areas;
      }
      /* public static function areas($id){ 
    return Area::where('codigo','=',$id)->get();
   }*/
   
}
