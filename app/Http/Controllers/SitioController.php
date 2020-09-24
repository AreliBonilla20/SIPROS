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

    public function aviso()
    {

        return view('AdminSitio/avisocrear');

    }

    public function aviso_post(Request $request)
    {
        $aviso              = new Aviso();
        $aviso->titulo      = request('titulo');
        $aviso->descripcion = request('descripcion');
        if($request->file('imagen')!=null){
            $aviso->url         = $request->file('imagen')->store('public');
        }
        $aviso->save();

        return redirect()->route('sitio_avisos');
    }

    public function avisos()
    {

        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);

        return view('AdminSitio/avisos', compact('avisos'));

    }

    public function editar_aviso($id)
    {

        $aviso = Aviso::findOrFail($id);

        return view('AdminSitio/avisoeditar', compact('aviso'));
    }

    public function editar_aviso_put(Request $request, $id)
    {

        $aviso              = Aviso::findOrFail($id);
        $aviso->titulo      = request('titulo');
        $aviso->descripcion = request('descripcion');
        if($request->file('imagen')!=null){
            $aviso->url         = $request->file('imagen')->store('public');
        }
        $aviso->save();

        return redirect()->route('sitio_avisos');
    }

    public function eliminar_aviso($id)
    {
        $aviso = Aviso::findOrFail($id);
        $aviso->delete();

        return redirect()->route('sitio_avisos');

    }
}
