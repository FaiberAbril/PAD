<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('cod_usuario');
            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->integer('tipo_documento');
            $table->integer('documento');
            $table->integer('celular');
            $table->string('correo', 100);
            $table->string('nombreusuario', 100);
            $table->string('clave', 100);
            $table->integer('cod_perfil')->unsigned();
            $table->foreign('cod_perfil')->references('cod_perfil')->on('perfiles');
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
        Schema::drop('usuarios');
    }
}
