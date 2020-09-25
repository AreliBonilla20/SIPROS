<?php

namespace App\Http\Controllers;

use App\Area;
use App\Aviso;
use App\Carrera;
use App\Proyecto;
use App\Institucion;
use DB;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
    {
        $ultimo                 = Aviso::latest('id')->first();
        $avisos                 = Aviso::orderBy('id', 'desc')->take(5)->get();
        $areas                  = Area::all();
        $proyectos_sectores     = DB::table('proyectos')->join('institucions', 'proyectos.id_institucion', '=', 'institucions.id')
                                      ->join('sectors', 'institucions.sector_id', '=', 'sectors.id')
                                      ->select(DB::raw('count(*) as cantidad, nombre_sector'))
                                      ->groupBy('nombre_sector')->get();
        

        return view('Sitio/index', compact('avisos', 'ultimo', 'proyectos_sectores', 'areas' ));
    }

    public function proyectos()
    {
        $carreras  = Carrera::all();
        $proyectos = Proyecto::all();
        return view('Sitio/proyectos', compact('carreras', 'proyectos'));
    }

    public function blog()
    {

        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);

        return view('Sitio/blog', compact('avisos'));
    }

    
}
