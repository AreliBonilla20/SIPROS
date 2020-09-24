<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Aviso;
use App\Carrera;
use App\Proyecto;
use App\Institucion;
use DB;

class AvisoController extends Controller
{
    public function create()
    {

        return view('AdminSitio/avisocrear');

    }

    public function store(Request $request)
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

    public function index()
    {

        $avisos = Aviso::orderBy('created_at', 'desc')->paginate(4);

        return view('AdminSitio/avisos', compact('avisos'));

    }

    public function edit($id)
    {

        $aviso = Aviso::findOrFail($id);

        return view('AdminSitio/avisoeditar', compact('aviso'));
    }

    public function update(Request $request, $id)
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

    public function destroy($id)
    {
        $aviso = Aviso::findOrFail($id);
        $aviso->delete();

        return redirect()->route('sitio_avisos');

    }
}
