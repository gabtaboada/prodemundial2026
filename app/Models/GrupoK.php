<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoK extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_k';

    protected $fillable = [
        'K_Partido',
        'K_Equipo1', 'K_Bandera1', 'K_abreviado1',
        'K_Equipo2', 'K_Bandera2', 'K_abreviado2',
    ];
}
