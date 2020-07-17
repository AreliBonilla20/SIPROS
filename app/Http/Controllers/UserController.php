<?php

namespace App\Http\Controllers;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use \DB;

use Illuminate\Http\Request;

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

        return view('Usuarios/usuarios_listado', compact('users'));
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
    public function store(Request $request)
    {
        $user = User::Create($request->all());

        return back()->with('agregado', 'Usuario guardado correctamente.');
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
        $user = User::find($id);
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
    public function update(Request $request, $id)
    {   
       
        $user = User::find($id);

        $user->update($request->all());

        $resultado = DB::table('role_user')->where('user_id', '=', $user->id)->get();
        if ($resultado->isEmpty()) {
            DB::table('role_user')->insert([
                'role_id' => $request->role_id,
                'user_id' => $user->id,
            ]);
        }else{
            DB::table('role_user')->where('user_id', '=', $user->id)->update([
                'role_id' => $request->role_id
            ]);            
        }

        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con éxito');
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
