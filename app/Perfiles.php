<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class Perfiles extends Model
{
    protected $table = 'perfiles';
    protected $primaryKey = 'cod_perfil';
    protected $fillable = ['cod_perfil','nombre_perfil'];
}
