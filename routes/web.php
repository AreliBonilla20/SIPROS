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

///////////////////////////////////////Rutas de la gestión de roles////////////////////////////////////////////////
Route::get('roles', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.store');

Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

Route::post('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

Route::post('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

Route::post('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

Route::post('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

Route::post('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

///////////////////////////////////////Rutas de la gestión de usuarios////////////////////////////////////////////
Route::get('/usuarios', 'UserController@index')->name('usuarios')
    ->middleware('permission:usuarios');

Route::get('usuarios/crear', 'UserController@create')->name('crear_usuario')
    ->middleware('permission:crear_usuario');

Route::post('usuarios/guardar', 'UserController@store')->name('guardar_usuario')
    ->middleware('permission:guardar_usuario');

Route::get('usuarios/editar/{id}', 'UserController@edit')->name('editar_usuario')
    ->middleware('permission:editar_usuario');

Route::put('usuarios/actualizar/{id}', 'UserController@update')->name('actualizar_usuario')
    ->middleware('permission:actualizar_usuario');

///////////////////////////////////////Rutas de la gestión de expedientes/////////////////////////////////////////
/*Route::get('/expedientes_listado', function () {
    return view('Expedientes/expedientes_listado');
});

Route::get('/expediente_nuevo', function () {
    return view('Expedientes/expediente_nuevo');
});*/
Route::resource('Expedientes','estudianteController');

///////////////////////////////////////Rutas de la gestión de instituciones///////////////////////////////////////
Route::get('/instituciones', 'InstitucionController@index')->name('instituciones');
Route::get('/instituciones/crear', 'InstitucionController@create')->name('crear_institucion');
Route::post('/instituciones/guardar', 'InstitucionController@store')->name('guardar_institucion');
Route::get('/instituciones/editar/{id}', 'InstitucionController@edit')->name('editar_institucion');
Route::put('/instituciones/actualizar/{id}', 'InstitucionController@update')->name('actualizar_institucion');


///////////////////////////////////////Rutas de la gestión de proyectos/////////////////////////////////////////
Route::get('/proyectos', 'ProyectoController@index')->name('proyectos');
Route::get('/proyectos/crear', 'ProyectoController@create')->name('crear_proyecto');
Route::post('/proyectos/guardar', 'ProyectoController@store')->name('guardar_proyecto');
Route::get('/proyectos/editar/{id}', 'ProyectoController@edit')->name('editar_proyecto');
Route::put('/proyectos/actualizar/{id}', 'ProyectoController@update')->name('actualizar_proyecto');


Route::get('/rol_nuevo', function () {
    return view('Roles/rol_nuevo');
});


});