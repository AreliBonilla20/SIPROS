<?php

namespace App\Http\Controllers;

use App\Carrera;
use App\Http\Requests\ProyectoRequest;
use App\Institucion;
use App\Proyecto;
use Illuminate\Http\Request;
use PDF;

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
        return view('Proyectos/proyectos_listado', compact('proyectos'));
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
            return redirect('proyectos')->withSuccess('Proyecto agregado correctamente!');
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
        $proyectoUpdate = Proyecto::findOrFail($id);
        $instituciones  = Institucion::all();
        $carreras       = Carrera::all();
        return view('Proyectos/proyecto_editar', compact('proyectoUpdate', 'instituciones', 'carreras'));
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
            return redirect('proyectos');
        } else {
            toast('Ha ocurrido un error!', 'error');
            return redirect('proyectos');
        }
    }

    public function exportarPDF()
    {
        $proyectos = Proyecto::all();
        $pdf       = PDF::loadView('Reportes/proyectos_listado', compact('proyectos'));
        return $pdf->setPaper('a4', 'landscape')->download('proyectos.pdf');
    }
}
