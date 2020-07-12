<?php

use Illuminate\Database\Seeder;

class InstitucionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Institucion::class, 80)->create();
    }
}
