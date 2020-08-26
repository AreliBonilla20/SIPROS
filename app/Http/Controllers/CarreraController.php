<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class CarreraController extends Controller
{
  public function getAreas(Request, $request, $id){
    if($request->ajax()){
        $areas = Area::areas($id);
        return response()->json($areas);
    }
  }
}
