<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memorias', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('asignacion_id')->foreing()->references('id')->on('asignacions');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedInteger('docente_benef_m')->nullable()->default(0);
            $table->unsignedInteger('docente_benef_f')->nullable()->default(0);
            $table->unsignedInteger('personal_benef_m')->nullable()->default(0);
            $table->unsignedInteger('personal_benef_f')->nullable()->default(0);
            $table->unsignedInteger('estudiante_benef_m')->nullable()->default(0);
            $table->unsignedInteger('estudiante_benef_f')->nullable()->default(0);
            $table->unsignedInteger('otros_benef_m')->nullable()->default(0);
            $table->unsignedInteger('otros_benef_f')->nullable()->default(0);
            $table->unsignedInteger('total_benef_m');
            $table->unsignedInteger('total_benef_f');
            $table->unsignedInteger('total_benef');
            $table->double('inversion_institucion');
            $table->double('inversion_estudiante');
            $table->unsignedInteger('horas_completadas');
            $table->string('estado_constancia');
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
        Schema::dropIfExists('memorias');
    }
}
