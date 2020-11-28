<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Estudiante;

class CrearEstudianteTest extends TestCase
{
    public function testCreate()
    {
        //$this->artisan('db:seed');
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->get('/expedientes/crear');
        $response->assertStatus(200);
        $response->assertViewIs('Expedientes.expediente_nuevo');
    }
    public function testStore()
    {
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->post('/expedientes/guardar', [
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
            'telefono'=>'3333-3333',
            'area_id'=>'1',
        ]);
        $estudiante=Estudiante::orderBy('carne','nombres','apellidos','carrera')->first();
        $this->assertEquals($estudiante->carne, 'MH11066');
        $this->assertEquals($estudiante->nombres, 'Elmer Alexander');
        $this->assertEquals($estudiante->apellidos, 'Mejía Huiza');
        $this->assertEquals($estudiante->carrera->nombre_carrera, 'Licenciatura en Admón. de Empresas');
        $response->assertRedirect('/');
    }
}
