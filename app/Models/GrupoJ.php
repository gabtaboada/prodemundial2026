<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoJ extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_j';

    protected $fillable = [
        'J_Partido',
        'J_Equipo1', 'J_Bandera1', 'J_abreviado1',
        'J_Equipo2', 'J_Bandera2', 'J_abreviado2',
    ];
}
