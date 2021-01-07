<?php

namespace App\Http\Controllers;

use App\Asignacion;
use App\Estudiante;
use App\Http\Requests\MemoriaRequest;
use App\Memoria;
use Illuminate\Http\Request;
use DB;

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
        $asignaciones_lista = Asignacion::where('carne', $id)
                        ->where('estado_asignacion','Iniciado')
                        ->get();

        $asignaciones = [];

        foreach($asignaciones_lista as $asg){
            if(!$asg->memorias){
                $asignaciones[] = $asg;
            }
        }

        return view('Memorias/memoria_nueva', compact('asignaciones', 'id'));
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
        $memoria->personal_benef_m      = $request->personal_benef_m;
        $memoria->personal_benef_f      = $request->personal_benef_f;
        $memoria->otros_benef_m         = $request->otros_benef_m;
        $memoria->otros_benef_f         = $request->otros_benef_f;
        $memoria->inversion_institucion = $request->inversion_institucion;
        $memoria->inversion_estudiante  = $request->inversion_estudiante;
        $memoria->horas_completadas     = $request->horas_completadas;
        $memoria->estado_constancia     = "Pendiente";
        $memoria->total_benef_m         = $request->docente_benef_m + $request->estudiante_benef_m + $request->otros_benef_m;
        $memoria->total_benef_f         = $request->docente_benef_f + $request->estudiante_benef_f + $request->otros_benef_f;
        $memoria->total_benef           = $memoria->total_benef_m + $memoria->total_benef_f;

        if($memoria->horas_completadas > $memoria->asignacion->horas_asignadas){
            return redirect()->route('crear_memoria',$memoria->asignacion->carne)->withWarning('Las horas registradas, no deben ser mayor a las horas asignadas');
        }

        if ($memoria->save()) {
            $this->actualizar_estudiante_asignacion($memoria);
            return redirect()->route('ver_expediente', $memoria->asignacion->carne)->withSuccess('Memoria agregada correctamente!');
        } else {
            return redirect()->route('crear_memoria', $memoria->asignacion->carne)->withWarning('Ha ocurrido un error!');
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
    public function update(MemoriaRequest $request, $id)
    {
        $memoria_actualizar                        = Memoria::findOrFail($id);
        $memoria_actualizar->asignacion_id         = $request->asignacion_id;
        $memoria_actualizar->fecha_inicio          = $request->fecha_inicio;
        $memoria_actualizar->fecha_fin             = $request->fecha_fin;
        $memoria_actualizar->docente_benef_m       = $request->docente_benef_m;
        $memoria_actualizar->docente_benef_f       = $request->docente_benef_f;
        $memoria_actualizar->estudiante_benef_m    = $request->estudiante_benef_m;
        $memoria_actualizar->estudiante_benef_f    = $request->estudiante_benef_f;
        $memoria_actualizar->personal_benef_m      = $request->personal_benef_m;
        $memoria_actualizar->personal_benef_f      = $request->personal_benef_f;
        $memoria_actualizar->otros_benef_m         = $request->otros_benef_m;
        $memoria_actualizar->otros_benef_f         = $request->otros_benef_f;
        $memoria_actualizar->inversion_institucion = $request->inversion_institucion;
        $memoria_actualizar->inversion_estudiante  = $request->inversion_estudiante;
        $memoria_actualizar->horas_completadas     = $request->horas_completadas;
        $memoria_actualizar->estado_constancia     = $memoria_actualizar->estado_constancia;
        $memoria_actualizar->total_benef_m         = $request->docente_benef_m + $request->estudiante_benef_m + $request->otros_benef_m;
        $memoria_actualizar->total_benef_f         = $request->docente_benef_f + $request->estudiante_benef_f + $request->otros_benef_f;
        $memoria_actualizar->total_benef           = $memoria_actualizar->total_benef_m + $memoria_actualizar->total_benef_f;

        if($memoria_actualizar->horas_completadas > $memoria_actualizar->asignacion->horas_asignadas){
            return redirect()->route('editar_memoria',$memoria_actualizar->id)->withWarning('Las horas registradas, no deben ser mayor a las horas asignadas');
        }

        if ($memoria_actualizar->save()) {
            $this->actualizar_estudiante_asignacion($memoria_actualizar);
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

    //Funcion que actualiza los campos estado asignacion de tabla asignaciones y estados_servicio de la tabla estudiante
    public function actualizar_estudiante_asignacion($memoria){

        $horas_reg = 0;
        $estudiante = Estudiante::findOrFail($memoria->asignacion->estudiante->carne);
        $asignacion = Asignacion::findOrFail($memoria->asignacion->id);

        $horas = DB::table('memorias')->join('asignacions', 'asignacions.id', '=', 'memorias.asignacion_id')
                                        ->join('estudiantes', 'estudiantes.carne', '=', 'asignacions.carne')
                                        ->where('estudiantes.carne',$memoria->asignacion->estudiante->carne)
                                        ->select(DB::raw('sum(memorias.horas_completadas) as total'))
                                        ->get();
        
        foreach($horas as $hora){
            $horas_reg = $horas_reg + $hora->total;
        }

        $estudiante->horas_registradas = $horas_reg;
     
        
        //Si se registran todas las horas que se habian asignado al proyecto, entonces pasa al estado terminado
        if($memoria->horas_completadas == $asignacion->horas_asignadas){
            $asignacion->estado_asignacion = 'Terminado';
            $asignacion->save();
        }

        //Si el estudiante ya registró 500 horas, el estado_servicio del estudiante pasa a terminado
        if($estudiante->horas_registradas == 500)
        {
            $estudiante->estado_servicio = "Terminado";
        }

        $estudiante->save();
              
    }
}
