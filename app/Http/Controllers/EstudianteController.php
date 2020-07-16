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
        $areas=Area::all();
        $instituciones=Institucion::all();
        return view('Expedientes.expediente_nuevo',compact('carreras','sexos','departamentos','municipios','areas','instituciones'));//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeEstudianteRequest $request)
    {
        //
        $estudiante = new Estudiante();
        //$inscripcion = new Inscripcion();
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
        
        /*$fecha=Carbon::now();
        $fecha=$fecha->format('d-m-y');
        $inscripcion->fecha=$fecha;
        $inscripcion->estudiante()->associate($estudiante);
        $area=area::find(request('area'));
        $inscripcion->area()->associate($area);
        $inscripcion->save();*/
       // 
        //
        return redirect()->route('Expedientes.index');
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
    public function edit(Estudiante $estudiante)
    {
        
        $carreras=Carrera::all();
        $sexos=Sexo::all();
        $departamentos=Departamento::all();
        $municipios=Municipio::all();
        $areas=Area::all();
        $instituciones=Institucion::all();
        return view('Expedientes.expediente_editar', compact('estudiante','carreras','sexos','departamentos','municipios','areas','instituciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, estudiante $estudiante)
    {
        
        $estudiante = new Estudiante();
        $inscripcion = new Inscripcion();
        $estudiante->carne=$request->input('carne');
        $estudiante->nombres=$request->input('nombres');
        $estudiante->apellidos=$request->input('apellidos');
        $estudiante->edad=$request->input('edad');
        $estudiante->dui=$request->input('dui');
        $sexo=sexo::find(request('sexo'));
        $carrera=carrera::find(request('carrera'));
        $departamento=departamento::find(request('departamento'));
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
        
        /*$fecha=Carbon::now();
        $fecha=$fecha->format('d-m-y');
        $inscripcion->fecha=$fecha;
        $inscripcion->estudiante()->associate($estudiante);
        $area=area::find(request('area'));
        $inscripcion->area()->associate($area);
        $inscripcion->save();*/
       return redirect()->route('Expedientes.index',[$estudiante])->with('status','Expediente actualizado correctamente');
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
   
