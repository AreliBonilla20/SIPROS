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

Route::post('roles/editar/{id}', 'RoleController@edit')->name('editar_rol')
    ->middleware('permission:roles.edit');

Route::post('roles/actualizar/{id}', 'RoleController@update')->name('actualizar_rol')
    ->middleware('permission:roles.edit');

Route::post('roles/eliminar/{id}', 'RoleController@destroy')->name('eliminar_rol')
    ->middleware('permission:roles.destroy');

///////////////////////////////////////Rutas de la gestión de usuarios////////////////////////////////////////////
Route::get('/usuarios', 'UserController@index')->name('usuarios')
    ->middleware('permission:usuarios');

Route::get('usuarios/crear', 'UserController@create')->name('crear_usuario')
    ->middleware('permission:crear_usuario');

Route::post('usuarios/guardar', 'UserController@store')->name('guardar_usuario')
    ->middleware('permission:guardar_usuario');

Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

///////////////////////////////////////Rutas de la gestión de expedientes/////////////////////////////////////////
Route::get('/expedientes_listado', function () {
    return view('Expedientes/expedientes_listado');
});

Route::get('/expediente_nuevo', function () {
    return view('Expedientes/expediente_nuevo');
});

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

});