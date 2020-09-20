<?php

namespace App\Http\Controllers;

use App\Area;
use App\Aviso;
use App\Carrera;
use DB;
use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
    {
        $ultimo        = Aviso::latest('id')->first();
        $avisos        = Aviso::orderBy('id', 'desc')->take(5)->get();
        $instituciones = DB::select(
            "select count(i.id) as cantidad, ti.tipo_institucion
            from institucions i join tipo_institucions ti
            where i.tipo_institucion_id =ti.id
            group by ti.tipo_institucion"
        );
        //$areas_carreras=DB::select(
        //"select * from carreras c join areas_carreras ac where c.codigo = ac.codigo"
        //);
        //$carreras=Carrera::all();
        $areas = Area::all();
        return view('Sitio/index', [
            'avisos'        => $avisos,
            'ultimo'        => $ultimo,
            'instituciones' => $instituciones,
            //'carreras'=>$carreras,
            'areas'         => $areas,
            //'areas_carreras'=>$areas_carreras,
        ]);
    }

    public function proyectos()
    {
        $carreras  = Carrera::all();
        $proyectos = DB::select(
            "select p.codigo_carrera, p.nombre, p.objetivos, p.area_de_conocimiento, p.logros, p.cantidad_de_estudiantes, i.nombre as nombre_institucion
            from proyectos p join institucions i
            where p.id_institucion = i.id");
        return view('Sitio/proyectos', [
            'carreras'  => $carreras,
            'proyectos' => $proyectos,
        ]);
    }

    public function blog()
    {

        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);

        return view('Sitio/blog', [
            'lista' => $avisos,
        ]);
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

        return redirect()->route('sitio.avisos');
    }

    public function avisos()
    {

        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);

        return view('AdminSitio/avisos', [
            'avisos' => $avisos,
        ]);

    }

    public function editar_aviso($id)
    {

        $aviso = Aviso::findOrFail($id);

        return view('AdminSitio/avisoeditar', [
            'aviso' => $aviso,
        ]);
    }

    public function editar_aviso_put(Request $request, $id)
    {

        $aviso              = Aviso::findOrFail($id);
        $aviso->titulo      = request('titulo');
        $aviso->descripcion = request('descripcion');
        $aviso->url         = $request->file('imagen')->store('public');
        $aviso->save();

        return redirect()->route('sitio.avisos');
    }

    public function eliminar_aviso($id)
    {
        $aviso = Aviso::findOrFail($id);
        $aviso->delete();

        return redirect()->route('sitio.avisos');

    }
}
