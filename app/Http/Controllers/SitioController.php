<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aviso;

class SitioController extends Controller
{
    public function index(){
        $ultimo=Aviso::latest('id')->first();
        $avisos=Aviso::orderBy('id', 'desc')->take(5)->get();
        return view('Sitio/index', [
            'avisos'=>$avisos,
            'ultimo'=>$ultimo,
        ]);
    }

    public function proyectos(){
        return view('Sitio/proyectos');
    }

    public function blog(){
        if(\request('search')!=null){
            $avisos=Aviso::select("SELECT * FROM avisos WHERE titulo = ?", \request('search'));
        }else{
            $avisos=Aviso::all();
        }
        return view('Sitio/blog',[
            'lista'=>$avisos,
        ]);
    }
}
