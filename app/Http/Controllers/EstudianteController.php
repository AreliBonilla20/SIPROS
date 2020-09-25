<?php

namespace App\Http\Controllers;

use App\Area;
use App\Asignacion;
use App\Carrera;
use App\Departamento;
use App\Estudiante;
use App\Http\Requests\EstudianteRequest;
use App\Institucion;
use App\Municipio;
use App\Prorroga;
use App\Proyecto;
use App\Sexo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use RealRashid\SweerAlert\Facades\Alert;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Muestra el lstado de estudiantes
        $estudiantes = Estudiante::all();
        return view('Expedientes/expedientes_listado', compact('estudiantes'));
        //all: Consulta todos las estudiantees
        //compact:Arrays de recursos
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Retorna la vista de creación del expediente
        $carreras      = Carrera::all();
        $sexos         = Sexo::all();
        $departamentos = Departamento::all();
        $municipios    = Municipio::all();
        $instituciones = Institucion::all();
        $areas         = Area::all();

        return view('Expedientes/expediente_nuevo', compact('carreras', 'sexos', 'departamentos', 'municipios', 'instituciones', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EstudianteRequest $request)
    {
        $carnet_registrado = false;
        $dui_registrado    = false;
        $estudiante        = new Estudiante();

        $estudiante->carne             = $request->carne;
        $estudiante->nombres           = $request->nombres;
        $estudiante->apellidos         = $request->apellidos;
        $estudiante->fecha_nacimiento  = $request->fecha_nacimiento;
        $estudiante->dui               = $request->dui;
        $estudiante->sexo_id           = $request->sexo_id;
        $estudiante->codigo            = $request->codigo;
        $estudiante->departamento_id   = $request->departamento_id;
        $estudiante->municipio_id      = $request->municipio_id;
        $estudiante->direccion         = $request->direccion;
        $estudiante->email             = $request->email;
        $estudiante->telefono          = $request->telefono;
        $estudiante->area_id           = $request->area_id;
        $estudiante->estado_servicio   = "No iniciado";
        $estudiante->horas_registradas = 0;

        /*Calculo de la edad*/
        $now             = Carbon::now();
        $fecha_actual    = $now->format('Y-m-d'); //Calcula la fecha actual
        $diferencia_edad = strtotime($fecha_actual) - strtotime($estudiante->fecha_nacimiento); //Resta la fecha actual con la fecha de nacimiento
        $edad            = intval($diferencia_edad / 60 / 60 / 24 / 365.25); /*Se obtiene el resultado en la mas minima expresión en entero donde los valores divididos representan segundos,minutos,horas,días
        y el 365.25 es por que cada 4 años hay un año bisisesto si no se coloca  la fracción entonces la edad sería en decimales
         */
        if ($edad < 18) {
            alert()->error('Error', 'El estudiante debe ser mayor de edad.');
            return redirect('expedientes');
        }
        $alumnos = Estudiante::all();

        foreach ($alumnos as $a) {
            if ($a->carne == $estudiante->carne) {
                $carnet_registrado = true;
            }

            if ($a->dui == $estudiante->dui) {
                $dui_registrado = true;
            }
        }

        if ($carnet_registrado == true) {
            alert()->error('Error', 'Ya existe un registro con el Carnet ingresado.');
            return redirect('expedientes');
        } elseif ($dui_registrado == true) {
            alert()->error('Error', 'Ya existe un registro con el DUI ingresado.');
            return redirect('expedientes');
        } else {
            $estudiante->save();
            return redirect('expedientes')->withSuccess('Expediente agregado correctamente!');
        };

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estudiante        = Estudiante::findOrFail($id);
        $proyectos         = Proyecto::where('codigo_carrera', $estudiante->codigo)->get();
        $asignaciones      = Asignacion::where('carne', $estudiante->carne)->get();
        $prorrogas         = Prorroga::where('carne', $estudiante->carne)->get();
        $porcentaje_avance = (100 / 500) * $estudiante->horas_registradas;

        $now             = Carbon::now();
        $fecha_actual    = $now->format('Y-m-d');
        $diferencia_edad = strtotime($fecha_actual) - strtotime($estudiante->fecha_nacimiento);
        $edad            = intval($diferencia_edad / 60 / 60 / 24 / 365.25);

        return view('Expedientes/expediente_ver', compact('estudiante', 'proyectos', 'asignaciones', 'prorrogas', 'porcentaje_avance', 'edad'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante_actualizar = Estudiante::findOrFail($id);

        $carreras      = Carrera::all();
        $sexos         = Sexo::all();
        $departamentos = Departamento::all();
        $municipios    = Municipio::all();
        $areas         = Area::all();
        $instituciones = Institucion::all();
        $areas         = Area::all();

        return view('Expedientes/expediente_editar', compact('estudiante_actualizar', 'carreras', 'sexos', 'departamentos', 'municipios', 'areas', 'instituciones', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EstudianteRequest $request, $carne)
    {
        $estudiante_actualizar = Estudiante::findOrFail($carne);
        $carnet_registrado    = false;
        $dui_registrado       = false;

        $estudiante_actualizar->carne             = $request->carne;
        $estudiante_actualizar->nombres           = $request->nombres;
        $estudiante_actualizar->apellidos         = $request->apellidos;
        $estudiante_actualizar->fecha_nacimiento  = $request->fecha_nacimiento;
        $estudiante_actualizar->dui               = $request->dui;
        $estudiante_actualizar->direccion         = $request->direccion;
        $estudiante_actualizar->email             = $request->email;
        $estudiante_actualizar->telefono          = $request->telefono;
        $estudiante_actualizar->codigo            = $request->codigo;
        $estudiante_actualizar->sexo_id           = $request->sexo_id;
        $estudiante_actualizar->municipio_id      = $request->municipio_id;
        $estudiante_actualizar->departamento_id   = $request->departamento_id;
        $estudiante_actualizar->area_id           = $request->area_id;
        $estudiante_actualizar->estado_servicio   = $estudiante_actualizar->estado_servicio;
        $estudiante_actualizar->horas_registradas = 0;

        if ($estudiante_actualizar->save()) {
            toast('Expediente actualizado correctamente!', 'success');
            return redirect('expedientes');
        } else {
            toast('Ha ocurrido un error!', 'error');
            return redirect('expedientes');
        }

    }

}
