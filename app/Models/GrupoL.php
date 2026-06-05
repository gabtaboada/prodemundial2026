<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GrupoL extends Model
{
    use SoftDeletes;

    protected $table = 'grupo_l';

    protected $fillable = [
        'L_Partido',
        'L_Equipo1', 'L_Bandera1', 'L_abreviado1',
        'L_Equipo2', 'L_Bandera2', 'L_abreviado2',
    ];
}
