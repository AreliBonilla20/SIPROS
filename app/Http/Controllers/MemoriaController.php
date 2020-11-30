<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Estudiante;
use App\Http\Requests\MemoriaRequest;
use App\Memoria;
use Illuminate\Http\Request;

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
    public function create($id)
    {
        $asignaciones = Asignacion::where('carne', $id)->get();
        return view('Memorias/memoria_nueva', compact('asignaciones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MemoriaRequest $request)
    {
        $memoria                        = new Memoria();
        $memoria->asignacion_id         = $request->asignacion_id;
        $memoria->fecha_inicio          = $request->fecha_inicio;
        $memoria->fecha_fin             = $request->fecha_fin;
        $memoria->docente_benef_m       = $request->docente_benef_m;
        $memoria->docente_benef_f       = $request->docente_benef_f;
        $memoria->estudiante_benef_m    = $request->estudiante_benef_m;
        $memoria->estudiante_benef_f    = $request->estudiante_benef_f;
        $memoria->otros_benef_m         = $request->otros_benef_m;
        $memoria->otros_benef_f         = $request->otros_benef_f;
        $memoria->inversion_institucion = $request->inversion_institucion;
        $memoria->inversion_estudiante  = $request->inversion_estudiante;
        $memoria->horas_completadas     = $request->horas_completadas;
        $memoria->estado_constancia     = "Pendiente";
        $memoria->total_benef_m         = $request->docente_benef_m + $request->estudiante_benef_m + $request->otros_benef_m;
        $memoria->total_benef_f         = $request->docente_benef_f + $request->estudiante_benef_f + $request->otros_benef_f;
        $memoria->total_benef           = $memoria->total_benef_m + $memoria->total_benef_f;

        if ($memoria->save()) {
            $estudiante                      = Estudiante::findOrFail($memoria->asignacion->estudiante->carne);
            $estudiante->horas_registradas =  $estudiante->horas_registradas + $memoria->horas_completadas;

            if($estudiante->horas_registradas == 500)
            {
                $estudiante->estado_servicio = "Terminado";
            }
            
            $estudiante->save();
            return redirect()->route('ver_expediente', $estudiante)->withSuccess('Memoria agregada correctamente!');
        } else {
            return redirect()->route('ver_expediente', $memoria->asignacion->carne)->withWarning('Ha ocurrido un error!');
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
        $asignacion = Asignacion::findOrFail($id);
        $memoria = Memoria::where('asignacion_id', $id)->first();
        return view('Memorias/memoria_ver', compact('memoria', 'asignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $memoria_actualizar = Memoria::findOrFail($id);
        $asignaciones       = Asignacion::where('carne', $id)->get();
        return view('Memorias/memoria_editar', compact('memoria_actualizar', 'asignaciones'));
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
        $memoria_actualizar                        = Memoria::findOrFail($id);
        $memoria_actualizar->asignacion_id         = $request->asignacion_id;
        $memoria_actualizar->fecha_inicio          = $request->fecha_inicio;
        $memoria_actualizar->fecha_fin             = $request->fecha_fin;
        $memoria_actualizar->docente_benef_m       = $request->docente_benef_m;
        $memoria_actualizar->docente_benef_f       = $request->docente_benef_f;
        $memoria_actualizar->estudiante_benef_m    = $request->estudiante_benef_m;
        $memoria_actualizar->estudiante_benef_f    = $request->estudiante_benef_f;
        $memoria_actualizar->otros_benef_m         = $request->otros_benef_m;
        $memoria_actualizar->otros_benef_f         = $request->otros_benef_f;
        $memoria_actualizar->inversion_institucion = $request->inversion_institucion;
        $memoria_actualizar->inversion_estudiante  = $request->inversion_estudiante;
        $memoria_actualizar->horas_completadas     = $request->horas_completadas;
        $memoria_actualizar->estado_constancia     = $memoria_actualizar->estado_constancia;
        $memoria_actualizar->total_benef_m         = $request->docente_benef_m + $request->estudiante_benef_m + $request->otros_benef_m;
        $memoria_actualizar->total_benef_f         = $request->docente_benef_f + $request->estudiante_benef_f + $request->otros_benef_f;
        $memoria_actualizar->total_benef           = $memoria_actualizar->total_benef_m + $memoria_actualizar->total_benef_f;

        if ($memoria_actualizar->save()) {

            return redirect()->route('ver_expediente', $memoria_actualizar->asignacion->carne)->withSuccess('Memoria actualizada correctamente!');
        } else {
            return redirect('expedientes')->withWarning('Ha ocurrido un error!');
        }
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
