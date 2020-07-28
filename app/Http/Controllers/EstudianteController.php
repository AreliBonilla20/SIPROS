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

        $estudiante->carne=$request->input('carne');
        $estudiante->nombres=$request->input('nombres');
        $estudiante->apellidos=$request->input('apellidos');
        $estudiante->edad=$request->input('edad');
        $estudiante->dui=$request->input('dui');
        $sexo=sexo::find(request('sexo'));
        $carrera=Carrera::find(request('carrera'));
        $departamento=Departamento::find(request('departamento'));
        $municipio=municipio::find(request('municipio'));
        $estudiante->sexo()->associate($sexo);
        $estudiante->carrera()->associate($carrera);
        $estudiante->municipio()->associate($municipio);
        $estudiante->departamento()->associate($departamento);
        $estudiante->direccion=$request->input('direccion');
        $estudiante->email=$request->input('email');
        $estudiante->telefono=$request->input('telefono');
        $estudiante->area=$request->input('area');

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
            alert()->error('Error','Ya existe un registro con el carnet ingresado');
            return redirect('expedientes');
        }
        elseif($dui_registrado==true){
            alert()->error('Error','Ya existe un registro con el DUI ingresado');
            return redirect('expedientes');
        }
        else{
            $estudiante->save();
            toast('Expediente agregado correctamente', 'success');
            return redirect('expedientes');
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

        $estudianteActualizar->carne = $request->carne;
        $estudianteActualizar->nombres = $request->nombres;
        $estudianteActualizar->apellidos = $request->apellidos;
        $estudianteActualizar->edad = $request->edad;
        $estudianteActualizar->dui = $request->dui;
        $estudianteActualizar->direccion = $request->direccion;
        $estudianteActualizar->email = $request->email;
        $estudianteActualizar->telefono = $request->telefono;
        $estudianteActualizar->area = $request->area;
        $estudianteActualizar->codigo = $request->carrera;
        $estudianteActualizar->sexo_id = $request->sexo;
        $estudianteActualizar->municipio_id = $request->municipio;
        $estudianteActualizar->departamento_id = $request->departamento;
        $estudianteActualizar->save();

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
   
