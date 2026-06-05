<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoH extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_h';

    protected $fillable = [
        'H_Partido',
        'H_Equipo1', 'H_Bandera1', 'H_abreviado1',
        'H_Equipo2', 'H_Bandera2', 'H_abreviado2',
    ];
}
