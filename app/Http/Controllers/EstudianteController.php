<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Carrera;
use App\Sexo;
use App\Departamento;
use App\Municipio;
use App\Area;
use App\Institucion;
use App\Inscripcion;
use Carbon\Carbon;
use Illuminate\Http\Request;
use RealRashid\SweerAlert\Facades\Alert;
use App\Http\Requests\EstudianteRequest;

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
        $estudiantes=Estudiante::all();
        return view('Expedientes.expedientes_listado', compact('estudiantes'));
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
        $carreras=Carrera::all();
        $sexos=Sexo::all();
        $departamentos=Departamento::all();
        $municipios=Municipio::all();
        $instituciones=Institucion::all();

        return view('Expedientes/expediente_nuevo',compact('carreras','sexos','departamentos','municipios','instituciones'));
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
        $dui_registrado = false;
        $estudiante = new Estudiante();

        $estudiante->carne=$request->carne;
        $estudiante->nombres=$request->nombres;
        $estudiante->apellidos=$request->apellidos;
        $estudiante->fecha_nacimiento=$request->fecha_nacimiento;
        $estudiante->dui=$request->dui;
        $estudiante->sexo_id=$request->sexo_id;
        $estudiante->codigo=$request->codigo;
        $estudiante->departamento_id=$request->departamento_id;
        $estudiante->municipio_id=$request->municipio_id;
        $estudiante->direccion=$request->direccion;
        $estudiante->email=$request->email;
        $estudiante->telefono=$request->telefono;
        $estudiante->area=$request->area;

        /*Calculo de la edad*/
        $now=Carbon::now();
        $fecha_actual=$now->format('Y-m-d');//Calcula la fecha actual
        $diferencia_edad=strtotime($fecha_actual)-strtotime($estudiante->fecha_nacimiento);//Resta la fecha actual con la fecha de nacimiento
        $edad=intval($diferencia_edad/60/60/24/365.25);/*Se obtiene el resultado en la mas minima expresión en entero donde los valores divididos representan segundos,minutos,horas,días
        y el 365.25 es por que cada 4 años hay un año bisisesto si no se coloca  la fracción entonces la edad sería en decimales
        */
        $alumnos=Estudiante::all();

        foreach($alumnos as $a){
            if($a->carne == $estudiante->carne){
                $carnet_registrado = true;
            }

            if($a->dui == $estudiante->dui){
                $dui_registrado = true;
            }
        }

        if($carnet_registrado==true){
            alert()->error('Error','Ya existe un registro con el Carnet ingresado.');
            return redirect('expedientes');
        }
        elseif($dui_registrado==true){
            alert()->error('Error','Ya existe un registro con el DUI ingresado.');
            return redirect('expedientes');
        }
        else{
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
    public function show(Estudiante $estudiante)
    {
       // return view('Expedientes.expedientes_listado',compact('estudiante'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudianteActualizar = Estudiante::findOrFail($id);
        
        $carreras=Carrera::all();
        $sexos=Sexo::all();
        $departamentos=Departamento::all();
        $municipios=Municipio::all();
        $areas=Area::all();
        $instituciones=Institucion::all();

        return view('Expedientes/expediente_editar', compact('estudianteActualizar','carreras','sexos','departamentos','municipios','areas','instituciones'));
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
        $estudianteActualizar = Estudiante::findOrFail($carne);
        $carnet_registrado = false;
        $dui_registrado = false;

        $estudianteActualizar->carne = $request->carne;
        $estudianteActualizar->nombres = $request->nombres;
        $estudianteActualizar->apellidos = $request->apellidos;
        $estudianteActualizar->fecha_nacimiento = $request->fecha_nacimiento;
        $estudianteActualizar->dui = $request->dui;
        $estudianteActualizar->direccion = $request->direccion;
        $estudianteActualizar->email = $request->email;
        $estudianteActualizar->telefono = $request->telefono;
        $estudianteActualizar->area = $request->area;
        $estudianteActualizar->codigo = $request->codigo;
        $estudianteActualizar->sexo_id = $request->sexo_id;
        $estudianteActualizar->municipio_id = $request->municipio_id;
        $estudianteActualizar->departamento_id = $request->departamento_id;

        toast('Expediente actualizado correctamente', 'success');
        return redirect('expedientes');
       
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
   
