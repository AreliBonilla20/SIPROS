<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('carne')->unique()->primary();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fecha_nacimiento');
            $table->string('dui')->unique();
            $table->string('direccion');
            $table->string('email');
            $table->string('telefono');
            $table->integer('area_id')->unsigned()->foreign()->references('id')->on('areas')->onDelete('cascade');
            $table->string('codigo')->foreign()->references('codigo')->on('carreras')->onDelete('cascade');
            $table->integer('sexo_id')->unsigned()->foreign()->references('id')->on('sexo')->onDelete('cascade');
            $table->integer('municipio_id')->unsigned()->foreign()->references('id')->on('municipios')->onDelete('cascade');
            $table->integer('departamento_id')->unsigned()->foreign()->references('id')->on('departamentos')->onDelete('cascade');
            $table->string('estado_servicio');
            $table->integer('horas_registradas');
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
