<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            #$table->increments('id');
            $table->string('carne')->unique()->primary();
            $table->string('nombres');
            $table->string('apellidos');
            #$table->integer('edad');
            $table->date('fecha_nacimiento');
            $table->string('dui')->unique();
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono');
            $table->string('area');
            $table->string('codigo')->foreing()->references('codigo')->on('carreras')->onDelete('cascade');
            $table->integer('sexo_id')->unsigned()->foreing()->references('id')->on('sexo')->onDelete('cascade');
            $table->integer('municipio_id')->unsigned()->foreing()->references('id')->on('municipios')->onDelete('cascade');
            $table->integer('departamento_id')->unsigned()->foreing()->references('id')->on('departamentos')->onDelete('cascade');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
}
