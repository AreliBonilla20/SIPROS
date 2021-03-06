<?php

namespace App\Http\Controllers;

use App;
use App\Institucion;
use App\Sector;
use App\TipoInstitucion;
use App\Region;
use App\Departamento;
use App\Municipio;
use App\Fecha;
use Illuminate\Http\Request;
use RealRashid\SweerAlert\Facades\Alert;
use App\Http\Requests\InstitucionRequest;
use App\Http\Requests\BusquedaRequest;
use DB;


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
        $inicio = "";
        $final = "";

        return view('Instituciones/instituciones_listado', compact('instituciones', 'inicio', 'final'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sectores          = Sector::all();
        $tipo_instituciones = TipoInstitucion::all();
        $regiones          = Region::all();
        $departamentos     = Departamento::all();
        $municipios        = Municipio::all();

        return view('Instituciones/institucion_nueva', compact('sectores', 'tipo_instituciones', 'regiones', 'departamentos', 'municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InstitucionRequest $request)
    {
        $nueva_institucion                      = new Institucion;
        $nueva_institucion->nombre              = $request->nombre;
        $nueva_institucion->tipo_institucion_id = $request->tipo_institucion_id;
        $nueva_institucion->direccion           = $request->direccion;
        $nueva_institucion->id_region           = $request->id_region;
        $nueva_institucion->id_departamento     = $request->id_departamento;
        $nueva_institucion->id_municipio        = $request->id_municipio;
        $nueva_institucion->sector_id           = $request->sector_id;

        if ($nueva_institucion->save()) {
            return redirect()->route('ver_institucion', $nueva_institucion)->withSuccess('Institución agregada correctamente!');
        } else {
            return redirect('instituciones')->withWarning('Ha ocurrido un error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $institucion        = Institucion::findOrFail($id);
        $cantidad_proyectos = count($institucion->proyectos);
        return view('Instituciones/institucion_ver', compact('institucion', 'cantidad_proyectos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Institucion  $institucion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $institucion_actualizar = Institucion::findOrFail($id);
        $sectores              = Sector::all();
        $tipo_instituciones    = TipoInstitucion::all();
        $regiones              = Region::all();
        $departamentos         = Departamento::all();
        $municipios            = Municipio::all();

        return view('Instituciones/institucion_editar', compact('institucion_actualizar', 'sectores', 'tipo_instituciones', 'regiones', 'departamentos', 'municipios'));
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
        $institucion_actualizar                      = Institucion::findOrFail($id);
        $institucion_actualizar->nombre              = $request->nombre;
        $institucion_actualizar->tipo_institucion_id = $request->tipo_institucion_id;
        $institucion_actualizar->direccion           = $request->direccion;
        $institucion_actualizar->id_region           = $request->id_region;
        $institucion_actualizar->id_departamento     = $request->id_departamento;
        $institucion_actualizar->id_municipio        = $request->id_municipio;
        $institucion_actualizar->sector_id           = $request->sector_id;

        if ($institucion_actualizar->save()) {
            return redirect()->route('ver_institucion', $institucion_actualizar)->withSuccess('Institución actualizada correctamente!');
        } else {
            return redirect('editar_institucion', $institucion_actualizar)->withWarning('Ha ocurrido un error!');
        }
    }

    //Función que permite buscar instituciones por fechas de creación, recibe como parámetro una fecha inicio y una fecha final de la búsqueda
    public function buscar(BusquedaRequest $request)
    {
        $inicio = $request->get('fecha_inicio');
        $final = $request->get('fecha_final');
        $inicio_formato = Fecha::fechaTexto($inicio);
        $final_formato = Fecha::fechaTexto($final);

        $instituciones = Institucion::whereBetween('created_at', [$inicio, $final])->get();
        return view('Instituciones/instituciones_listado', compact('instituciones', 'inicio', 'final', 'inicio_formato', 'final_formato'));
    }


    //Se calculan las estadísticas correspondientes a los estudiantes hasta la fecha actual
    public function estadisticas()
    {   
       
        $instituciones = Institucion::all()->count();
        $instituciones_sector = DB::table('sectors')->leftjoin('institucions', 'institucions.sector_id', '=', 'sectors.id')
                                  ->select(DB::raw('count(institucions.id) as cantidad, nombre_sector'))
                                  ->groupBy('nombre_sector')->get();

        $instituciones_tipo = DB::table('tipo_institucions')->leftjoin('institucions', 'institucions.tipo_institucion_id', '=', 'tipo_institucions.id')
                                ->select(DB::raw('count(institucions.id) as cantidad, tipo_institucion'))
                                ->groupBy('tipo_institucion')->get();

        $instituciones_activas = DB::table('proyectos')->leftjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                ->where('proyectos.estado_proyecto','Disponible')
                                ->count();

        $instituciones_inactivas = DB::table('proyectos')->leftjoin('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                ->where('proyectos.estado_proyecto','No disponible')
                                ->count();

        //Llama a la función fecha_hoy, que devulve la fecha actual con formato cadena
        $fecha_actual = Fecha::fecha_hoy();       

        return view('Instituciones/estadisticas_instituciones', compact('instituciones', 'instituciones_sector', 'instituciones_tipo', 'instituciones_activas', 'instituciones_inactivas', 'fecha_actual'));
    }
}
