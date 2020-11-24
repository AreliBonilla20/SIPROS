<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Estudiante;

class EditarEstudianteTest extends TestCase
{
   public function testEditar()
    {
        //$this->artisan('db:seed');
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->get('/expedientes/editar/MH11066');
        $response->assertStatus(200);
        $response->assertViewIs('Expedientes.expediente_editar');
    }

   public function testUpdate()
    {
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->post('/expedientes/actualizar/MH11066', [
            'carne'=>'MH11066',
            'nombres'=>'Elmer Alexander',
            'apellidos'=>'Mejía Huiza',
            'fecha_nacimiento'=>'14/02/1993',
            'sexo_id'=>'2',
            'codigo'=>'L10803',
            'direccion'=>'Direccion 3',
            'dui'=>'11223344-7',
            'municipio_id'=>'214',
            'departamento_id'=>'6',
            'email'=>'mh11066@ues.edu,sv',
            'telefono'=>'2222-2222',
            'area_id'=>'1',
        ]);
        $estudiante=Estudiante::orderBy('carne','nombres','apellidos','carrera')->first();
        $this->assertEquals($estudiante->carne, 'MH11066');
        $this->assertEquals($estudiante->nombres, 'Elmer Alexander');
        $this->assertEquals($estudiante->apellidos, 'Mejía Huiza');
        $this->assertEquals($estudiante->carrera->nombre_carrera, 'Licenciatura en Admón. de Empresas');
        //$response->assertRedirect('/expedientes');
    }
}
