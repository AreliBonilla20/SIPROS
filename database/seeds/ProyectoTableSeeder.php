<?php

use Illuminate\Database\Seeder;

class ProyectoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Proyecto::class, 80)->create();
    }
}
