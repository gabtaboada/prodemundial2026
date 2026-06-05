<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoI extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_i';

    protected $fillable = [
        'I_Partido',
        'I_Equipo1', 'I_Bandera1', 'I_abreviado1',
        'I_Equipo2', 'I_Bandera2', 'I_abreviado2',
    ];
}
