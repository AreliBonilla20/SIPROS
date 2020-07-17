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
use App\http\Requests\storeEstudianteRequest;
use Carbon\Carbon;

class estudianteController extends Controller
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
    public function store(storeEstudianteRequest $request)
    {
    
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
        $estudiante->save();
    
        return back()->with('agregado', 'Expediente agregado correctamente.');
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
    public function update(Request $request, $carne)
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
        $estudianteActualizar->codigo = $request->codigo;
        $estudianteActualizar->sexo_id = $request->sexo_id;
        $estudianteActualizar->municipio_id = $request->municipio_id;
        $estudianteActualizar->departamento_id = $request->departamento_id;
        $estudianteActualizar->save();

        return back()->with('actualizado', 'Expediente actualizado correctamente.');
       
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
   
