<?php

namespace App\Http\Controllers;

use App\Municipio;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function getMunicipios(Request $request, $id)
    {
        if ($request->ajax()) {
            $municipios = Municipio::municipios($id);
            return response()->json($municipios);
        }
    }
}
