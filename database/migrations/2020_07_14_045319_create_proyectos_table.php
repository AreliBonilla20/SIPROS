<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('area_de_conocimiento');
            $table->string('objetivos');
            $table->string('logros');
            $table->unsignedInteger('id_institucion');
            $table->integer('cantidad_de_estudiantes');
            $table->string('nombre_encargado');
            $table->string('telefono');
            $table->string('email');
            $table->string('codigo_carrera')->foreign()->references('codigo')->on('carreras');
            $table->string('estado_proyecto');
            $table->integer('estudiantes_inscritos');
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
        Schema::dropIfExists('proyectos');
    }
}
