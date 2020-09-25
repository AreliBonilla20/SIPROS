<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',150);
            $table->unsignedInteger('tipo_institucion_id')->foreign()->references('id')->on('tipo_institucions')->onDelete('cascade');
            $table->string('direccion',150);
            $table->unsignedInteger('id_region')->foreign()->references('id')->on('regions')->onDelete('cascade');
            $table->unsignedInteger('id_departamento')->foreign()->references('id')->on('departamentos')->onDelete('cascade');
            $table->unsignedInteger('id_municipio')->foreign()->references('id')->on('municipios')->onDelete('cascade');
            $table->unsignedInteger('sector_id')->foreign()->references('id')->on('sectors')->onDelete('cascade');
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
        Schema::dropIfExists('institucions');
    }
}
