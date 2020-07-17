<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //users
        Permission::create([
            'name'           => 'Navegar usuarios',
            'slug'           => 'users.index',
            'description'    => 'Navega en todos los usuarios del sistema',

        ]);

        Permission::create([
            'name'           => 'Ver detalles de usuarios',
            'slug'           => 'users.show',
            'description'    => 'Ver detalles de cada usuario del sistema',

        ]);

        Permission::create([
            'name'           => 'Edición de usuarios',
            'slug'           => 'users.edit',
            'description'    => 'Editar datos de los usuarios del sistema',

        ]);



        //Roles
        Permission::create([
            'name'           => 'Navegar roles',
            'slug'           => 'roles.index',
            'description'    => 'Navega en todos los roles del sistema',

        ]);

        Permission::create([
            'name'           => 'Ver detalles de roles',
            'slug'           => 'roles.show',
            'description'    => 'Ver detalles de cada roles del sistema',

        ]);

        Permission::create([
            'name'           => 'Creación de roles',
            'slug'           => 'roles.create',
            'description'    => 'Editar datos de los roles del sistema',

        ]);

        Permission::create([
            'name'           => 'Edición de roles',
            'slug'           => 'roles.edit',
            'description'    => 'Editar datos de los roles del sistema',

        ]);

        Permission::create([
            'name'           => 'Eliminar roles',
            'slug'           => 'roles.destroy',
            'description'    => 'Eliminar datos de los roles del sistema',

        ]);



        //Expediente
        Permission::create([
            'name'           => 'Navegar expediente',
            'slug'           => 'expediente.index',
            'description'    => 'Navega en todos los expedientes del sistema',

        ]);

        Permission::create([
            'name'           => 'Ver detalles de expediente',
            'slug'           => 'expediente.show',
            'description'    => 'Ver detalles de cada expediente del sistema',

        ]);

        Permission::create([
            'name'           => 'Creación de expediente',
            'slug'           => 'expediente.create',
            'description'    => 'Editar datos de los expediente del sistema',

        ]);

        Permission::create([
            'name'           => 'Edición de expediente',
            'slug'           => 'expediente.edit',
            'description'    => 'Editar datos de los expedientes del sistema',

        ]);



        //proyecto
        Permission::create([
            'name'           => 'Navegar proyecto',
            'slug'           => 'proyecto.index',
            'description'    => 'Navega en todos los proyectos del sistema',

        ]);

        Permission::create([
            'name'           => 'Ver detalles de proyectos',
            'slug'           => 'proyecto.show',
            'description'    => 'Ver detalles de cada proyectos del sistema',

        ]);

        Permission::create([
            'name'           => 'Creación de proyecto',
            'slug'           => 'proyecto.create',
            'description'    => 'Editar datos de los proyectos del sistema',

        ]);

        Permission::create([
            'name'           => 'Edición de proyectos',
            'slug'           => 'proyecto.edit',
            'description'    => 'Editar datos de los proyectos del sistema',

        ]);





        //Institucines
        Permission::create([
            'name'           => 'Navegar en instituciones',
            'slug'           => 'institucion.index',
            'description'    => 'Navega en todos las instituciones del sistema',

        ]);

        Permission::create([
            'name'           => 'Ver detalles de institucion',
            'slug'           => 'institucion.show',
            'description'    => 'Ver detalles de cada institucion del sistema',

        ]);

        Permission::create([
            'name'           => 'Creación de institucion',
            'slug'           => 'institucion.create',
            'description'    => 'Editar datos de las instituciones del sistema',

        ]);

        Permission::create([
            'name'           => 'Edición de institucion',
            'slug'           => 'institucion.edit',
            'description'    => 'Editar datos de las instituciones del sistema',

        ]);




    }
}
