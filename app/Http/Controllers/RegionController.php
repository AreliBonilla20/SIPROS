<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    public function getDepartamentos(Request $request, $id)
    {
        if ($request->ajax()) {
            $departamentos = Departamento::departamentos($id);
            return response()->json($departamentos);
        }
    }
}
