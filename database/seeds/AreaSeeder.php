<?php

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            'id' => '1',
            'area_interes' => 'Administración',
        ]);
        DB::table('areas')->insert([
            'id' => '2',
            'area_interes' => 'Auditoría',
        ]);
        DB::table('areas')->insert([
            'id' => '3',
            'area_interes' => 'Auxiliar contable',
        ]);
        DB::table('areas')->insert([
            'id' => '4',
            'area_interes' => 'Comercialización',
        ]);
        DB::table('areas')->insert([
            'id' => '5',
            'area_interes' => 'Consultoría Empresarial',
        ]);
        DB::table('areas')->insert([
            'id' => '6',
            'area_interes' => 'Contabilidad',
        ]);
        DB::table('areas')->insert([
            'id' => '7',
            'area_interes' => 'Economía Politíca',
        ]);
        DB::table('areas')->insert([
            'id' => '8',
            'area_interes' => 'Financiera',
        ]);
        DB::table('areas')->insert([
            'id' => '9',
            'area_interes' => 'Finanzas',
        ]);
        DB::table('areas')->insert([
            'id' => '10',
            'area_interes' => 'Instructoría',
        ]);
        DB::table('areas')->insert([
            'id' => '11',
            'area_interes' => 'Mercadeo',
        ]);
        DB::table('areas')->insert([
            'id' => '12',
            'area_interes' => 'Merchadising',
        ]);
        DB::table('areas')->insert([
            'id' => '13',
            'area_interes' => 'Producción',
        ]);
        DB::table('areas')->insert([
            'id' => '14',
            'area_interes' => 'Publicidad',
        ]);
        DB::table('areas')->insert([
            'id' => '15',
            'area_interes' => 'Recursos Humanos',
        ]);
        DB::table('areas')->insert([
            'id' => '16',
            'area_interes' => 'Tributos',
        ]);
    }
        
}
