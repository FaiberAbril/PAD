<?php

namespace pad;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    protected $table = 'grupos';
    protected $primaryKey = 'cod_grupo';
    protected $fillable = ['cod_grupo','nombre_grupo','codigo_grupo'];

}
