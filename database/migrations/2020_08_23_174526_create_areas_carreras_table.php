<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreasCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_carreras', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('area_id')->unsigned()->foreing()->references('id')->on('areas')->onDelete('cascade');
            $table->string('codigo')->foreing()->references('codigo')->on('carreras')->onDelete('cascade');
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
        Schema::dropIfExists('areas_carreras');
    }
}
