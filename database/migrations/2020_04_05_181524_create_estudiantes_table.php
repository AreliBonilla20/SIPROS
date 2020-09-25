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
            $table->string('carne',7)->unique()->primary();
            $table->string('nombres',100);
            $table->string('apellidos',100);
            $table->date('fecha_nacimiento');
            $table->string('dui',10)->unique();
            $table->string('direccion',150);
            $table->string('email',100);
            $table->string('telefono',9);
            $table->integer('area_id')->unsigned()->foreign()->references('id')->on('areas')->onDelete('cascade');
            $table->string('codigo')->foreign()->references('codigo')->on('carreras')->onDelete('cascade');
            $table->integer('sexo_id')->unsigned()->foreign()->references('id')->on('sexo')->onDelete('cascade');
            $table->integer('municipio_id')->unsigned()->foreign()->references('id')->on('municipios')->onDelete('cascade');
            $table->integer('departamento_id')->unsigned()->foreign()->references('id')->on('departamentos')->onDelete('cascade');
            $table->string('estado_servicio',25);
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
