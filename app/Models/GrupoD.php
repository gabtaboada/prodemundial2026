<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoD extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_d';

    protected $fillable = [
        'D_Partido',
        'D_Equipo1', 'D_Bandera1', 'D_abreviado1',
        'D_Equipo2', 'D_Bandera2', 'D_abreviado2',
    ];
}
