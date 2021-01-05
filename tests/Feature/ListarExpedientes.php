<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListarExpedientes extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testListar()
    {
        //$this->artisan('db:seed');
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->get('/expedientes');
        $response->assertStatus(200);
        $response->assertViewIs('Expedientes.expedientes_listado');
    }
}

