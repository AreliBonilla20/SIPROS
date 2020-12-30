<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Http\Requests\ProyectoRequest;
use App\Http\Requests\BusquedaRequest;
use App\Institucion;
use App\Proyecto;
use App\Fecha;
use Illuminate\Http\Request;
use RealRashid\SweerAlert\Facades\Alert;
use DB;


class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lista los proyectos
        $proyectos = Proyecto::all();
        $inicio = "";
        $final = "";
        return view('Proyectos/proyectos_listado', compact('proyectos', 'inicio', 'final'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Crea un nuevo proyecto

        $instituciones = Institucion::all();
        $carreras      = Carrera::all();
        return view('Proyectos/proyecto_nuevo', compact('instituciones', 'carreras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProyectoRequest $request)
    {
        //Guarda un proyecto
        $proyecto                          = new Proyecto();
        $proyecto->codigo_carrera          = $request->codigo_carrera;
        $proyecto->duracion                = $request->duracion;
        $proyecto->nombre                  = $request->nombre;
        $proyecto->area_de_conocimiento    = $request->area;
        $proyecto->objetivos               = $request->objetivos;
        $proyecto->logros                  = $request->logro;
        $proyecto->id_institucion          = $request->institucion;
        $proyecto->cantidad_de_estudiantes = $request->cantidad;
        $proyecto->nombre_encargado        = $request->encargado;
        $proyecto->telefono                = $request->telefono;
        $proyecto->email                   = $request->correo;
        $proyecto->estado_proyecto         = "Disponible";
        $proyecto->estudiantes_inscritos   = 0;

        if ($proyecto->save()) {
            return redirect()->route('ver_proyecto', $proyecto)->withSuccess('Proyecto agregado correctamente!');
        } else {
            return redirect('proyectos')->withWarning('Ha ocurrido un error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::findOrFail($id);
        return view('Proyectos/proyecto_ver', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //editar uno especifico
        $proyecto_actualizar = Proyecto::findOrFail($id);
        $instituciones  = Institucion::all();
        $carreras       = Carrera::all();
        return view('Proyectos/proyecto_editar', compact('proyecto_actualizar', 'instituciones', 'carreras'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProyectoRequest $request, $id)
    {
        //Actualizar un proyecto
        $proyecto                          = Proyecto::findOrFail($id);
        $proyecto->codigo_carrera          = $request->codigo_carrera;
        $proyecto->duracion                = $request->duracion;
        $proyecto->nombre                  = $request->nombre;
        $proyecto->area_de_conocimiento    = $request->area;
        $proyecto->objetivos               = $request->objetivos;
        $proyecto->logros                  = $request->logro;
        $proyecto->id_institucion          = $request->institucion;
        $proyecto->cantidad_de_estudiantes = $request->cantidad;
        $proyecto->nombre_encargado        = $request->encargado;
        $proyecto->telefono                = $request->telefono;
        $proyecto->email                   = $request->correo;
        $proyecto->estado_proyecto         = $request->estado_proyecto;
        $proyecto->estudiantes_inscritos   = 0;

        if ($proyecto->save()) {
            toast('Proyecto actualizado correctamente!', 'success');
            return redirect()->route('ver_proyecto', $proyecto);
        } else {
            toast('Ha ocurrido un error!', 'error');
            return redirect('proyectos');
        }
    }

    public function buscar(BusquedaRequest $request)
    {
        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $inicio_formato = Fecha::fechaTexto($inicio);
        $final_formato = Fecha::fechaTexto($final);

        $proyectos = Proyecto::whereBetween('created_at', [$inicio, $final])->get();
        return view('Proyectos/proyectos_listado', compact('proyectos', 'inicio', 'final', 'inicio_formato', 'final_formato'));
    }

    public function estadisticas()
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

        setlocale(LC_TIME, "Spanish");
        $primer_proyecto = Proyecto::orderBy('created_at', 'ASC')->first();
        $fecha_inicio = Fecha::fechaTexto($primer_proyecto->created_at);

        $ultimo_proyecto = Proyecto::orderBy('created_at', 'DESC')->first();
        $fecha_final = Fecha::fechaTexto($ultimo_proyecto->created_at);    

        return view('Proyectos/estadisticas_proyectos', compact('proyectos', 'proyectos_sectores', 'proyectos_institucion', 'proyectos_disponibles', 'proyectos_no_disponibles', 'fecha_inicio', 'fecha_final'));
    }

}
