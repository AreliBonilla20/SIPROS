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

Route::middleware(['auth'])->group(function(){

///////////////////////////////////////Rutas de la gestión de roles///////////////////////////////////////////////
Route::get('roles', 'RoleController@index')->name('roles')
    ->middleware('permission:roles.index');

Route::get('roles/crear', 'RoleController@create')->name('crear_rol')
    ->middleware('permission:roles.create');

Route::post('roles/guardar', 'RoleController@store')->name('guardar_rol')
    ->middleware('permission:roles.store');

Route::get('roles/editar/{id}', 'RoleController@edit')->name('editar_rol')
    ->middleware('permission:roles.edit');

Route::put('roles/actualizar/{id}', 'RoleController@update')->name('actualizar_rol')
    ->middleware('permission:roles.update');

Route::post('roles/eliminar/{id}', 'RoleController@destroy')->name('eliminar_rol')
    ->middleware('permission:roles.destroy');

///////////////////////////////////////Rutas de la gestión de usuarios////////////////////////////////////////////
Route::get('/usuarios', 'UserController@index')->name('usuarios')
    ->middleware('permission:user.index');

Route::get('usuarios/crear', 'UserController@create')->name('crear_usuario')
    ->middleware('permission:user.create');

Route::post('usuarios/guardar', 'UserController@store')->name('guardar_usuario')
    ->middleware('permission:user.store');

Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:user.edit');

Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:user.update');

///////////////////////////////////////Rutas de la gestión de expedientes/////////////////////////////////////////
Route::get('/expedientes', 'EstudianteController@index')->name('expedientes')
    ->middleware('permission:expedientes.index');

Route::get('/expedientes/crear', 'EstudianteController@create')->name('crear_expediente')
    ->middleware('permission:expediente.create');

Route::post('/expedientes/guardar', 'EstudianteController@store')->name('guardar_expediente')
    ->middleware('permission:expediente.store');

Route::get('/expedientes/editar/{id}', 'EstudianteController@edit')->name('editar_expediente')
    ->middleware('permission:expediente.edit');

Route::put('/expedientes/actualizar/{id}', 'EstudianteController@update')->name('actualizar_expediente')
    ->middleware('permission:expediente.update');

Route::get('/expedientes/ver/{id}', 'EstudianteController@show')->name('ver_expediente')
    ->middleware('permission:expediente.show');

Route::get('/pdfExpedientes','EstudianteController@exportarPDF')->name('reporte_expedientes');
///////////////////////////////////////Rutas de la gestión de instituciones///////////////////////////////////////
Route::get('/instituciones', 'InstitucionController@index')->name('instituciones')
    ->middleware('permission:institucion.index');

Route::get('/instituciones/crear', 'InstitucionController@create')->name('crear_institucion')
    ->middleware('permission:institucion.create');

Route::post('/instituciones/guardar', 'InstitucionController@store')->name('guardar_institucion')
    ->middleware('permission:institucion.store');

Route::get('/instituciones/editar/{id}', 'InstitucionController@edit')->name('editar_institucion')
    ->middleware('permission:institucion.edit');

Route::put('/instituciones/actualizar/{id}', 'InstitucionController@update')->name('actualizar_institucion')
    ->middleware('permission:institucion.update');   

Route::get('/pdfInstituciones','InstitucionController@exportarPDF')->name('reporte_instituciones');

///////////////////////////////////////Rutas de la gestión de proyectos/////////////////////////////////////////
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos')
    ->middleware('permission:proyecto.index');

Route::get('/proyectos/crear', 'ProyectoController@create')->name('crear_proyecto')
    ->middleware('permission:proyecto.create');

Route::post('/proyectos/guardar', 'ProyectoController@store')->name('guardar_proyecto')
    ->middleware('permission:proyecto.store');

Route::get('/proyectos/editar/{id}', 'ProyectoController@edit')->name('editar_proyecto')
    ->middleware('permission:proyecto.edit');
    
Route::put('/proyectos/actualizar/{id}', 'ProyectoController@update')->name('actualizar_proyecto')
    ->middleware('permission:proyecto.update');

});
Route::get('/pdfProyectos','ProyectoController@exportarPDF')->name('reporte_proyectos');

///////////////////////////////////////Ruta asignación de proyectos/////////////////////////////////////////
Route::post('/asignacion_proyecto/guardar', 'AsignacionController@store')->name('guardar_asignacion');

Route::post('/prorroga/guardar', 'ProrrogaController@store')->name('guardar_prorroga');
////////////////////////////////Rutas de obtención departamentos y municipios//////////////////////////////////
Route::get('/departamentos/{id}', 'RegionController@getDepartamentos');

Route::get('/municipios/{id}', 'DepartamentoController@getMunicipios');