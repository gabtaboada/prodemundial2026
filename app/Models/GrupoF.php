<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoF extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_f';

    protected $fillable = [
        'F_Partido',
        'F_Equipo1', 'F_Bandera1', 'F_abreviado1',
        'F_Equipo2', 'F_Bandera2', 'F_abreviado2',
    ];
}
