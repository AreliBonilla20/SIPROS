<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use \DB;

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

        $role = Role::create($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles')->withSuccess('Rol creado correctamente!');

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
    public function edit($id)
    {
        $encontrado      = false;
        $rolActualizar   = Role::find($id);
        $permissions     = Permission::get();
        $permisosRol     = DB::select('SELECT permissions.id FROM `permissions` inner join permission_role on  permission_role.permission_id = permissions.id where permission_role.role_id = ' . $id);
        $ultimo          = count($permisosRol);
        $arregloPermisos = [];
        $permisos        = [];

        for ($i = 0; $i < count($permisosRol); $i++) {
            $arregloPermisos[] = $permisosRol[$i]->id;
        }

        for ($i = 0; $i < (count($permissions) - count($permisosRol)); $i++) {
            $arregloPermisos[$ultimo] = 0;
            $ultimo++;
        }

        for ($i = 0; $i < count($arregloPermisos); $i++) {
            for ($j = 0; $j < count($permissions); $j++) {
                if ($permissions[$i]->id == $arregloPermisos[$j]) {
                    $permisos[$i] = $permissions[$i]->id;
                    $encontrado   = true;
                }
            }

            if ($encontrado == false) {
                $permisos[$i] = 0;
            }
            $encontrado = false;
        }

        return view('Roles/rol_editar', compact('rolActualizar', 'permissions', 'permisos'));
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
        $role = Role::find($id);
        $role->update($request->all());

        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles')->withSuccess('Expediente actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
    }
}
