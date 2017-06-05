<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asignaturas', function (Blueprint $table) {
            $table->increments('cod_asignatura');
            $table->string('nombre_asignatura', 100);
            $table->string('codigo_asignatura', 100);
            $table->integer('htd');
            $table->integer('hta');
            $table->integer('creditos');
            $table->integer('cod_programa')->unsigned();
            $table->foreign('cod_programa')->references('cod_programa')->on('programas_academicos');
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
        Schema::drop('asignaturas');
    }
}
