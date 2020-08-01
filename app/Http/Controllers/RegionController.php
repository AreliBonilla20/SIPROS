<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Region;
use App\Departamento;

class RegionController extends Controller
{
    public function getDepartamentos(Request $request, $id){
        if($request->ajax()){
            $departamentos = Departamento::departamentos($id);
            return response()->json($departamentos);
        }
    }
}
