<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Estudiante;
use App\Http\Requests\AsignacionRequest;
use App\Proyecto;
use Illuminate\Http\Request;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AsignacionRequest $request)
    {
        $asignacion = new Asignacion();

        $asignacion->carne             = $request->carne;
        $asignacion->id_proyecto       = $request->id_proyecto;
        $asignacion->horas_asignadas   = $request->horas_asignadas;
        $asignacion->estado_asignacion = "Iniciado";

        if ($asignacion->save()) {

            $proyecto                    = Proyecto::findOrFail($asignacion->id_proyecto)->increment('estudiantes_inscritos');
            $estudiante                  = Estudiante::findOrFail($asignacion->carne);
            $estudiante->estado_servicio = "Iniciado";
            $estudiante->save();
            return redirect()->route('ver_expediente', $asignacion->carne)->withSuccess('Asignación creada correctamente!');
        } else {
            return redirect('expedientes')->withError('Ha ocurrido un error!');
        }
        $asignacion->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function show(Asignacion $asignacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Asignacion $asignacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Asignacion  $asignacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asignacion $asignacion)
    {
        //
    }
}
