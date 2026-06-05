<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoB extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_b';

    protected $fillable = [
        'B_Partido',
        'B_Equipo1', 'B_Bandera1', 'B_abreviado1',
        'B_Equipo2', 'B_Bandera2', 'B_abreviado2',
    ];
}
