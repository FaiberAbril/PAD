<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class ProgramasAcademicos extends Model
{
    protected $table = 'programas_academicos';
    protected $primaryKey = 'cod_programa';
    protected $fillable = ['cod_programa', 'nombre_programa', 'codigo_programa', 'nombre_facultad'];

}
