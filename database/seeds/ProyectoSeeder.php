<?php

use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proyectos')->insert([
            'id' => 1,
            'nombre' => 'Asistente Contable',
            'area_de_conocimiento' => 'Asesoría y asistencia técnica',
            'objetivos' => 'Apoyar a la institución de manera objetiva',
            'logros' => 'Fortalecer los conocimientos en el área financiera',
            'id_institucion' => 1,
            'cantidad_de_estudiantes' => 5,
            'nombre_encargado' => 'Licda. Sara Méndez',
            'telefono' => '2467-9023',
            'email' => 'saramdnz@gmail.com',
            'codigo_carrera' => 'L10804',
            'estado_proyecto' => 'Disponible',
            'estudiantes_inscritos' => 0,
        ]);
        DB::table('proyectos')->insert([
            'id' => 2,
            'nombre' => 'Auxiliar Contable',
            'area_de_conocimiento' => 'Asistencia técnica',
            'objetivos' => 'Apoyar a la empresa de manera objetiva',
            'logros' => 'Fortalecer los conocimientos en el área financiera',
            'id_institucion' => 5,
            'cantidad_de_estudiantes' => 8,
            'nombre_encargado' => 'Licda. Ines Gonzales',
            'telefono' => '7812-3647',
            'email' => 'inecita96@gmail.com',
            'codigo_carrera' => 'L10803',
            'estado_proyecto' => 'Disponible',
            'estudiantes_inscritos' => 2,
        ]);
      
    }
}
