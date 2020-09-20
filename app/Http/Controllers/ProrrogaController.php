  
<?php

namespace App\Http\Controllers;


use App\Prorroga;
use App\Estudiante;
use Illuminate\Http\Request;
use App\Http\Requests\ProrrogaRequest;
use Illuminate\Support\Facades\DB;

class ProrrogaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Muestra el lstado de prorrogas ordenados por fecha de solicitud
        de manera ascendente*/
        $prorrogas = DB::table('prorrogas')->orderBy('fecha_solicitud', 'asc')->get();
        $estudiantes= Estudiante::all();//Devuelve el array de los estudiantes
        return view('Prorrogas/prorrogas_listado', compact('prorrogas','estudiantes'));
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
    
    public function store(ProrrogaRequest $request){
        
        //Retorna la vista de creación de la prorróga
        $prorroga = new Prorroga();
        $prorroga->carne=$request->carne;
        $prorroga->fecha_solicitud=$request->fecha_solicitud;
        $prorroga->estado="Pendiente";
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
        $prorrogaActualizar = Prorroga::findOrFail($id);;
        $prorrogaActualizar->carne=$request->carne;
        $prorrogaActualizar->fecha_solicitud=$request->fecha_solicitud;
        $prorrogaActualizar->estado=$request->estado;
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
}
