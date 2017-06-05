<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class Asignaturas extends Model
{
    protected $table = 'asignaturas';
    protected $primaryKey = 'cod_asignatura';
    protected $fillable = ['cod_asignatura', 'nombre_asignatura', 'codigo_asignatura', 'htd', 'hta', 'creditos', 'cod_programa'];
}
