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
    ->middleware(['permission:expediente.index', 'auth']);

Route::get('/expedientes/crear', 'EstudianteController@create')->name('crear_expediente')
    ->middleware(['permission:expediente.create', 'auth']);

Route::post('/expedientes/guardar', 'EstudianteController@store')->name('guardar_expediente')
    ->middleware(['permission:expediente.store', 'auth']);

Route::get('/expedientes/editar/{id}', 'EstudianteController@edit')->name('editar_expediente')
    ->middleware(['permission:expediente.edit', 'auth']);

Route::put('/expedientes/actualizar/{id}', 'EstudianteController@update')->name('actualizar_expediente')
    ->middleware(['permission:expediente.update', 'auth']);

Route::get('/expedientes/ver/{id}', 'EstudianteController@show')->name('ver_expediente')
    ->middleware(['permission:expediente.show', 'auth']);

///////////////////////////////////////Rutas de reportes///////////////////////////////////////

Route::get('/pdfExpedientes','ReporteController@pdfExpedientes')->name('reporte_expedientes');

Route::get('/expedientes/certificado/{id}', 'ReporteController@pdfCertificado')->name('certificado_estudiante');

Route::get('/expedientes/asignacion/{id}', 'ReporteController@pdfAsignacion')->name('asignacion_estudiante');

///////////////////////////////////////Rutas de la gestión de instituciones///////////////////////////////////////
Route::get('/instituciones', 'InstitucionController@index')->name('instituciones')
    ->middleware(['permission:institucion.index', 'auth']);

Route::get('/instituciones/crear', 'InstitucionController@create')->name('crear_institucion')
    ->middleware(['permission:institucion.create', 'auth']);

Route::post('/instituciones/guardar', 'InstitucionController@store')->name('guardar_institucion')
    ->middleware(['permission:institucion.store', 'auth']);

Route::get('/instituciones/editar/{id}', 'InstitucionController@edit')->name('editar_institucion')
    ->middleware(['permission:institucion.edit', 'auth']);

Route::put('/instituciones/actualizar/{id}', 'InstitucionController@update')->name('actualizar_institucion')
    ->middleware(['permission:institucion.update', 'auth']);  

Route::get('/instituciones/ver/{id}', 'InstitucionController@show')->name('ver_institucion')
    ->middleware(['permission:expediente.show', 'auth']);

Route::get('/pdfInstituciones','ReporteController@pdfInstituciones')->name('reporte_instituciones');

///////////////////////////////////////Rutas de la gestión de proyectos/////////////////////////////////////////
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos')
    ->middleware(['permission:proyecto.index', 'auth']);

Route::get('/proyectos/crear', 'ProyectoController@create')->name('crear_proyecto')
    ->middleware(['permission:proyecto.create', 'auth']);

Route::post('/proyectos/guardar', 'ProyectoController@store')->name('guardar_proyecto')
    ->middleware(['permission:proyecto.store', 'auth']);

Route::get('/proyectos/editar/{id}', 'ProyectoController@edit')->name('editar_proyecto')
    ->middleware(['permission:proyecto.edit', 'auth']);
    
Route::put('/proyectos/actualizar/{id}', 'ProyectoController@update')->name('actualizar_proyecto')
    ->middleware(['permission:proyecto.update', 'auth']);
    
Route::get('/proyectos/ver/{id}', 'ProyectoController@show')->name('ver_proyecto')
    ->middleware(['permission:proyecto.show', 'auth']);

});
Route::get('/pdfProyectos','ReporteController@pdfProyectos')->name('reporte_proyectos');


///////////////////////////////////////Ruta asignación de proyectos/////////////////////////////////////////
Route::post('/asignacion_proyecto/guardar', 'AsignacionController@store')->name('guardar_asignacion')
    ->middleware(['permission:asignacion.store', 'auth']);


///////////////////////////////////////Ruta de gestión de prórrogas/////////////////////////////////////////
Route::get('/prorrogas', 'ProrrogaController@index')->name('prorrogas')
    ->middleware(['permission:prorrogas.index', 'auth']);

Route::post('/prorroga/guardar', 'ProrrogaController@store')->name('guardar_prorroga')
    ->middleware(['permission:prorrogas.store', 'auth']);

Route::put('/prorroga/actualizar/{id}', 'ProrrogaController@update')->name('actualizar_prorroga')
    ->middleware(['permission:prorrogas.update', 'auth']);

Route::get('/pdfProrrogas','ReporteController@pdfProrrogas')->name('reporte_prorrogas');


///////////////////////////////////////Ruta de gestión de memorias/////////////////////////////////////////
Route::get('/memoria/crear/{id}', 'MemoriaController@create')->name('crear_memoria')
    ->middleware(['permission:memoria.create', 'auth']);

Route::post('/memoria/guardar', 'MemoriaController@store')->name('guardar_memoria')
    ->middleware(['permission:memoria.store', 'auth']);

Route::get('/memoria/editar/{id}', 'MemoriaController@edit')->name('editar_memoria')
    ->middleware(['permission:memoria.edit', 'auth']);

Route::put('/memoria/actualizar/{id}', 'MemoriaController@update')->name('actualizar_memoria')
    ->middleware(['permission:memoria.update', 'auth']);

Route::get('/memoria/ver/{id}', 'MemoriaController@show')->name('ver_memoria')
    ->middleware(['permission:memoria.show', 'auth']);

////////////////////////////////Rutas de obtención de datos//////////////////////////////////
Route::get('/departamentos/{id}', 'RegionController@getDepartamentos');

Route::get('/municipios/{id}', 'DepartamentoController@getMunicipios');

Route::get('/areas/{id}', 'CarreraController@getAreas');


 
///////////////////////////RUTAS DEL SITIO/////////

Route::get('sitio/inicio', 'SitioController@index')->name('sitio_index');
 

Route::get('sitio/proyectos', 'SitioController@proyectos')->name('sitio_proyectos');


Route::get('sitio/blog', 'SitioController@blog')->name('sitio_blog');
    
Route::get('sitio/aviso', 'AvisoController@create')->name('sitio_aviso')
    ->middleware(['permission:aviso.create', 'auth']);

Route::post('sitio/aviso_post', 'AvisoController@store')->name('sitio_aviso_post')
    ->middleware(['permission:aviso.create', 'auth']);

Route::get('sitio/avisos', 'AvisoController@index')->name('sitio_avisos')
    ->middleware(['permission:aviso.index', 'auth']);

Route::get('sitio/editar_aviso/{id} ', 'AvisoController@edit')->name('sitio_editar_aviso')
    ->middleware(['permission:aviso.edit', 'auth']);

Route::put('sitio/editar_aviso_put/{id}', 'AvisoController@update')->name('sitio_editar_aviso_put')
    ->middleware(['permission:aviso.edit', 'auth']);

Route::delete('sitio/eliminar_aviso/{id}', 'AvisoController@destroy')->name('sitio_eliminar_aviso')
    ->middleware(['permission:aviso.destroy', 'auth']);