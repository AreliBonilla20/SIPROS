<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Municipio;

class DepartamentoController extends Controller
{
    public function getMunicipios(Request $request, $id){
        if($request->ajax()){
            $municipios = Municipio::municipios($id);
            return response()->json($municipios);
        }
    }
}
