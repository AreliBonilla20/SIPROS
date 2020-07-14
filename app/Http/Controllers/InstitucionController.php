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

class InstitucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instituciones = Institucion::paginate();

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

        return view('Instituciones/institucion_nueva', compact('sectores'))
        ->with(compact('tipoInstituciones'))
        ->with(compact('regiones'))
        ->with(compact('departamentos'))
        ->with(compact('municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevaInstitucion = new Institucion;
        $request->validate([
            'nombre'=>'required',
            'tipo_institucion_id'=>'required',
            'direccion'=>'required',
            'id_region'=>'required',
            'id_departamento'=>'required',
            'id_municipio'=>'required',
            'sector_id'=>'required',
        ]);

        $nuevaInstitucion->nombre = $request->nombre;
        $nuevaInstitucion->tipo_institucion_id = $request->tipo_institucion_id;
        $nuevaInstitucion->direccion = $request->direccion;
        $nuevaInstitucion->id_region = $request->id_region;
        $nuevaInstitucion->id_departamento = $request->id_departamento;
        $nuevaInstitucion->id_municipio = $request->id_municipio;
        $nuevaInstitucion->sector_id = $request->sector_id;
        $nuevaInstitucion->save();

        return back()->with('agregada', 'Institución agregada correctamente.');
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

        return view('Instituciones/institucion_editar', compact('institucionActualizar'))
        ->with(compact('sectores'))
        ->with(compact('tipoInstituciones'))
        ->with(compact('regiones'))
        ->with(compact('departamentos'))
        ->with(compact('municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
