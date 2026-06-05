<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoE extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_e';

    protected $fillable = [
        'E_Partido',
        'E_Equipo1', 'E_Bandera1', 'E_abreviado1',
        'E_Equipo2', 'E_Bandera2', 'E_abreviado2',
    ];
}
