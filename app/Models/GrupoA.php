<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoA extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_a';

    protected $fillable = [
        'A_Partido',
        'A_Equipo1', 'A_Bandera1', 'A_abreviado1',
        'A_Equipo2', 'A_Bandera2', 'A_abreviado2',
    ];
}
