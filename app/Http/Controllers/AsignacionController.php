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
        $asignaciones = Asignacion::all();
        $asignacion = new Asignacion();

        foreach($asignaciones as $asg){
            if($asg->carne == $request->carne && $asg->id_proyecto == $request->id_proyecto && $asg->estado_asignacion == "Iniciado"){
                return redirect()->route('ver_expediente', $asg->carne)->withWarning('El estudiante tiene ya tiene asignado el proyecto y se encuentra en curso');
            }
        }
        $asignacion->carne             = $request->carne;
        $asignacion->id_proyecto       = $request->id_proyecto;
        $asignacion->horas_asignadas   = $request->horas_asignadas;
        $asignacion->estado_asignacion = "Iniciado";

        

        if ($asignacion->save()) {
            $this->actualizar_expediente_proyecto($asignacion);
            return redirect()->route('ver_expediente', $asignacion->carne)->withSuccess('Asignación creada correctamente!');
        } else {
            return redirect()->route('ver_expediente', $asignacion->carne)->withWarning('Ha ocurrido un error!');
        }

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
    public function update(Request $request, $id)
    {   
        $asignaciones = Asignacion::all();
        $asignacion_actualizar = Asignacion::findOrFail($id);

        foreach($asignaciones as $asg){
            if($asg->carne == $request->carne && $asg->id_proyecto == $request->id_proyecto && $asg->estado_asignacion == "Iniciado"){
                return redirect()->route('ver_expediente', $asg->carne)->withWarning('El estudiante tiene ya tiene asignado el proyecto y se encuentra en curso');
            }
        }
        $asignacion_actualizar->carne             = $request->carne;
        $asignacion_actualizar->id_proyecto       = $request->id_proyecto;
        $asignacion_actualizar->horas_asignadas   = $request->horas_asignadas;
        $asignacion_actualizar->estado_asignacion = $request->estado_asignacion;

        if ($asignacion_actualizar->save()) {
            $this->actualizar_expediente_proyecto($asignacion_actualizar);
            return redirect()->route('ver_expediente', $asignacion_actualizar->carne)->withSuccess('Asignación actualizada correctamente!');
        } else {
            return redirect()->route('ver_expediente', $asignacion_actualizar->carne)->withWarning('Ha ocurrido un error!');
        }
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

    //Función que actualiza la cantidad de estudiantes inscritos en proyecto y el estado de servicio social del estudiante
    public function actualizar_expediente_proyecto($asignacion){

        $asignaciones = Asignacion::where('id_proyecto', $asignacion->id_proyecto)->where('estado_asignacion', 'Iniciado')->get();
        $cantidad_estudiantes = count($asignaciones);

        $proyecto_actualizar = Proyecto::findOrFail($asignacion->id_proyecto);
        $proyecto_actualizar->estudiantes_inscritos = $cantidad_estudiantes;
        $proyecto_actualizar->save();
 
        $estudiante                  = Estudiante::findOrFail($asignacion->carne);
        $estudiante->estado_servicio = "Iniciado";
        $estudiante->save();

    }
}
