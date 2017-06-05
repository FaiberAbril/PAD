<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class Horarios extends Model
{
    protected $table = 'horarios';
    protected $primaryKey = 'cod_horario';
    protected $fillable = ['cod_horario', 'codigo_horario', 'dia_semana', 'estado', 'hora_inicio', 'hora_fin'];

}
