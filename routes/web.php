<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Login
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Rutas de los expedientes
Route::get('/expedientes_listado', function () {
    return view('Expedientes/expedientes_listado');
});

Route::get('/expediente_nuevo', function () {
    return view('Expedientes/expediente_nuevo');
});


//Rutas de las instituciones
Route::get('/instituciones_listado', function () {
    return view('Instituciones/instituciones_listado');
});

Route::get('/institucion_nueva', function () {
    return view('Instituciones/institucion_nueva');
});


//Rutas de los proyectos
Route::get('/proyectos_listado', function () {
    return view('Proyectos/proyectos_listado');
});

Route::get('/proyecto_nuevo', function () {
    return view('Proyectos/proyecto_nuevo');
});


//Rutas para los usuarios
Route::get('/usuarios_listado', function () {
    return view('Usuarios/usuarios_listado');
});

Route::get('/usuario_nuevo', function () {
    return view('Usuarios/usuario_nuevo');
});