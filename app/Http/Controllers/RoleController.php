<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;


class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();

        return view('Roles/rol_listado', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *git comm
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        
        return view('Roles/rol_nuevo', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = $request->validate([
            'name'   => 'required',
            'slug' => 'required',
            'description'  => 'required',

        ]);

        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return back()->with('agregado', 'Rol agregado correctamente');

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

        return back()->with('actualizado', 'Rol agregado correctamente');
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
