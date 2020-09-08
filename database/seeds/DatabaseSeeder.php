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
        //$this->call(AvisoSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(ProyectoSeeder::class);
        
    }
}
