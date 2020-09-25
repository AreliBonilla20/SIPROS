<?php

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ///////////////users
        Permission::create([
            'name'        => 'Navegar usuarios',
            'slug'        => 'users.index',
            'description' => 'Navega en todos los usuarios del sistema',

        ]);

        Permission::create([
            'name'        => 'Ver detalles de usuarios',
            'slug'        => 'users.show',
            'description' => 'Ver detalles de cada usuario del sistema',

        ]);

        Permission::create([
            'name'        => 'Edición de usuarios',
            'slug'        => 'users.edit',
            'description' => 'Editar datos de los usuarios del sistema',

        ]);



        ///////////////Roles
        Permission::create([
            'name'        => 'Navegar roles',
            'slug'        => 'roles.index',
            'description' => 'Navega en todos los roles del sistema',

        ]);

        Permission::create([
            'name'        => 'Ver detalles de roles',
            'slug'        => 'roles.show',
            'description' => 'Ver detalles de cada roles del sistema',

        ]);

        Permission::create([
            'name'        => 'Creación de roles',
            'slug'        => 'roles.create',
            'description' => 'Crear roles en el sistema',

        ]);

        Permission::create([
            'name'        => 'Edición de roles',
            'slug'        => 'roles.edit',
            'description' => 'Editar datos de los roles del sistema',

        ]);

        Permission::create([
            'name'        => 'Eliminar roles',
            'slug'        => 'roles.destroy',
            'description' => 'Eliminar datos de los roles del sistema',

        ]);



        /////////////////Expediente
        Permission::create([
            'name'        => 'Navegar expediente',
            'slug'        => 'expediente.index',
            'description' => 'Navega en todos los expedientes del sistema',

        ]);

        Permission::create([
            'name'        => 'Ver detalles de expediente',
            'slug'        => 'expediente.show',
            'description' => 'Ver detalles de cada expediente del sistema',

        ]);

        Permission::create([
            'name'        => 'Creación de expediente',
            'slug'        => 'expediente.create',
            'description' => 'Crear expediente en el sistema',

        ]);

        Permission::create([
            'name'        => 'Edición de expediente',
            'slug'        => 'expediente.edit',
            'description' => 'Editar datos de los expedientes del sistema',

        ]);



        ////////////////proyecto
        Permission::create([
            'name'        => 'Navegar proyecto',
            'slug'        => 'proyecto.index',
            'description' => 'Navega en todos los proyectos del sistema',

        ]);

        Permission::create([
            'name'        => 'Ver detalles de proyectos',
            'slug'        => 'proyecto.show',
            'description' => 'Ver detalles de cada proyectos del sistema',

        ]);

        Permission::create([
            'name'        => 'Creación de proyecto',
            'slug'        => 'proyecto.create',
            'description' => 'Crear proyectos en el sistema',

        ]);

        Permission::create([
            'name'        => 'Edición de proyectos',
            'slug'        => 'proyecto.edit',
            'description' => 'Editar datos de los proyectos del sistema',

        ]);



        ////////////////Instituciones
        Permission::create([
            'name'        => 'Navegar en instituciones',
            'slug'        => 'institucion.index',
            'description' => 'Navega en todos las instituciones del sistema',

        ]);

        Permission::create([
            'name'        => 'Ver detalles de institucion',
            'slug'        => 'institucion.show',
            'description' => 'Ver detalles de cada institucion del sistema',

        ]);

        Permission::create([
            'name'        => 'Creación de institucion',
            'slug'        => 'institucion.create',
            'description' => 'Crear instituciones en el sistema',

        ]);

        Permission::create([
            'name'        => 'Edición de institucion',
            'slug'        => 'institucion.edit',
            'description' => 'Editar datos de las instituciones del sistema',

        ]);


        /////////Asignacion de proyectos
        Permission::create([
            'name'        => 'Emisión de carta de asignación',
            'slug'        => 'asignacion.store',
            'description' => 'Emisión de las cartas de asignación de proyectos',

        ]);

        /////////Prórogas
        Permission::create([
            'name'        => 'Navegar entre prorrogas',
            'slug'        => 'prorrogas.index',
            'description' => 'Navega entre las prorrogas emitidas en el sistema',

        ]);

        Permission::create([
            'name'        => 'Actualizar prórrogas',
            'slug'        => 'prorrogas.update',
            'description' => 'Actualizar prórrogas',

        ]);

        //////////Memorias
        Permission::create([
            'name'        => 'Crear memorias',
            'slug'        => 'memoria.create',
            'description' => 'Crea memorias en el sistema',

        ]);
        Permission::create([
            'name'        => 'Edición de memorias',
            'slug'        => 'memoria.edit',
            'description' => 'Edición de memorias en el sistema',

        ]);
        Permission::create([
            'name'        => 'Navegar entre memoria',
            'slug'        => 'memoria.show',
            'description' => 'Navega entre las memoria emitidas en el sistema',

        ]);

        //////////Sitio
        Permission::create([
            'name'        => 'Sitio principal',
            'slug'        => 'sitio.index',
            'description' => 'Gestionar sitio web',

        ]);
        Permission::create([
            'name'        => 'Proyectos en el sitio',
            'slug'        => 'sitio.proyectos',
            'description' => 'Visualizar proyectos existentes',

        ]);
        Permission::create([
            'name'        => 'Blog de noticias',
            'slug'        => 'sitio.blog',
            'description' => 'Visualizar noticias en el sitio web',

        ]);
        Permission::create([
            'name'        => 'Crear aviso',
            'slug'        => 'aviso.create',
            'description' => 'Crear avisos para visualizar en el sitio web',

        ]);
        Permission::create([
            'name'        => 'Visualizar avisos',
            'slug'        => 'aviso.index',
            'description' => 'Visualizar avisos en el sitio web',

        ]);
        Permission::create([
            'name'        => 'Edición de avisos',
            'slug'        => 'aviso.edit',
            'description' => 'Edición de avisos en el sitio web',

        ]);
        Permission::create([
            'name'        => 'Eliminar avisos',
            'slug'        => 'aviso.destroy',
            'description' => 'Eliminar avisos en el sitio web',

        ]);
    }
}
