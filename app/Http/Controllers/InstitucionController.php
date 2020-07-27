<?php

namespace App\Http\Controllers;

use App;
use App\Institucion;
use App\Sector;
use App\TipoInstitucion;
use App\Region;
use App\Departamento;
use App\Municipio;
use Illuminate\Http\Request;
use RealRashid\SweerAlert\Facades\Alert;
use App\Http\Requests\InstitucionRequest;

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::all();

        return view('Instituciones/instituciones_listado', compact('instituciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectores = App\Sector::all();
        $tipoInstituciones = App\TipoInstitucion::all();
        $regiones = App\Region::all();
        $departamentos = App\Departamento::all();
        $municipios = App\Municipio::all();

        return view('Instituciones/institucion_nueva', compact('sectores', 'tipoInstituciones', 'regiones', 'departamentos', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitucionRequest $request)
    {
        $nuevaInstitucion = new Institucion;
        $nuevaInstitucion->nombre = $request->input('nombre');
        $nuevaInstitucion->tipo_institucion_id = $request->tipo_institucion_id;
        $nuevaInstitucion->direccion = $request->direccion;
        $nuevaInstitucion->id_region = $request->id_region;
        $nuevaInstitucion->id_departamento = $request->id_departamento;
        $nuevaInstitucion->id_municipio = $request->id_municipio;
        $nuevaInstitucion->sector_id = $request->sector_id;
        $nuevaInstitucion->save();

        toast('Institución agregada correctamente', 'success');
        return redirect('instituciones');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show(Institucion $institucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucionActualizar = App\Institucion::findOrFail($id);
        $sectores = App\Sector::all();
        $tipoInstituciones = App\TipoInstitucion::all();
        $regiones = App\Region::all();
        $departamentos = App\Departamento::all();
        $municipios = App\Municipio::all();

        return view('Instituciones/institucion_editar', compact('institucionActualizar', 'sectores', 'tipoInstituciones', 'regiones', 'departamentos', 'municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(InstitucionRequest $request, $id)
    {
        $institucionActualizar = App\Institucion::findOrFail($id);
        $institucionActualizar->nombre = $request->nombre;
        $institucionActualizar->tipo_institucion_id = $request->tipo_institucion_id;
        $institucionActualizar->direccion = $request->direccion;
        $institucionActualizar->id_region = $request->id_region;
        $institucionActualizar->id_departamento = $request->id_departamento;
        $institucionActualizar->id_municipio = $request->id_municipio;
        $institucionActualizar->sector_id = $request->sector_id;
        $institucionActualizar->save();

        return back()->with('actualizada', 'Institución actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $institucionEliminar = App\Institucion::findOrFail($id);
        $institucionEliminar->delete();
        return back()->with('eliminada', 'Institución eliminada correctamente');
    }
}
