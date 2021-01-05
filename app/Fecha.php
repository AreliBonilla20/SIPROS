<?php

namespace App;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Fecha extends Model
{
    //
    public static function fechaTexto($fecha){
    	$fecha_actual = str_replace("/","-",$fecha);
        $nueva_fecha = date("d-m-Y",strtotime($fecha_actual));
        $fecha = strftime("%d de %B de %Y",strtotime($nueva_fecha));
        return $fecha;
    }

    public static function fecha_hoy(){
        setlocale(LC_TIME, "Spanish");
        $fecha_actual    = Carbon::now();
        $fecha_actual    = Fecha::fechaTexto($fecha_actual);

        return $fecha_actual;
    }
}
