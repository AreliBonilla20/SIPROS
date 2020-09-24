<?php

namespace App\Http\Controllers;
use App\Estudiante;
use App\Institucion;
use App\Proyecto;
use App\Prorroga;
use App\Asignacion;
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
        return $pdf->download('expedientes.pdf');//Retorna el pdf de los estudiantes inscritos..
    }
    /*Función para generar el pdf de los proyectos disponibles que ofrecen las diferentes instituciones*/
     public function pdfProyectos(){
        $proyectos=Proyecto::all();//Devuelve un array de proyectos
        $pdf=PDF::loadView('Reportes/proyectos_listado',compact('proyectos'));//Cargar la vista y recibe como parámetro el array de proyectos
        return $pdf->setPaper('a4','landscape')->download('proyectos.pdf');
        //Retorna en tamaño horizontal el pdf de las instituciones.
    }

    /*Función para generar el pdf de las instituciones*/
        public function pdfInstituciones(){
        $instituciones=Institucion::all();//Devuelve un array de institcuiones
        $pdf=PDF::loadView('Reportes/instituciones_listado',compact('instituciones'));//Cargar la vista y recibe como parámetro el array de instituciones
        return $pdf->setPaper('a4','landscape')->download('instituciones.pdf');//Retorna en tamaño horizontal el pdf de las instituciones.
    }

    /*Fuynción para generar el pdf de las prorrógas*/
        public function pdfProrrogas(){
        $prorrogas = DB::table('prorrogas')->orderBy('fecha_solicitud', 'asc')->get();//Obtiene todos los proyectos ordenados por fecha de solicitud de manera ascendente
        $estudiantes= Estudiante::all();//Devuelve un array de estudiantes
        $pdf = PDF::loadView('Reportes/prorrogas_listado',compact('prorrogas'));//Cargar la vista y recibe como parámetro el array de prorrógas.
        return $pdf->download('Prorrogas.pdf');
    }

    /*Función para generar el certificado de servicio social*/
    public function pdfCertificado($carne){
        $estudiante = Estudiante::findOrFail($carne);//Devuelve el estudiante con el carne solicitado.
        $proyecto = Asignacion::proyectos($carne);/*Devuelve el proyecto que está asignado al estudiante.*/
        $now=Carbon::now();
        $fecha_actual = $now->format('d/m/Y');
        $pdf = PDF::loadView('Reportes/certificados',compact('estudiante','proyecto'));//Cargar la vista y recibe como parametro el estudiante y el proyecto.
        return $pdf->stream('Certificado.pdf');//Retorna el certificado de servicio social
    }

    /*Función para generar la carta de asignación del servicio social*/
    public function pdfAsignacion($id){
        $asignacion = Asignacion::findOrFail($id);
        $estudiante = $asignacion->estudiante;
        $proyecto = $asignacion->proyecto;

        //Formato de fecha en candena
        $dias = array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $fecha = $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;

        $pdf = PDF::loadView('Reportes/asignaciones',compact('estudiante','proyecto', 'fecha'));
        return $pdf->stream('Asignación.pdf');
    }


}
