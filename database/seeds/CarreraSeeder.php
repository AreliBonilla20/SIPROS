<?php

use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carreras')->insert([
            'codigo'         => 'D10801',
            'nombre_carrera' => 'Doctorado en Ciencias Económicas',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'L10801',
            'nombre_carrera' => 'Licenciatura en Economía',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'L10802',
            'nombre_carrera' => 'Licenciatura en Contaduría Pública',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'L10803',
            'nombre_carrera' => 'Licenciatura en Admón. de Empresas',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'L10804',
            'nombre_carrera' => 'Licenciatura en Mercadeo Internacional',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'M10807',
            'nombre_carrera' => 'Maestría en Administracion Financiera',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'M10809',
            'nombre_carrera' => 'Maestría en Consultoría Empresarial',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'M10810',
            'nombre_carrera' => 'Maestría en Economía para el Desarrollo',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'M10811',
            'nombre_carrera' => 'Maestría en Sistemas Integrados de Gestión de Calidad',
        ]);
        DB::table('carreras')->insert([
            'codigo'         => 'M10812',
            'nombre_carrera' => 'Maestría en Políticas Públicas',
        ]);
    }
}
