<?php

namespace App\Http\Controllers;

use App\Http\Requests\AsignarRolRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::get();

        return view('Usuarios/usuarios_listado', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuarios/usuario_nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {

        User::create([
            'name'     => $request['name'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('usuarios')->with('agregado', 'Usuario agregado correctamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user  = User::find($id);
        $roles = Role::get();

        return view('Usuarios/asignar_roles', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AsignarRolRequest $request, $id)
    {

        $user = User::findOrFail($id);

        //$user->update($request->all());

        $resultado = DB::table('role_user')->where('user_id', $id)->first();
        if ($resultado==null) {
            DB::table('role_user')->insert([
                'role_id' => request('role_id'),
                'user_id' => $id,
            ]);
            
        } else {
            DB::table('role_user')->where('user_id', '=', $user->id)->update([
                'role_id' => request('role_id'),
            ]);
        }
        $objetos = DB::select('SELECT * FROM permission_role WHERE role_id = ?', [request('role_id')]);

            //Borrado de permisos por cambio de rol
            DB::table('permission_user')->where('user_id', $id)->delete();
        
            foreach ($objetos as $objeto) {
                DB::table('permission_user')->insert([
                    'permission_id' => $objeto->permission_id,
                    'user_id' => $id,
                ]);
            }

        return redirect()->route('usuarios')->withSuccess('Rol asignado a usuario correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
