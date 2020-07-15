<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::paginate();

        return view('Roles/rol_listado', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *git comm
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Roles/rol_nuevo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::Create($request->all());

        return redirect()->route('roles.edit', $role->id)
        ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $role->update($request->all());

        return redirect()->route('roles.edit', $role->id)
        ->with('info', 'Rol actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $product->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
