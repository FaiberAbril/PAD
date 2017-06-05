<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{

    protected $table = 'usuarios';
    protected $primaryKey = 'cod_usuario';
    protected $fillable = ['cod_usuario', 'nombres', 'apellidos', 'tipo_documento', 'documento', 'celular', 'correo', 'nombreusuario', 'clave', 'cod_perfil', 'cod_programa'];
}
