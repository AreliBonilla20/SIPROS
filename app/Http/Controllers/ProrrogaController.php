<?php

namespace App\Http\Controllers;

use App\Estudiante;
use App\Http\Requests\ProrrogaRequest;
use App\Prorroga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ProrrogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prorrogas   = DB::table('prorrogas')->orderBy('fecha_solicitud', 'asc')->get();
        $estudiantes = Estudiante::all();

        return view('Prorrogas/prorrogas_listado', compact('prorrogas', 'estudiantes'));

        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(ProrrogaRequest $request)
    {

        $prorroga                  = new Prorroga();
        $prorroga->carne           = $request->carne;
        $prorroga->fecha_solicitud = $request->fecha_solicitud;
        $prorroga->estado          = "Pendiente";
        $prorroga->save();

        return back()->withSuccess('¡Prórroga creada correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProrrogaRequest $request, $id)
    {
        $prorrogaActualizar                  = Prorroga::findOrFail($id);
        $prorrogaActualizar->carne           = $request->carne;
        $prorrogaActualizar->fecha_solicitud = $request->fecha_solicitud;
        $prorrogaActualizar->estado          = $request->estado;
        $prorrogaActualizar->save();

        return back()->withSuccess('¡Prórroga actualizada correctamente!');
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

    public function exportarPDF()
    {
        $prorrogas   = DB::table('prorrogas')->orderBy('fecha_solicitud', 'asc')->get();
        $estudiantes = Estudiante::all();
        $pdf         = PDF::loadView('Reportes/prorrogas_listado', compact('prorrogas'));
        return $pdf->download('Prorrogas.pdf');
    }
}
