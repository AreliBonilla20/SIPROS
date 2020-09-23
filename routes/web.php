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

///////////////////////////////////////Rutas de reportes///////////////////////////////////////

Route::get('/pdfExpedientes','ReporteController@pdfExpedientes')->name('reporte_expedientes');

Route::get('/expedientes/certificado/{id}', 'ReporteController@pdfCertificado')->name('certificado_estudiante');

Route::get('/expedientes/asignacion/{id}', 'ReporteController@pdfAsignacion')->name('asignacion_estudiante');

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

Route::get('/instituciones/ver/{id}', 'InstitucionController@show')->name('ver_institucion')
    ->middleware('permission:expediente.show');

Route::get('/pdfInstituciones','ReporteController@pdfInstituciones')->name('reporte_instituciones');

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
    
Route::get('/proyectos/ver/{id}', 'ProyectoController@show')->name('ver_proyecto')
->middleware('permission:proyecto.show');

});
Route::get('/pdfProyectos','ReporteController@pdfProyectos')->name('reporte_proyectos');

///////////////////////////////////////Ruta asignación de proyectos/////////////////////////////////////////
Route::post('/asignacion_proyecto/guardar', 'AsignacionController@store')->name('guardar_asignacion');

///////////////////////////////////////Ruta de gestión de prórrogas/////////////////////////////////////////
Route::get('/prorrogas', 'ProrrogaController@index')->name('prorrogas');

Route::post('/prorroga/guardar', 'ProrrogaController@store')->name('guardar_prorroga');

Route::put('/prorroga/actualizar/{id}', 'ProrrogaController@update')->name('actualizar_prorroga');

Route::get('/pdfProrrogas','ReporteController@pdfProrrogas')->name('reporte_prorrogas');

///////////////////////////////////////Ruta de gestión de memorias/////////////////////////////////////////
Route::get('/memoria/crear/{id}', 'MemoriaController@create')->name('crear_memoria');

Route::post('/memoria/guardar', 'MemoriaController@store')->name('guardar_memoria');

Route::get('/memoria/editar/{id}', 'MemoriaController@edit')->name('editar_memoria');

Route::put('/memoria/actualizar/{id}', 'MemoriaController@update')->name('actualizar_memoria');

Route::get('/memoria/ver/{id}', 'MemoriaController@show')->name('ver_memoria');

////////////////////////////////Rutas de obtención de datos//////////////////////////////////
Route::get('/departamentos/{id}', 'RegionController@getDepartamentos');

Route::get('/municipios/{id}', 'DepartamentoController@getMunicipios');

Route::get('/areas/{id}', 'CarreraController@getAreas');


 
///////////////////////////RUTAS DEL SITIO/////////

Route::get('sitio/inicio', 'SitioController@index')->name('sitio.index');

Route::get('sitio/proyectos', 'SitioController@proyectos')->name('sitio.proyectos');

Route::get('sitio/blog', 'SitioController@blog')->name('sitio.blog');

Route::get('sitio/aviso', 'SitioController@aviso')->name('sitio.aviso');

Route::post('sitio/aviso_post', 'SitioController@aviso_post')->name('sitio.aviso_post');

Route::get('sitio/avisos', 'SitioController@avisos')->name('sitio.avisos');

Route::get('sitio/editar_aviso/{id} ', 'SitioController@editar_aviso')->name('sitio.editar_aviso');

Route::put('sitio/editar_aviso_put/{id}', 'SitioController@editar_aviso_put')->name('sitio.editar_aviso_put');

Route::delete('sitio/eliminar_aviso/{id}', 'SitioController@eliminar_aviso')->name('sitio.eliminar_aviso');