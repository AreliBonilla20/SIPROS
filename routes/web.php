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

Route::post('users/{role}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

Route::post('users/{role}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

Route::post('users/{role}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');





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

});