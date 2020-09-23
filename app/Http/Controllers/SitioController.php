<?php

namespace App\Http\Controllers;

use App\Area;
use App\Aviso;
use App\Carrera;
use App\Proyecto;
use DB;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
    {
        $ultimo        = Aviso::latest('id')->first();
        $avisos        = Aviso::orderBy('id', 'desc')->take(5)->get();
        $proyectos = DB::select(
            "select count(p.id) as cantidad, s.nombre_sector 
            from proyectos p join institucions i on p.id_institucion = i.id 
            join sectors s on i.sector_id =s.id group by s.nombre_sector"
        );
        $areas = Area::all();
        return view('Sitio/index', compact('avisos', 'ultimo', 'proyectos', 'areas' ));
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
        $aviso->url         = $request->file('imagen')->store('public');
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
        $aviso->url         = $request->file('imagen')->store('public');
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
