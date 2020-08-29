<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Memoria;

class MemoriaController extends Controller
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
    public function store(Request $request)
    {
        $memoria = new Memoria();
        $memoria->asignacion_id = $request->asignacion_id;
        $memoria->fecha_inicio = $request->fecha_inicio;
        $memoria->fecha_fin = $request->fecha_fin;
        $memoria->docente_benef_m = $request->docente_benef_m;
        $memoria->docente_benef_f = $request->docente_benef_f;
        $memoria->estudiante_benef_m = $request->estudiante_benef_m;
        $memoria->estudiante_benef_f = $request->estudiante_benef_f;
        $memoria->otros_benef_m = $request->otros_benef_m;
        $memoria->otros_benef_f = $request->otros_benef_f;
        $memoria->inversion_institucion = $request->inversion_institucion;
        $memoria->inversion_estudiante = $request->inversion_estudiante;
        $memoria->horas_completadas = $request->horas_completadas;
        $memoria->estado_constancia = "Pendiente";
        $memoria->total_benef_m = $request->docente_benef_m + $request->estudiante_benef_m + $request->otros_benef_m;        
        $memoria->total_benef_f = $request->docente_benef_f + $request->estudiante_benef_f + $request->otros_benef_f;
        $memoria->total_benef = $memoria->total_benef_m + $memoria->total_benef_f;
        $memoria->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
