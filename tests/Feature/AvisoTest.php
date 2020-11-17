<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Aviso;

class AvisoTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    //use RefreshDatabase;
    public function testCreate()
    {
        //$this->artisan('db:seed');
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->get('sitio/aviso');
        $response->assertStatus(200);
        $response->assertViewIs('AdminSitio.avisocrear');
    }

    public function testStore()
    {
        $login=$this->post('/login', [
            'email'=>'admin@gmail.com',
            'password'=>'secret',
        ]);
        $response=$this->post('sitio/aviso_post', [
            'titulo'=>'Oficinas cerradas',
            'descripcion'=>'El dia de mañana las oficinas permaneceran cerradas',
        ]);
        $aviso=Aviso::orderBy('id','desc')->first();
        $this->assertEquals($aviso->titulo, 'Oficinas cerradas');
        $this->assertEquals($aviso->descripcion, 'El dia de mañana las oficinas permaneceran cerradas');
        $response->assertRedirect('sitio/avisos');
        
    }
}
