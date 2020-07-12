<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PermissionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ExpedienteTableSeeder::class);
        $this->call(ProyectoTableSeeder::class);
        $this->call(InstitucionTableSeeder::class);
    }
}
