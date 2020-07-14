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

//Roles
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

//Usuarios

Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');

Route::get('users/create', 'UserController@create')->name('users.create')
    ->middleware('permission:users.create');

Route::get('users/store', 'UserController@store')->name('users.store')
    ->middleware('permission:users.store');

Route::post('users/{role}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

Route::post('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');


//Rutas de los expedientes
Route::get('/expedientes_listado', function () {
    return view('Expedientes/expedientes_listado');
});


Route::get('/expediente_nuevo', function () {
    return view('Expedientes/expediente_nuevo');
});

//Instituciones
Route::get('/Instituciones', 'InstitucionController@index')->name('instituciones');
Route::get('/Instituciones/crear', 'InstitucionController@create')->name('crearInstitucion');
Route::post('/Instituciones/guardar', 'InstitucionController@store')->name('guardarInstitucion');
Route::get('/Instituciones/editar/{id}', 'InstitucionController@edit')->name('editarInstitucion');
Route::put('/Instituciones/actualizar/{id}', 'InstitucionController@update')->name('actualizarInstitucion');
Route::delete('/Instituciones/eliminar/{id}', 'InstitucionController@destroy')->name('eliminarInstitucion');

//Rutas de proyectos
Route::get('/Proyectos', 'ProyectoController@index')->name('proyectos');
Route::get('/proyecto_nuevo', 'ProyectoController@create')->name('crear_proyecto');
Route::post('/Proyectos/guardar', 'ProyectoController@store')->name('guardar_proyecto');
Route::get('/Proyectos/editar/{id}', 'ProyectoController@edit')->name('editar_proyecto');
Route::put('/Proyectos/actualizar/{id}', 'ProyectoController@update')->name('actualizar_proyecto');
//Route::delete('/Proyectos/eliminar/{id}', 'ProyectoController@destroy')->name('eliminar_proyecto');


//Rutas para los usuarios
Route::get('/usuarios_listado', function () {
    return view('Usuarios/usuarios_listado');
});

Route::get('/usuario_nuevo', function () {
    return view('Usuarios/usuario_nuevo');
});

});