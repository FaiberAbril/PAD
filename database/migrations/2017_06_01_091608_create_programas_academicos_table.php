<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramasAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programas_academicos', function (Blueprint $table) {
            $table->increments('cod_programa');
            $table->string('nombre_programa', 100);
            $table->string('codigo_programa', 100);
            $table->string('nombre_facultad', 100);
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
        Schema::drop('programas_academicos');
    }
}
