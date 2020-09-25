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
            $table->string('nombre',250);
            $table->string('area_de_conocimiento',250);
            $table->string('objetivos',250);
            $table->string('logros',250);
            $table->string('id_institucion')->foreign()->references('id')->on('institucions')->onDelete('cascade');
            $table->integer('cantidad_de_estudiantes');
            $table->string('nombre_encargado',100);
            $table->string('telefono',9);
            $table->string('email',150);
            $table->string('codigo_carrera')->foreign()->references('codigo')->on('carreras')->onDelete('cascade');
            $table->string('estado_proyecto',25);
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
