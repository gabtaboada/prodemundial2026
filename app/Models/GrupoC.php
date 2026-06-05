<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoC extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_c';

    protected $fillable = [
        'C_Partido',
        'C_Equipo1', 'C_Bandera1', 'C_abreviado1',
        'C_Equipo2', 'C_Bandera2', 'C_abreviado2',
    ];
}
