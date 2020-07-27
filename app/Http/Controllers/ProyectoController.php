<?php

namespace App\Http\Controllers;

use App\Institucion;
use App\Proyecto;
use Illuminate\Http\Request;
use App\Http\Requests\ProyectoRequest;

class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Lita los proyectos
        $proyectos=Proyecto::all();
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

        $instituciones=Institucion::all();
        return view('Proyectos/proyecto_nuevo', compact('instituciones'));
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
         $proyecto = new Proyecto();
         $proyecto->nombre = $request->nombre;
         $proyecto->area_de_conocimiento = $request->area;
         $proyecto->objetivos = $request->objetivos;
         $proyecto->logros = $request->logro;
         $proyecto->id_institucion = $request->institucion;
         $proyecto->cantidad_de_estudiantes = $request->cantidad;
         $proyecto->nombre_encargado = $request->encargado;
         $proyecto->telefono = $request->telefono;
         $proyecto->email = $request->correo;
         $proyecto->save();
 
         //return redirect('Proyectos');
         return back()->with('agregado', 'Proyecto agregado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar uno en específico
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
         $instituciones=Institucion::all();
         return view('Proyectos/proyecto_editar', compact('proyectoUpdate','instituciones'));
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
        //Actualizar un proyecto
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->nombre = $request->nombre;
        $proyecto->area_de_conocimiento = $request->area;
        $proyecto->objetivos = $request->objetivos;
        $proyecto->logros = $request->logro;
        $proyecto->id_institucion = $request->institucion;
        $proyecto->cantidad_de_estudiantes = $request->cantidad;
        $proyecto->nombre_encargado = $request->encargado;
        $proyecto->telefono = $request->telefono;
        $proyecto->email = $request->correo;
        $proyecto->save();
        
        //return redirect('Proyectos');
        return back()->with('actualizado', 'Proyecto actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Elimina un proyecto
    }
}
