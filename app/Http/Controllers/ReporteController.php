<?php

namespace App\Http\Controllers;
use App;
use App\Estudiante;
use App\Institucion;
use App\Proyecto;
use App\Prorroga;
use App\Asignacion;
use App\Memoria;
use App\Fecha;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ReporteController extends Controller
{
    /*Función para generar el pdf de los estudiantes inscritos*/
     public function pdfExpedientes(Request $request){
        $estudiantes= [];
        $codigo_carreras = $request->get('codigo');
        $id_sexos = $request->get('sexo_id');
        $estados_servicio = $request->get('estado_servicio');

        if($codigo_carreras[0]=='0'){
            $codigo_carreras= \App\Carrera::select('codigo')->get();
        }
        if($id_sexos[0]=='0'){
            $id_sexos= \App\Sexo::select('id')->get();
        }
        if($estados_servicio[0]=='0'){
            $estados_servicio[0]='Iniciado';
            $estados_servicio[1]='No iniciado';
        }

        $estudiantes=Estudiante::whereIn('codigo',$codigo_carreras)
                                ->whereIn('sexo_id',$id_sexos)
                                ->whereIn('estado_servicio',$estados_servicio)
                                ->orderBy('carne')
                                ->get();


        $pdf=PDF::loadView('Reportes/expedientes_listado',compact('estudiantes'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('Expedientes.pdf');//Retorna el pdf de los estudiantes inscritos..
    }
    /*Función para generar el pdf de los proyectos disponibles que ofrecen las diferentes instituciones*/
     public function pdfProyectos(Request $request){
        $proyectos=Proyecto::all();
        $id_instituciones = $request->get('id_instituciones');
        $codigo_carreras = $request->get('codigo');
        $estado_proyecto = $request->get('estado_proyecto');

        if($id_instituciones[0]=='0'){
            $id_instituciones= \App\Institucion::select('id')->get();
        }
        if($codigo_carreras[0]=='0'){
            $codigo_carreras= \App\Carrera::select('codigo')->get();
        }
        if($estado_proyecto[0]=='0'){
            $estado_proyecto[0]='Disponible';
            $estado_proyecto[1]='No disponible';
        }

        $proyectos=Proyecto::whereIn('id_institucion',$id_instituciones)
                                ->whereIn('codigo_carrera',$codigo_carreras)
                                ->whereIn('estado_proyecto',$estado_proyecto)
                                ->orderBy('id')
                                ->get();

        $pdf=PDF::loadView('Reportes/proyectos_listado',compact('proyectos', 'request'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->setPaper('a4','landscape')->stream('Proyectos.pdf');
        //Retorna en tamaño horizontal el pdf de las instituciones.
    }

    /*Función para generar el pdf de las instituciones*/
        public function pdfInstituciones(Request $request){
            $instituciones = [];
            $id_tipo_instituciones = $request->get('tipo_institucion_id');
            $id_sectores = $request->get('sector_id');
            $id_departamentos = $request->get('id_departamento');

            if($id_tipo_instituciones[0]=='0'){
                $id_tipo_instituciones= \App\TipoInstitucion::select('id')->get();
            }

            if($id_sectores[0]=='0'){
                $id_sectores= \App\Sector::select('id')->get();
            }

            if($id_departamentos[0]=='0'){
                $id_departamentos= \App\Departamento::select('id')->get();
            }

            $instituciones=Institucion::whereIn('tipo_institucion_id',$id_tipo_instituciones)
                                        ->whereIn('sector_id',$id_sectores)
                                        ->whereIn('id_departamento',$id_departamentos)
                                        ->orderBy('id')
                                        ->get();

            $pdf=PDF::loadView('Reportes/instituciones_listado',compact('instituciones'));//Cargar la vista y recibe como parámetro el array de instituciones
            return $pdf->setPaper('a4','landscape')->stream('instituciones.pdf');//Retorna en tamaño horizontal el pdf de las instituciones.
    }

    /*Fuynción para generar el pdf de las prorrógas*/
        public function pdfProrrogas(){
        $prorrogas = DB::table('prorrogas')->orderBy('fecha_solicitud', 'asc')->get();//Obtiene todos los proyectos ordenados por fecha de solicitud de manera ascendente
        $estudiantes= Estudiante::all();//Devuelve un array de estudiantes
        $pdf = PDF::loadView('Reportes/prorrogas_listado',compact('prorrogas'));//Cargar la vista y recibe como parámetro el array de prorrógas.
        return $pdf->stream('Prorrogas.pdf');
    }

    /*Función para generar el certificado de servicio social*/
    public function pdfCertificado($carne){

        $estudiante = Estudiante::findOrFail($carne);//Devuelve el estudiante con el carne solicitado.
        $asignacion = Asignacion::where('carne', '=', $carne)->first();
        $proyecto = Asignacion::proyectos($carne);/*Devuelve el proyecto que está asignado al estudiante.*/
        $memoria = Memoria::where('asignacion_id', $asignacion->id)->first();

        if(!$memoria){
            return redirect()->route('ver_expediente', $carne)->withWarning('No se ha registrado memoria para este proyecto!');
        }
        
        $now=Carbon::now();//Obtiene la fecha actual
        setlocale(LC_TIME, "Spanish");//Traducir la fecha a español
        $fecha_actual = Fecha::fecha_hoy();
        $fecha_inicio = Fecha::fechaTexto($proyecto->fecha_inicio);
        $fecha_fin = Fecha::fechaTexto($proyecto->fecha_fin);

        
        
        //Actualizar estado de constancia de certificación
        $memoria_actualizar = Memoria::where('asignacion_id', '=', $asignacion->id)->first();
        $memoria_actualizar->estado_constancia = "Emitida";
        $memoria_actualizar->save();

        $pdf = PDF::loadView('Reportes/certificados',compact('estudiante','proyecto','fecha_actual','fecha_inicio','fecha_fin'));//Cargar la vista y recibe como parametro el estudiante y el proyecto.
        return $pdf->stream('Certificado.pdf');//Retorna el certificado de servicio social
    }

    /*Función para generar la carta de asignación del servicio social*/
    public function pdfAsignacion($id){
        $asignacion = Asignacion::findOrFail($id);
        $estudiante = $asignacion->estudiante;
        $proyecto = $asignacion->proyecto;

        //Formato de fecha en cadena
        $fecha = Fecha::fecha_hoy();

        $pdf = PDF::loadView('Reportes/asignaciones',compact('estudiante','proyecto', 'fecha'));
        return $pdf->stream('Asignación.pdf');
    }

     /*Función para generar el reporte de las estadísticas de los expedientes*/ 

     public function expediente_estadisticas(Request $request)
     {

        $estudiantes_inscritos = Estudiante::all()->count();
        $estudiantes_servicio_iniciado = Estudiante::where('estado_servicio', 'Iniciado')->count();
        $estudiantes_servicio_no_iniciado = Estudiante::where('estado_servicio', 'No iniciado')->count();
        $estudiantes_servicio_terminado = Estudiante::where('estado_servicio', 'Terminado')->count();
        $estudiantes_carrera = DB::table('carreras')->leftjoin('estudiantes', 'estudiantes.codigo', '=', 'carreras.codigo')
                                  ->select(DB::raw('count(estudiantes.carne) as cantidad, nombre_carrera'))
                                  ->groupBy('nombre_carrera')->get();

        $estudiantes_genero = DB::table('sexos')->leftjoin('estudiantes', 'estudiantes.sexo_id', '=', 'sexos.id')
                                  ->select(DB::raw('count(estudiantes.carne) as porcentaje, sexo'))
                                  ->groupBy('sexo')->get();

        //Llama a la función fecha_hoy, que devulve la fecha actual con formato cadena
        $fecha_actual = Fecha::fecha_hoy();

        $url_grafico_generos = $request->url_grafico_generos;
        $url_grafico_carreras = $request->url_grafico_carreras;

        $pdf = PDF::loadView('Reportes/estadisticas_estudiantes', compact('estudiantes_inscritos', 'estudiantes_servicio_iniciado', 'estudiantes_servicio_no_iniciado', 'estudiantes_servicio_terminado', 'estudiantes_carrera', 'estudiantes_genero', 'url_grafico_generos', 'url_grafico_carreras', 'fecha_actual'));
        return $pdf->stream('Estadisticas_estudiantes.pdf');//Retorna el reporte de las estadísticas de los expedientes
     }


     public function instituciones_estadisticas(Request $request)
     {

        $instituciones = Institucion::all()->count();
        $instituciones_sector = DB::table('sectors')->leftjoin('institucions', 'institucions.sector_id', '=', 'sectors.id')
                                  ->select(DB::raw('count(institucions.id) as cantidad, nombre_sector'))
                                  ->groupBy('nombre_sector')->get();

        $instituciones_tipo = DB::table('tipo_institucions')->leftjoin('institucions', 'institucions.tipo_institucion_id', '=', 'tipo_institucions.id')
                                ->select(DB::raw('count(institucions.id) as cantidad, tipo_institucion'))
                                ->groupBy('tipo_institucion')->get();

        $instituciones_activas = DB::table('proyectos')->leftjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                ->where('proyectos.estado_proyecto','Disponible')
                                ->groupBy('proyectos.id_institucion')
                                ->count();

        $instituciones_inactivas = DB::table('proyectos')->leftjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                ->where('proyectos.estado_proyecto','No disponible')
                                ->count();

        $instituciones_sin_proyecto = $instituciones - $instituciones_activas - $instituciones_inactivas;

        $url_grafico_sectores = $request->url_grafico_sectores;
        $url_grafico_tipo_instituciones = $request->url_grafico_tipo_instituciones;

        //Llama a la función fecha_hoy, que devulve la fecha actual con formato cadena
        $fecha_actual = Fecha::fecha_hoy();
        

        $pdf = PDF::loadView('Reportes/reporte_estadisticas_instituciones', compact('instituciones', 'instituciones_sector', 'instituciones_tipo', 'instituciones_activas', 'instituciones_inactivas', 'url_grafico_tipo_instituciones', 'url_grafico_sectores', 'fecha_actual', 'instituciones_sin_proyecto'));
        return $pdf->stream('Estadisticas_instituciones.pdf');//Retorna el reporte de las estadísticas de los expedientes
     }


     public function proyectos_estadisticas(Request $request)
     {
        $proyectos = Proyecto::all()->count();
        $proyectos_sectores     = DB::table('proyectos')->rightjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                      ->rightjoin('sectors', 'institucions.sector_id', '=', 'sectors.id')
                                      ->select(DB::raw('count(proyectos.id) as cantidad, nombre_sector'))
                                      ->groupBy('nombre_sector')->get();

        $proyectos_institucion = DB::table('proyectos')->rightjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                    ->rightjoin('tipo_institucions', 'institucions.tipo_institucion_id', '=', 'tipo_institucions.id')
                                    ->select(DB::raw('count(proyectos.id) as cantidad, tipo_institucion'))
                                    ->groupBy('tipo_institucion')->get();
        $proyectos_disponibles = Proyecto::where('estado_proyecto','Disponible')->count();
        $proyectos_no_disponibles = Proyecto::where('estado_proyecto','No disponible')->count();

        $url_grafico_sectores = $request->url_grafico_sectores;
        $url_grafico_tipo_instituciones = $request->url_grafico_tipo_instituciones;

       //Llama a la función fecha_hoy, que devulve la fecha actual con formato cadena
        $fecha_actual = Fecha::fecha_hoy();

        $pdf = PDF::loadView('Reportes/reporte_estadisticas_proyectos', compact('proyectos', 'proyectos_sectores', 'proyectos_institucion', 'proyectos_disponibles', 'proyectos_no_disponibles', 'url_grafico_sectores', 'url_grafico_tipo_instituciones', 'fecha_actual'));
        return $pdf->stream('Estadisticas_proyectos.pdf');//Retorna el reporte de las estadísticas de los expedientes
     }

}
