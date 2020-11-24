<?php

namespace App\Http\Controllers;
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

class ReporteController extends Controller
{
    /*Función para generar el pdf de los estudiantes inscritos*/
     public function pdfExpedientes(){
        $estudiantes=Estudiante::all();//Devuelve un array de estudiantes
        $pdf=PDF::loadView('Reportes/expedientes_listado',compact('estudiantes'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->stream('expedientes.pdf');//Retorna el pdf de los estudiantes inscritos..
    }
    /*Función para generar el pdf de los proyectos disponibles que ofrecen las diferentes instituciones*/
     public function pdfProyectos(){
        $proyectos=Proyecto::all();//Devuelve un array de proyectos
        $pdf=PDF::loadView('Reportes/proyectos_listado',compact('proyectos'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->setPaper('a4','landscape')->stream('proyectos.pdf');
        //Retorna en tamaño horizontal el pdf de las instituciones.
    }

    /*Función para generar el pdf de las instituciones*/
        public function pdfInstituciones(){
        $instituciones=Institucion::all();//Devuelve un array de institcuiones
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
        $proyecto = Asignacion::proyectos($carne);/*Devuelve el proyecto que está asignado al estudiante.*/
        $asignacion = Asignacion::where('carne', '=', $carne)->first();
        $now=Carbon::now();//Obtiene la fecha actual
        setlocale(LC_TIME, "Spanish");//Traducir la fecha a español
        $fecha_actual = $now->format('d/m/Y');
        $fecha_actual = Fecha::fechaTexto($fecha_actual);//Invocamos a la función fechaTexto para convertir a texto
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
        $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

        $pdf = PDF::loadView('Reportes/asignaciones',compact('estudiante','proyecto', 'fecha'));
        return $pdf->stream('Asignación.pdf');
    }


}
